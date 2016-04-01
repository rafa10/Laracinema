<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

    /**
    * Documentation et Examples
    *http://paypal.github.io/PayPal-PHP-SDK/sample/
    *
    * Paypal API via Laravel
    *https://github.com/anouarabdsslm/laravel-paypalpayment
    *
    * API Paypal
    *https://developer.paypal.com/docs/api/
    *
    * Paypal API SDK
    *https://github.com/paypal/PayPal-PHP-SDK
    *
    * Paypal API via Laravel
    *https://github.com/anouarabdsslm/laravel-paypalpayment
    *
    */

class PaymentController extends Controller
{

    /**
     * Constructor for initialize Paypal.
     */
    public function __construct()
    {
        $this->_apiContext = Paypal::ApiContext(
            'ASqSIbQls1KkjpEwzQAyjQryvlNsO_rxL2P_58kaw28GcKHTXXtuoaNGxBi3xXdn73VU_JCha65sxcOv',
            'EAPE21MPEIf7SJntSXh-JifzkSmQX1tbOSwEM4PYhDIqyXsYQmgyl2FXIBzqlXHAbss1kFfGvq2HSv2A'
        );

        $this->_apiContext->setConfig([
                'mode'                   => 'sandbox',
                'service.EndPoint'       => 'https://api.sandbox.paypal.com',
                'http.ConnectionTimeOut' => 30,
                'log.LogEnabled'         => true,
                'log.FileName'           => storage_path('logs/paypal.log'),
                'log.LogLevel'           => 'FINE',
            ]
        );
    }

    public function checkout()
    {
        $ids = session('key', []);

        $total = 0;
        foreach ($ids as $id) {
            $movie = Movies::find($id); // récupérer chaque film
            $total = $total + $movie->price; // calculer le total des prix des film
        }

        // Adresse / coordonnées de l'utilisateur qui paye
        $addr= Paypalpayment::address();
        $addr->setLine1("26 rue emile decorps");
        $addr->setCity("Lyon");
        $addr->setState("FR");
        $addr->setPostalCode("69100");
        $addr->setCountryCode("FR");
        $addr->setPhone("06-74-58-56-48");

        // Credit Card OU via la plateform Paypal
        $card = Paypalpayment::creditCard();
        $card->setType("visa")
            ->setNumber("4758411877817150")
            ->setExpireMonth("05")
            ->setExpireYear("2019")
            ->setCvv2("456")
            ->setFirstName("Julien")
            ->setLastName("Boyer");

        //initialiser le payment via la credit card
        $fi = Paypalpayment::fundingInstrument();
        $fi->setCreditCard($card);

        // ### Payer
        $payer = Paypalpayment::payer();
        $payer->setPaymentMethod("credit_card") // credit_card OU paypal
        ->setFundingInstruments(array($fi));


        $item1 = Paypalpayment::item();
        $item1->setName('Films commandés')
            ->setDescription('Tous les films mis en session dans le panier')
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setTax(0)
            ->setPrice($total);

        $itemList = Paypalpayment::itemList();
        $itemList->setItems(array($item1));

        $details = Paypalpayment::details();
        $details->setShipping("1")
            ->setTax("1")
            //total of items prices
            ->setSubtotal($total);

        //Payment Amount
        $amount = Paypalpayment::amount();
        $amount->setCurrency("EUR")
            ->setTotal($total)
            ->setDetails($details);

        $transaction = Paypalpayment::transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Ma description de transaction")
            ->setInvoiceNumber(uniqid());

        // ### Payment
        $payment = Paypalpayment::payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_apiContext);
        } catch (\PPConnectionException $ex) {
            return  "Exception: " . $ex->getMessage() . PHP_EOL;
            exit(1);
        }
    }
}

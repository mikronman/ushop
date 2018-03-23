<?php

namespace app\controllers;

require 'autoload.php';
require '../vendor/autoload.php';


use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;


class Transactions extends Controller
{
    public function __construct()
    {

    }

    public function voidTransaction($x)
    {
        define("AUTHORIZENET_LOG_FILE", "phplog");
// Common setup for API credentials
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName("3FfKM3mx4Wq3");
        $merchantAuthentication->setTransactionKey("8p45qL35WpC9skkb");
        $refId = 'ref' . time();

// Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        //$creditCard->setCardNumber($_POST["cardNumber"]);
        //$creditCard->setExpirationDate( "2038-12");
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

// Create a transaction
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("voidTransaction");
        $transactionRequestType->setRefTransId($x);

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId($refId);
        $request->setTransactionRequest($transactionRequestType);
        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

        if ($response != null) {
            if ($response->getMessages()->getResultCode() == 'Ok' || $response->getMessages()->getResultCode() == 'Error') {
                $tresponse = $response->getTransactionResponse();

                if ($tresponse != null && $tresponse->getMessages() != null) {
                    echo " Transaction Response code : " . $tresponse->getResponseCode() . "\n";
                    echo " Void transaction SUCCESS AUTH CODE: " . $tresponse->getAuthCode() . "\n";
                    echo " Void transaction SUCCESS TRANS ID  : " . $tresponse->getTransId() . "\n";
                    echo " Code : " . $tresponse->getMessages()[0]->getCode() . "\n";
                    echo " Description : " . $tresponse->getMessages()[0]->getDescription() . "\n";
                } else {
                    echo "Transaction Failed \n";
                    if ($tresponse->getErrors() != null) {
                        echo " Error code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                        echo " Error message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
                    }
                }
            } else {
                echo "Transaction Failed \n";
                $tresponse = $response->getTransactionResponse();
                if ($tresponse != null && $tresponse->getErrors() != null) {
                    echo " Error code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                    echo " Error message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
                } else {
                    echo " Error code  : " . $response->getMessages()->getMessage()[0]->getCode() . "\n";
                    echo " Error message : " . $response->getMessages()->getMessage()[0]->getText() . "\n";
                }
            }
        } else {
            echo "No response returned \n";
        }
        return $response;
    }

    public function refundTransaction($amount)
    {
        // Common setup for API credentials
        $session = Yii::$app->session;
        $session->open();
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName("3FfKM3mx4Wq3");
        $merchantAuthentication->setTransactionKey("8p45qL35WpC9skkb");
        $refId = 'ref' . time();
        // Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber(Yii::$app->session['account_number']);
        $creditCard->setExpirationDate("0220");
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);
        //create a transaction
        $transactionRequest = new AnetAPI\TransactionRequestType();
        $transactionRequest->setTransactionType("refundTransaction");
        $transactionRequest->setAmount($amount);
        $transactionRequest->setPayment($paymentOne);

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId($refId);
        $request->setTransactionRequest($transactionRequest);
        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        if ($response != null) {
            if ($response->getMessages()->getResultCode() == 'Ok' || $response->getMessages()->getResultCode() == 'Error') {
                $tresponse = $response->getTransactionResponse();

                if ($tresponse != null && $tresponse->getMessages() != null) {
                    echo " Transaction Response code : " . $tresponse->getResponseCode() . "\n";
                    echo "Refund SUCCESS: " . $tresponse->getTransId() . "\n";
                    echo " Code : " . $tresponse->getMessages()[0]->getCode() . "\n";
                    echo " Description : " . $tresponse->getMessages()[0]->getDescription() . "\n";
                } else {
                    echo "Transaction Failed \n";
                    //if($tresponse->getErrors() != null)
                    if ($tresponse != null && $tresponse->getErrors() != null) {
                        echo " Error code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                        echo " Error message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
                    }
                }
            } else {
                echo "Transaction Failed \n";
                $tresponse = $response->getTransactionResponse();
                if ($tresponse != null && $tresponse->getErrors() != null) {
                    echo " Error code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                    echo " Error message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
                } else {
                    echo " Error code  : " . $response->getMessages()->getMessage()[0]->getCode() . "\n";
                    echo " Error message : " . $response->getMessages()->getMessage()[0]->getText() . "\n";
                }
            }
        } else {
            echo "No response returned \n";
        }
        return $response;
    }
    public function processOrder($x, $externalOrder)
    {
        include("../web/connect.php");
        define("AUTHORIZENET_LOG_FILE","phplog");
        $cardNumber = ($externalOrder) ?  $_POST["cardNumber"] : $x["attributes"]["cc_last_four"];
        $amt = ($externalOrder) ? $_POST["amt"] : $x['attributes']['amount_paid'];
        $recurringBilling = ($externalOrder) ? $_POST["recurring_billing"] : $x['attributes']['billing_cycle'];
        $firstName = ($externalOrder) ? $_POST["first_name"] : $x['attributes']['first_name'];
        $lastName = ($externalOrder) ? $_POST["last_name"] : $x['attributes']['last_name'];
        $email = ($externalOrder) ? "" : $x['attributes']['email'];
        $address = ($externalOrder) ? $_POST["address"] : $x['attributes']['address'];
        $city = ($externalOrder) ? $_POST["city"] : $x['attributes']['city'];
        $state = ($externalOrder) ? $_POST["state"] : $x['attributes']['state'];
        $zip = ($externalOrder) ? $_POST["zip"] : $x['attributes']['zip'];
        $country = ($externalOrder) ? $_POST["country"] : $x['attributes']['country'];
        $productName = ($externalOrder) ? $_POST["product_name"] : $x['attributes']['product_name'];
        $productQuantity = ($externalOrder) ? $_POST["product_quantity"] : $x['attributes']['quantity'];
        $productId = ($externalOrder) ? $_POST["product_id"] : "";
        $expirationDate = ($externalOrder) ? $_POST["expiration_date"] : "2028-12";
        $cvv = ($externalOrder) ? $_POST["cvv"] : "";
        $time = date('Y-m-d H:i:s');
// Common setup for API credentials
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName("3FfKM3mx4Wq3");
        $merchantAuthentication->setTransactionKey("8p45qL35WpC9skkb");
        $refId = 'ref' . time();

//Create CIM
        $cim = new AnetAPI\CreateCustomerPaymentProfileRequest();
        $cim->getCustomerProfileId();


// Create the Bill To info
        $billto = new AnetAPI\CustomerAddressType();
        $billto->setFirstName($firstName);
        $billto->setLastName($lastName);
        //$billto->setCompany("Souveniropolis");
        $billto->setAddress($address);
        $billto->setCity($city);
        $billto->setState($state);
        $billto->setZip($zip);
        $billto->setCountry($country);
// Set recurring billing if there is one
        if(!empty($recurringBilling)) {
            $recurringBillingLength = new AnetAPI\ProfileTransOrderType();
            $recurringBillingLength->getRecurringBilling($recurringBilling);
            $recurringBillingLength->setRecurringBilling(true);
        }
// Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($cardNumber);
        $creditCard->setExpirationDate( $expirationDate );
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);
        $x_reccurringBiling = "30";

// Create a transaction
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount($amt);
        $transactionRequestType->setPayment($paymentOne);
        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId( $refId);
        $request->setTransactionRequest($transactionRequestType);
        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);


        function insertSuccessfulTransaction()
        {

        }
        if ($response != null)
        {
            $tresponse = $response->getTransactionResponse();
            if (($tresponse != null) && ($tresponse->getResponseCode()=="1"))
            {
                echo "Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "\n";
                echo "Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "\n";
                echo "order id : " . $x["attributes"]["id"]  . "\n";
                $transactionID = $tresponse->getTransId();
                if($externalOrder){
                $stmt = $db->prepare("INSERT INTO orders(transaction_id, product_id, quantity, product_name, amount_paid, first_name, last_name, email, address, city, state , zip, country, order_date)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->bindValue(1, $tresponse->getTransId());
                $stmt->bindValue(2, $productId);
                $stmt->bindValue(3, $productQuantity);
                $stmt->bindValue(4,  $productName);
                $stmt->bindValue(5, $amt);
                $stmt->bindValue(6, $firstName);
                $stmt->bindValue(7, $lastName);
                $stmt->bindValue(8, $email);
                $stmt->bindValue(9, $address);
                $stmt->bindValue(10, $city);
                $stmt->bindValue(11, $state);
                $stmt->bindValue(12, $zip);
                $stmt->bindValue(13, $country);
                $stmt->bindValue(14, $time);
                $stmt->execute();
                    }
                    if(!$externalOrder)
                    {
                        var_dump($x["attributes"]["id"]);
                        $stmt = $db->prepare("Update orders set transaction_id = :transid Where id = :id");
                        $stmt->bindValue(":transid", $tresponse->getTransId());
                        $stmt->bindValue(":id", $x["attributes"]["id"]);
                        $stmt->execute();
                    }
                    return true;
            }
            else
            {
                echo "Charge Credit Card ERROR :  Invalid response" . $x["attributes"]["cc_last_four"] . "\n";
                echo "<pre>" . print_r($tresponse, 1) . "</pre>\n";
                return false;
            }
        }
        else
        {
            echo  "Charge Credit Card Null rlog.esponse returned";
            return false;
        }

    }
}


<?php
// include file
include 'admin/connection.inc.php';
include_once('easebuzz-lib/easebuzz_payment_gateway.php');


/*
    * Create object for call easepay payment gate API and Pass required data into constructor.
    * Get API response.
    *  
    * param string $_GET['apiname'] - holds the API name.
    * param  string $MERCHANT_KEY - holds the merchant key.
    * param  string $SALT - holds the merchant salt key.
    * param  string $ENV - holds the env(enviroment).
    * param  string $_POST - holds the form data.
    *
    * ##Return values
    *   
    * - return array ApiResponse['status']== 1 successful.
    * - return array ApiResponse['status']== 0 error.
    *
    * @param string $_GET['apiname'] - holds the API name.
    * @param  string $MERCHANT_KEY - holds the merchant key.
    * @param  string $SALT - holds the merchant salt key.
    * @param  string $ENV - holds the env(enviroment).
    * @param  string $_POST - holds the form data.
    *
    * @return array ApiResponse['status']== 1 successful. 
    * @return array ApiResponse['status']== 0 error. 
    *
    */
//echo "<pre>";
//print_r($_SESSION);
    $apiname = "initiate_payment";
    $_GET['api_name']="initiate_payment";
//exit;

if (isset($_SESSION)) {
    // all the session variable data reciaving from the regitrations page
    $transation_id = rand(1000000000, 99999999999);
    $name = $_SESSION["name"] ;
    //$promoted_class = $_SESSION["promoted_class"] ;
    // $_SESSION["course_session"] = $course_session;
    // $_SESSION["name"] = $name;
    $phone_no = $_SESSION["phone_no"]; 
    $email = $_SESSION["email"] ;
    $amount = $_SESSION["amount"] ;
    
     $surl = $_SESSION['surl'];
    $furl = $_SESSION['surl'];
    
    // ammout is recieving from the conformation page
    //  $amount = $_SESSION['ammount'].'.00';
    //$amount="$amount";
    $postData = array(
        "txnid" => "$transation_id",
        "amount" => "$amount",
        "name" => "$name",
        "email" => "$email",
        "phone" => "$phone_no ",
        "productinfo" => "Laptop",
        "surl" => "$surl",
        "furl" => "$furl",
        "udf1" => "aaaa",
        "udf2" => "aaaa",
        "udf3" => "aaaa",
        "udf4" => "aaaa",
        "udf5" => "aaaa",
        "address1" => "aaaa",
        "address2" => "aaaa",
        "city" => "aaaa",
        "state" => "aaaa",
        "country" => "aaaa",
        "zipcode" => "123123"
    );

 


    /*
        * There are three approch to call easebuzz API.
        *
        * 1. using hidden api_name which is $_POST from form.
        * 2. using pass api_name into URL.
        * 3. using extract html file name then based on file name call API.
        *
        */

    // first way
    // $apiname = trim(htmlentities($_POST['api_name'], ENT_QUOTES));

    // second way
    $apiname = trim(htmlentities($_GET['api_name'], ENT_QUOTES));

    // third way
    // $url_link = $_SERVER['HTTP_REFERER'];
    // $apiname = explode('.', ( end( explode( '/',$url_link) ) ) )[0];
    // $apiname = trim(htmlentities($apiname, ENT_QUOTES));


    /*
        * Based on API call change the Merchant key and salt key for testing(initiate payment).
        */
    //   $MERCHANT_KEY = "U8VJRZ4ABF";
    // $SALT = "M87TPWFJ44";

    $MERCHANT_KEY = "OAU0980MVX";
    $SALT = "4LP8BZIIJ3";

    // $ENV = "test";    // setup test enviroment (testpay.easebuzz.in). 
    $ENV = "prod";   // setup production enviroment (pay.easebuzz.in).

    $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);

    // print_r("*********test1");

    if ($apiname === "initiate_payment") {

        /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
                Array ( [txnid] => T3SAT0B5OL [amount] => 100.0 [firstname] => jitendra [email] => test@gmail.com [phone] => 1231231235 [productinfo] => Laptop [surl] => http://localhost:3000/response.php [furl] => http://localhost:3000/response.php [udf1] => aaaa [udf2] => aa [udf3] => aaaa [udf4] => aaaa [udf5] => aaaa [address1] => aaaa [address2] => aaaa [city] => aaaa [state] => aaaa [country] => aaaa [zipcode] => 123123 ) 
            */

        $easebuzzObj->initiatePaymentAPI($postData);
    } else if ($apiname === "transaction") {

        /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
                Array ( [txnid] => TZIF0SS24C [amount] => 1.03 [email] => test@gmail.com [phone] => 1231231235 )
            */
        $result = $easebuzzObj->transactionAPI($postData);

        easebuzzAPIResponse($result);
    } else if ($apiname === "transaction_date" || $apiname === "transaction_date_api") {

        /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
                Array ( [merchant_email] => jitendra@gmail.com [transaction_date] => 06-06-2018 )
            */
        $result = $easebuzzObj->transactionDateAPI($postData);

        easebuzzAPIResponse($result);
    } else if ($apiname === "refund") {

        /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
                Array ( [txnid] => ASD20088 [refund_amount] => 1.03 [phone] => 1231231235 [email] => test@gmail.com [amount] => 1.03 )
            */
        $result = $easebuzzObj->refundAPI($postData);

        easebuzzAPIResponse($result);
    } else if ($apiname === "payout") {

        /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
               Array ( [merchant_email] => jitendra@gmail.com [payout_date] => 08-06-2018 )
            */
        $result = $easebuzzObj->payoutAPI($postData);

        easebuzzAPIResponse($result);
    } else {

        echo '<h1>You called wrong API, Pleae try again</h1>';
    }
} else {
    echo '<h1>Please fill all mandatory fields.</h1>';
}


/*
    *  Show All API Response except initiate Payment API
    */
function easebuzzAPIResponse($data)
{
    print_r($data);
}

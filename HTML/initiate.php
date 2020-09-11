<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();

//-------------------------------------------------------------------
//-------------------------------------------------------------------
//-------
//-------      Configs comes here
//-------
//-------------------------------------------------------------------
//-------------------------------------------------------------------

//$baseUrl = 'https://staging.payu.co.za'; //staging environment URL
$baseUrl = 'https://secure.paygate.co.za'; //production environment URL

//encryption key set in the Merchant Access Portal
$encryptionKey = 'secret';

$DateTime = new DateTime();

$data = array(
    'PAYGATE_ID'        => 10011072130,
    'REFERENCE'         => 'pgtest_123456789',
    'AMOUNT'            => 3299,
    'CURRENCY'          => 'ZAR',
    'RETURN_URL'        => 'http://bbgi.co.za/events.php',
    'TRANSACTION_DATE'  => $DateTime->format('Y-m-d H:i:s'),
    'LOCALE'            => 'en-za',
    'COUNTRY'           => 'ZAF',
    'EMAIL'             => 'customer@paygate.co.za',
);

$checksum = md5(implode('', $data) . $encryptionKey);

$data['CHECKSUM'] = $checksum;

$fieldsString = http_build_query($data);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, 'https://secure.paygate.co.za/payweb3/initiate.trans');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_NOBODY, false);
curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_HOST']);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldsString);

//execute post
$result = curl_exec($ch);

$querydata = array(
    'PAYGATE_ID'        => 10011072130,
    'PAY_REQUEST_ID'    => '23B785AE-C96C-32AF-4879-D2C9363DB6E8',
    'REFERENCE'         => 'pgtest_123456789'
);

$checksum = md5(implode('', $querydata) . $encryptionKey);

$querydata['CHECKSUM'] = $checksum;

$queryFieldsString = http_build_query($querydata);

//open connection
$querych = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($querych, CURLOPT_URL, 'https://secure.paygate.co.za/payweb3/query.trans');
curl_setopt($querych, CURLOPT_RETURNTRANSFER, true);
curl_setopt($querych, CURLOPT_NOBODY, false);
curl_setopt($querych, CURLOPT_REFERER, $_SERVER['HTTP_HOST']);
curl_setopt($querych, CURLOPT_POST, true);
curl_setopt($querych, CURLOPT_POSTFIELDS, $queryFieldsString);

//execute post
$queryResult = curl_exec($querych);
echo $queryResult;

//close connection
curl_close($ch);
curl_close($querych);


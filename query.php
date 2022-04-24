<?php
require('TouchNGo.php');

$transaction_id = $_POST['transaction_id'];
$acquirement_id = $_POST['acquirement_id'];

$data = [
    'transaction_id' => $transaction_id,
    'acquirement_id' => $acquirement_id
];

$tng = new TouchNGo();
$payload = $tng->queryOrder($data);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api-sd.tngdigital.com.my/alipayplus/acquiring/order/query.htm',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $payload,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
<?php
require_once( dirname( __DIR__ ) . '/source/Facade.php' );

use iiifx\Interkassa\Facade;

$shopId = '54b3b276bf4efca61d544432';
$testKey = 'nC8ZFeP7ZgkuSTuh';
$currency = 'USD';

$shop = Facade::createShop( [
    'shopId'       => $shopId,
    'secretKey'    => $testKey,
    'currencyCode' => $currency,
] );

$paymentId = 1000;
$paymentAmount = 175.5;
$paymentDescription = 'Описание платежа';

$payment = $shop->createPayment( [
    'paymentId'          => $paymentId,
    'paymentAmount'      => $paymentAmount,
    'paymentDescription' => $paymentDescription,
] );
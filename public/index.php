<?php

require __DIR__ . '/../vendor/autoload.php';

use Payum\Core\PayumBuilder;
use Payum\Payline\PaylineGatewayFactory;

$defaultConfig = [];

$payum = (new PayumBuilder)
    ->addGatewayFactory('payline', new PaylineGatewayFactory($defaultConfig))
    ->addDefaultStorages()
    ->addGateway('payline', [
        'factory' => 'payline',
        'sandbox' => true,
    ])

    ->getPayum()
;

var_dump($payum);
exit();
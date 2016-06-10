<?php
namespace Payum\Payline\Tests;

use Payum\Payline\PaylineGatewayFactory;
use Payum\Core\GatewayFactory;
use Payum\Core\PayumBuilder;

class PaylineGatewayFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldSubClassGatewayFactory()
    {
        $rc = new \ReflectionClass(PaylineGatewayFactory::class);
        $this->assertTrue($rc->isSubclassOf(GatewayFactory::class));
    }

    /**
     * @test
     */
    public function gateway()
    {

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
    }
}

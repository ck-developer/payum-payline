<?php
namespace Payum\Payline\Tests;

use Payum\Payline\PaylineGatewayFactory;
use Payum\Core\GatewayFactory;

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
}

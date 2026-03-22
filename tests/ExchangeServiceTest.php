<?php

use PHPUnit\Framework\TestCase;
use App\Service\ExchangeService;

class ExchangeServiceTest extends TestCase
{
    private ExchangeService $service;

    protected function setUp(): void
    {
        $this->service = new ExchangeService();
    }

    public function testBRLtoUSD()
    {
        $result = $this->service->convert(10, 'BRL', 'USD', 4.5);
        $this->assertEquals(45, $result);
    }

    public function testUSDtoBRL()
    {
        $result = $this->service->convert(10, 'USD', 'BRL', 5);
        $this->assertEquals(50, $result);
    }

    public function testInvalidConversion()
    {
        $this->expectException(Exception::class);
        $this->service->convert(10, 'USD', 'EUR', 1.1);
    }
}

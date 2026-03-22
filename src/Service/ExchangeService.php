<?php
namespace App\Service;

use Exception;

class ExchangeService
{
    private array $allowed = [
        'BRL_USD',
        'USD_BRL',
        'BRL_EUR',
        'EUR_BRL'
    ];

    public function convert(float $amount, string $from, string $to, float $rate): float
    {
        $key = "{$from}_{$to}";

        if (!in_array($key, $this->allowed)) {
            throw new Exception('Conversão não suportada');
        }

        return round($amount * $rate, 2);
    }
}

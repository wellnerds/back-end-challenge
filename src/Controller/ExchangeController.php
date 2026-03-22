<?php
namespace App\Controller;

use App\Service\ExchangeService;
use Exception;

class ExchangeController
{
    private ExchangeService $service;

    public function __construct()
    {
        $this->service = new ExchangeService();
    }

    public function convert(float $amount, string $from, string $to, float $rate): array
    {
        try {
            $result = $this->service->convert($amount, $from, $to, $rate);

            return [
                'valorConvertido' => $result,
                'simboloMoeda' => $this->getSymbol($to)
            ];
        } catch (Exception $e) {
            http_response_code(400);
            return ['error' => $e->getMessage()];
        }
    }

    private function getSymbol(string $currency): string
    {
        return match ($currency) {
            'USD' => '$',
            'BRL' => 'R$',
            'EUR' => '€',
            default => ''
        };
    }
}
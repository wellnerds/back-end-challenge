<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\ExchangeController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

header('Content-Type: application/json');

// Só aceita GET
if ($method !== 'GET') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}

// Nova rota SEM rate
$pattern = '#^/exchange/(\d+(?:\.\d+)?)/(BRL|USD|EUR)/(BRL|USD|EUR)$#';

if (preg_match($pattern, $uri, $matches)) {

    $controller = new ExchangeController();

    echo json_encode($controller->convert(
        (float)$matches[1],
        $matches[2],
        $matches[3]
    ));

} else {
    http_response_code(404);
    echo json_encode(['error' => 'Route not found']);
}
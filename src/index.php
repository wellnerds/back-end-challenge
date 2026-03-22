<?php
<<<<<<< HEAD
/**
 * Back-end Challenge.
 *
 * PHP version 7.4
 *
 * Este será o arquivo chamado na execução dos testes automátizados.
 *
 * @category Challenge
 * @package  Back-end
 * @author   Seu Nome <seu-email@seu-provedor.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @link     https://github.com/apiki/back-end-challenge
 */
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

=======
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\ExchangeController;

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

header('Content-Type: application/json');

if ($method !== 'GET') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}

$pattern = '#^/exchange/(\d+(?:\.\d+)?)/(BRL|USD|EUR)/(BRL|USD|EUR)/(\d+(?:\.\d+)?)$#';

if (preg_match($pattern, $uri, $matches)) {
    $controller = new ExchangeController();
    echo json_encode($controller->convert(
        (float)$matches[1],
        $matches[2],
        $matches[3],
        (float)$matches[4]
    ));
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Route not found']);
}
>>>>>>> d3f7f4c (feat: implement currency conversion service)

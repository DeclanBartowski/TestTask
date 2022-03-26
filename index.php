<?php
/*
require_once 'lib/adapter/Delivery.php';
require_once 'lib/adapter/FastDeliveryAdapter.php';
require_once 'lib/adapter/SlowDeliveryAdapter.php';
require_once 'lib/delivery/FastDelivery.php';
require_once 'lib/delivery/SlowDelivery.php';
*/



spl_autoload_register(function (string $className) {
    require_once __DIR__ . 'lib/' . str_replace('\\', '/', $className) . '.php';

});

use Lib\Adapter\SlowDeliveryAdapter;
use Lib\Delivery\SlowDelivery;
use Lib\Delivery\FastDelivery;
use Lib\Adapter\FastDeliveryAdapter;

$sourceKladr = 'test';
$targetKladr = 'test';
$weight = 123;

echo json_encode([
    'FastDelivery' => (new FastDeliveryAdapter(new FastDelivery($sourceKladr, $targetKladr, $weight)))->calculate(),
    'SlowDelivery' => (new SlowDeliveryAdapter(new SlowDelivery($sourceKladr, $targetKladr, $weight)))->calculate(),
]);
<?php

// Включим вывод всех ошибок на экран.
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

// PaymentService - общий класс для все платежных систем принимает платежный класс
// и выполняет его метод payment. Наличие метода payment в платежном классе
// обеспечивает интерфейс PaymentSystemInterface.php. При создании нового
// платежнго класса система IDE выдаст ошибку если в нем будет отсутсвовать интерфейс.
$paymentService = new \www\app\PaymentService();

$payPal = new \www\app\PaymentSystem\PayPal();
$paymentService->payment($payPal);

$webMoney = new \www\app\PaymentSystem\WebMoney();
$paymentService->payment($webMoney);
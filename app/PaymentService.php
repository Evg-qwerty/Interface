<?php

namespace www\app;
use www\app\PaymentSystem\PaymentSystemInterface;

// PaymentService - общий класс для все платежных систем принимает платежный класс
// и выполняет его метод payment.
class PaymentService
{
	public function payment (PaymentSystemInterface $paymentSystems)
	{
		$paymentSystems->payment();
	}
}
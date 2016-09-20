<?php

namespace www\app;
use www\app\PaymentSystem\PaymentSystemInterface;

class PaymentService
{
	public function payment (PaymentSystemInterface $paymentSystems)
	{
		$paymentSystems->payment();
	}
}
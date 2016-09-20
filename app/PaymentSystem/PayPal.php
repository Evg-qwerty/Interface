<?php
/**
 * Created by PhpStorm.
 * User: one
 * Date: 20.09.2016
 * Time: 9:31
 */

namespace www\app\PaymentSystem;


class PayPal Implements PaymentSystemInterface
{
	public function payment()
	{
		echo "Система PayPal выполнила платеж"."<br>";
	}
}
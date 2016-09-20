<?php
/**
 * Created by PhpStorm.
 * User: one
 * Date: 20.09.2016
 * Time: 9:31
 */

namespace www\app\PaymentSystem;

// Класс должен содержать интерфейс имплементированный из PaymentSystemInterface
// в данном случае это метод payment().
// Метод payment() является общим методом для всех платежных классов

class PayPal Implements PaymentSystemInterface
{
	public function payment()
	{
		echo "Система PayPal выполнила платеж"."<br>";
	}
}
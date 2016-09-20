<?php
/**
 * Created by PhpStorm.
 * User: one
 * Date: 20.09.2016
 * Time: 10:01
 */

namespace www\app\PaymentSystem;


class WebMoney Implements PaymentSystemInterface
{
	public function payment()
	{
	    echo "Система WebMoney выполнила платеж"."<br>";
	}
}
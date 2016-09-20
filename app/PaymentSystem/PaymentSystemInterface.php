<?php
/**
 * Created by PhpStorm.
 * User: one
 * Date: 20.09.2016
 * Time: 9:23
 */

namespace www\app\PaymentSystem;

// При создании нового платежнго класса IDE выдаст ошибку
// если в нем будет отсутсвовать интерфейс.

interface PaymentSystemInterface
{
	// Реализует механизм оплаты
	public function payment();
}
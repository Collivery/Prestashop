<?php namespace Mds\Prestashop\Settings;

use Mds\Prestashop\Collivery\ColliveryApi;
use Mds\Prestashop\Exceptions\InvalidEmail;

class Credentials extends Settings {

	public static function getColliveryEmail()
	{
		return self::getConfig('EMAIL');
	}

	public static function getColliveryPassword()
	{
		return self::getConfig('PASSWORD');
	}

	public static function update($email, $password)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new InvalidEmail($email);
		}
		ColliveryApi::testAuthentication($email, $password);

		self::updateConfig('EMAIL', $email);
		self::updateConfig('PASSWORD', $password);
	}

}
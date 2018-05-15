<?php
include_once ("../Config/core.php");

class FormVal
{
	public static function Name($name, $min=3, $max=10) {
		$name_len = strlen($name);

		if($name_len<$min || $name_len>$max)
			return false;
		else
			return true;
	}

	public static function Email($email) {
		if (preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", strtolower($email)) !== 1)
			return false;
		else
			return true;
	}

	public static function Pwd($pwd, $pwd_conf, $min=8, $max=20) {
		$pwd_len = strlen($pwd);

		if($pwd!=$pwd_conf || $pwd_len<$min || $pwd_len>$max)
			return false;
		else
			return true;
	}
}
?>

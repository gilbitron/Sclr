<?php

if (!function_exists('s')) {

	function s($value)
	{
		$inst = null;

		if (is_array($value)) {
			$inst = new Sclr\SclrArray($value);
		} elseif (is_object($value)) {

		} elseif (is_float($value)) {

		} elseif (is_int($value)) {

		} elseif (is_bool($value)) {

		} else {
			$inst = new Sclr\SclrString($value);
		}

		return $inst;
	}

}
<?php namespace Sclr;

class String extends Value {

	public function init()
	{
		if (!is_string($this->value)) {
			throw new \Exception('The value is not a string');
		}
	}

	public function capitalize()
	{
		return ucwords($this->value);
	}

	public function capitalizeFirst()
	{
		return ucfirst($this->value);
	}

	public function chars($length = 1)
	{
		return str_split($this->value, $length);
	}

	public function chop()
	{
		return substr($this->value, 0, -1);
	}

	public function contains($needle)
	{
		return strpos($this->value, $needle) !== false;
	}

	public function endsWith($needle)
	{
		$temp = strlen($this->value) - strlen($needle);
		return $needle === "" || ($temp >= 0 && strpos($this->value, $needle, $temp) !== false);
	}

	public function length()
	{
		return strlen($this->value);
	}

	public function lowercase()
	{
		return strtolower($this->value);
	}

	public function reverse()
	{
		return strrev($this->value);
	}

	public function startsWith($needle)
	{
		return $needle === "" || strrpos($this->value, $needle, -strlen($this->value)) !== false;
	}

	public function uppercase()
	{
		return strtoupper($this->value);
	}

}
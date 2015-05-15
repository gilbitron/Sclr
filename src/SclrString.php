<?php namespace Sclr;

class SclrString extends SclrValue {

	public function init()
	{
		if (!is_string($this->value)) {
			throw new \Exception('The value is not a string');
		}
	}

	public function capitalize()
	{
		$this->value = ucwords($this->value);
		return $this;
	}

	public function capitalizeFirst()
	{
		$this->value = ucfirst($this->value);
		return $this;
	}

	public function chars($length = 1)
	{
		return str_split($this->value, $length);
	}

	public function chop()
	{
		$this->value = substr($this->value, 0, -1);
		return $this;
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
		$this->value = strtolower($this->value);
		return $this;
	}

	public function reverse()
	{
		$this->value = strrev($this->value);
		return $this;
	}

	public function startsWith($needle)
	{
		return $needle === "" || strrpos($this->value, $needle, -strlen($this->value)) !== false;
	}

	public function uppercase()
	{
		$this->value = strtoupper($this->value);
		return $this;
	}

}
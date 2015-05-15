<?php namespace Sclr;

class Value {

	protected $value;
	protected $type;

	public function __construct($value)
	{
		$this->value = $value;
		$this->type = 'string';

		if (is_array($value)) {
			$this->type = 'array';
		} elseif (is_object($value)) {
			$this->type = 'object';
		} elseif (is_float($value)) {
			$this->type = 'float';
		} elseif (is_int($value)) {
			$this->type = 'integer';
		} elseif (is_bool($value)) {
			$this->type = 'boolean';
		} else {
			$this->value = (string)$value;
		}

		$this->init();
	}

	protected function init()
	{

	}

	public function getType()
	{
		return $this->type;
	}

	public function __toString()
	{
		return $this->value;
	}

}
<?php namespace Sclr;

class Value {

	protected $value;

	public function __construct($value)
	{
		$this->value = $value;
		$this->init();
	}

	protected function init()
	{

	}

}
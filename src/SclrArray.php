<?php namespace Sclr;

class SclrArray extends SclrValue {

	public function init()
	{
		if (!is_array($this->value)) {
			throw new \Exception('The value is not an array');
		}
	}

	public function append($value)
	{
		array_push($this->value, $value);
		return $this;
	}

	public function contains($value)
	{
		return in_array($value, $this->value);
	}

	public function filter($callback)
	{
		$this->value = array_filter($this->value, $callback);
		return $this;
	}

	public function find($search)
	{
		$key = array_search($search, $this->value);
		if ($key && isset($this->value[$key])) {
			return $this->value[$key];
		}

		return false;
	}

	public function map($callback)
	{
		$this->value = array_map($callback, $this->value);
		return $this;
	}

	public function prepend($value)
	{
		array_unshift($this->value, $value);
		return $this;
	}

	public function reduce($callback)
	{
		return array_reduce($this->value, $callback);
	}

	public function reject($callback)
	{
		$filtered = [];

		foreach ($this->value as $key => $value) {
			if (!$callback($value, $key)) {
				$filtered[$key] = $value;
			}
		}

		$this->value = array_values($filtered);
		return $this;
	}

	public function size()
	{
		return sizeof($this->value);
	}

	public function toObject()
	{
		return (object)$this->value;
	}

}
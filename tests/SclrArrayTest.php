<?php

class SclrArrayTest extends PHPUnit_Framework_TestCase {

	public function testAppend()
	{
		$this->assertEquals(['a', 'b', 'c', 'd'], s(['a', 'b', 'c'])->append('d')->value());
	}

	public function testContains()
	{
		$this->assertTrue(s(['a', 'b', 'c'])->contains('b'));
		$this->assertFalse(s(['a', 'b', 'c'])->contains('d'));
	}

	public function testFilter()
	{
		$result = s([1, 2, 3, 4, 5])->filter(function ($item) {
			return $item < 4;
		})->value();

		$this->assertEquals([1, 2, 3], $result);
	}

	public function testFind()
	{
		$this->assertEquals('b', s(['a', 'b', 'c'])->find('b'));
		$this->assertFalse(s(['a', 'b', 'c'])->find('d'));
	}

	public function testMap()
	{
		$result = s(['a', 'b', 'c'])->map(function ($item) {
			return $item . '-' . $item;
		})->value();

		$this->assertEquals(['a-a', 'b-b', 'c-c'], $result);
	}

	public function testPrepend()
	{
		$this->assertEquals(['a', 'b', 'c'], s(['b', 'c'])->prepend('a')->value());
	}

	public function testReduce()
	{
		$result = s([1, 2, 3, 4, 5])->reduce(function ($carry, $item) {
			$carry += $item;
			return $carry;
		});

		$this->assertEquals(15, $result);
	}

	public function testReject()
	{
		$result = s([1, 2, 3, 4, 5])->reject(function ($value) {
			return $value < 4;
		})->value();

		$this->assertEquals([4, 5], $result);
	}

	public function testSize()
	{
		$this->assertEquals(0, s([])->size());
		$this->assertEquals(3, s(['a', 'b', 'c'])->size());
	}

	public function testToObject()
	{
		$this->assertInternalType('object', s(['a', 'b', 'c'])->toObject());
	}

}
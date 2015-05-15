<?php

class SclrStringTest extends PHPUnit_Framework_TestCase {

	public function testCapitalize()
	{
		$this->assertEquals('Hello World', s('hello world')->capitalize());
	}

	public function testCapitalizeFirst()
	{
		$this->assertEquals('Hello world', s('hello world')->capitalizeFirst());
	}

	public function testChars()
	{
		$expected = ['h', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd'];
		$this->assertEquals($expected, s('hello world')->chars());
	}

	public function testChop()
	{
		$this->assertEquals('hello worl', s('hello world')->chop());
	}

	public function testContains()
	{
		$value = s('hello world');
		$this->assertTrue($value->contains('hel'));
		$this->assertTrue($value->contains('o w'));
		$this->assertTrue($value->contains('rld'));
		$this->assertFalse($value->contains('asd'));
	}

	public function testEndsWith()
	{
		$value = s('hello world');
		$this->assertTrue($value->endsWith('rld'));
		$this->assertFalse($value->endsWith('hel'));
	}

	public function testLength()
	{
		$this->assertEquals(11, s('hello world')->length());
	}

	public function testLowercase()
	{
		$this->assertEquals('hello world', s('HeLlO WoRlD')->lowercase());
	}

	public function testReverse()
	{
		$this->assertEquals('dlrow olleh', s('hello world')->reverse());
	}

	public function testStartsWith()
	{
		$value = s('hello world');
		$this->assertTrue($value->startsWith('hel'));
		$this->assertFalse($value->startsWith('rld'));
	}

	public function testUppercase()
	{
		$this->assertEquals('HELLO WORLD', s('HeLlO WoRlD')->uppercase());
	}

	public function testChaining()
	{
		$this->assertEquals('lroW olleH', s('hello world')->capitalize()->chop()->reverse());
	}

}
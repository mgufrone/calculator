<?php
include __DIR__.'/../src/Calculator.php';
class CalculatorTest extends PHPUnit_Framework_TestCase
{
	public function testPlus()
	{
		$calc = new Calculator;
		$result = $calc->plus(2,5);
		$this->assertEquals(7, $result);
	}
	public function testMinus()
	{
		$calc = new Calculator;
		$result = $calc->minus(5,9);
		$this->assertEquals(-4, $result);
	}
}
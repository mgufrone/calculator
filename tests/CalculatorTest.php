<?php
class CalculatorTest extends PHPUnit_Framework_TestCase
{
	public function testPlus()
	{
		$calc = new Calculator;
		$result = $calc->plus(2,5);
		$this->assertEquals(7, $result);
	}
}
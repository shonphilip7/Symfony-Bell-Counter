<?php
namespace Tests\AppBundle\Utils;

use AppBundle\Utils\Bells;

class BellsTest extends \PHPUnit_Framework_TestCase
{	
	/**
	  * Test on twelve hour clock
	  */
	public function testTwelveHourClock()
	{
		$bell = new Bells();
		$this->assertEquals(5, $bell->countBells('2:00', '3:00'));
	}
    /**
      * Test on twenty four hour clock
      */
	public function testTwentyFourHourClock()
	{
		$bell = new Bells();
		$this->assertEquals(5, $bell->countBells('14:00', '15:00'));
	}
    /**
	  * Test when minutes are not zero(ex:3:30, 13:30)
	  */
	public function testNonZeroMinutes()
	{
		$bell = new Bells();
		$this->assertEquals(3, $bell->countBells('14:23', '15:42'));
	}
	/**
	  * Test combination of twelve hour and twenty four hour clock
	  */
	public function testHourMix()
	{
		$bell = new Bells();
		$this->assertEquals(24, $bell->countBells('23:00', '1:00'));
	}	
}
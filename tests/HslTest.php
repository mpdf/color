<?php

namespace Mpdf\Color;

/**
 * @group unit
 */
class HslTest extends \PHPUnit_Framework_TestCase
{

	public function testHsl()
	{
		$hsl = new Hsl(300, 16, 16);

		$this->assertSame('hsl(300, 16%, 16%)', $hsl->toString());
	}


	public function testHsla()
	{
		$hsl = new Hsl(16, 16, 16, 10);

		$this->assertSame(16, $hsl->getHue());
		$this->assertSame(16, $hsl->getSaturation());
		$this->assertSame(16, $hsl->getLightness());
		$this->assertSame(10, $hsl->getAlpha());

		$this->assertSame('hsla(16, 16%, 16%, 0.10)', $hsl->toString());
	}

}

<?php

namespace Mpdf\Color;

/**
 * @group unit
 */
class RgbTest extends \PHPUnit_Framework_TestCase
{

	public function testRgb()
	{
		$rgb = new Rgb(16, 16, 16);

		$this->assertSame('rgb(16, 16, 16)', $rgb->toString());
		$this->assertSame('#101010', $rgb->toHexString());
	}

	public function testRgba()
	{
		$rgb = new Rgb(16, 16, 16, 10);

		$this->assertSame(16, $rgb->getRed());
		$this->assertSame(16, $rgb->getGreen());
		$this->assertSame(16, $rgb->getBlue());
		$this->assertSame(10, $rgb->getAlpha());

		$this->assertSame('rgba(16, 16, 16, 0.10)', $rgb->toString());

		$this->expectException(\Mpdf\Color\ColorException::class);
		$this->expectExceptionMessage('Unable to convert RGBA to hex string');

		$rgb->toHexString();
	}

}

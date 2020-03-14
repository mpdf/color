<?php

namespace Mpdf\Color;

/**
 * @group unit
 */
class GrayscaleTest extends \PHPUnit_Framework_TestCase
{

	public function testRgb()
	{
		$grayscale = new Grayscale(16);

		$this->assertSame('rgb(16, 16, 16)', $grayscale->toString());

		$this->assertSame(16, $grayscale->getValue());
	}

}

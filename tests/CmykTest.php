<?php

namespace Mpdf\Color;

/**
 * @group unit
 */
class CmykTest extends \PHPUnit_Framework_TestCase
{

	public function testCmyk()
	{
		$cmyk = new Cmyk(16, 16, 16, 16);

		$this->assertSame('cmyk(16%, 16%, 16%, 16%)', $cmyk->toString());
	}


	public function testCmyka()
	{
		$cmyk = new Cmyk(16, 16, 16, 16, 10);

		$this->assertSame(16, $cmyk->getCyan());
		$this->assertSame(16, $cmyk->getMagenta());
		$this->assertSame(16, $cmyk->getYellow());
		$this->assertSame(16, $cmyk->getBlack());
		$this->assertSame(10, $cmyk->getAlpha());

		$this->assertSame('cmyka(16%, 16%, 16%, 16%, 0.10)', $cmyk->toString());
	}

}

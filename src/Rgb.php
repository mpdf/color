<?php

namespace Mpdf\Color;

use Webmozart\Assert\Assert;

class Rgb implements \Mpdf\Color\Color
{

	/**
	 * @var int
	 */
	private $red;

	/**
	 * @var int
	 */
	private $green;

	/**
	 * @var int
	 */
	private $blue;

	/**
	 * @var int
	 */
	private $alpha;

	public function __construct($red, $green, $blue, $alpha = null)
	{
		Assert::integer($red);
		Assert::range($red, 0, 255);
		Assert::integer($green);
		Assert::range($green, 0, 255);
		Assert::integer($blue);
		Assert::range($blue, 0, 255);
		Assert::nullOrInteger($alpha);
		Assert::nullOrRange($alpha, 0, 100);

		$this->red = $red;
		$this->green = $green;
		$this->blue = $blue;
		$this->alpha = $alpha;
	}

	/**
	 * @return string
	 */
	public function toString()
	{
		return $this->alpha
			? sprintf('rgba(%d, %d, %d, %.02F)', $this->red, $this->green, $this->blue, $this->alpha / 100)
			: sprintf('rgb(%d, %d, %d)', $this->red, $this->green, $this->blue);
	}

	/**
	 * @return string
	 */
	public function toHexString()
	{
		if (null !== $this->alpha) {
			throw new \Mpdf\Color\ColorException('Unable to convert RGBA to hex string');
		}

		return sprintf(
			'#%s%s%s',
			dechex($this->red),
			dechex($this->green),
			dechex($this->blue)
		);
	}

	/**
	 * @return int
	 */
	public function getRed()
	{
		return $this->red;
	}

	/**
	 * @return int
	 */
	public function getGreen()
	{
		return $this->green;
	}

	/**
	 * @return int
	 */
	public function getBlue()
	{
		return $this->blue;
	}

	/**
	 * @return int
	 */
	public function getAlpha()
	{
		return $this->alpha;
	}

}

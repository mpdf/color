<?php

namespace Mpdf\Color;

use Webmozart\Assert\Assert;

class Hsl implements \Mpdf\Color\Color
{

	/**
	 * @var int
	 */
	private $hue;

	/**
	 * @var int
	 */
	private $saturation;

	/**
	 * @var int
	 */
	private $lightness;

	/**
	 * @var int
	 */
	private $alpha;

	public function __construct($red, $green, $blue, $alpha = null)
	{
		Assert::integer($red);
		Assert::range($red, 0, 360);
		Assert::integer($green);
		Assert::range($green, 0, 100);
		Assert::integer($blue);
		Assert::range($blue, 0, 100);
		Assert::nullOrInteger($alpha);
		Assert::nullOrRange($alpha, 0, 100);

		$this->hue = $red;
		$this->saturation = $green;
		$this->lightness = $blue;
		$this->alpha = $alpha;
	}

	/**
	 * @return string
	 */
	public function toString()
	{
		return $this->alpha
			? sprintf('hsla(%d, %d%%, %d%%, %.02F)', $this->hue, $this->saturation, $this->lightness, $this->alpha / 100)
			: sprintf('hsl(%d, %d%%, %d%%)', $this->hue, $this->saturation, $this->lightness);
	}

	/**
	 * @return int
	 */
	public function getHue()
	{
		return $this->hue;
	}

	/**
	 * @return int
	 */
	public function getSaturation()
	{
		return $this->saturation;
	}

	/**
	 * @return int
	 */
	public function getLightness()
	{
		return $this->lightness;
	}

	/**
	 * @return int
	 */
	public function getAlpha()
	{
		return $this->alpha;
	}

}

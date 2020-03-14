<?php

namespace Mpdf\Color;

use Webmozart\Assert\Assert;

class Cmyk implements \Mpdf\Color\Color
{

	/**
	 * @var int
	 */
	private $cyan;

	/**
	 * @var int
	 */
	private $magenta;

	/**
	 * @var int
	 */
	private $yellow;

	/**
	 * @var int
	 */
	private $black;

	/**
	 * @var int|null
	 */
	private $alpha;

	public function __construct($cyan, $magenta, $yellow, $black, $alpha = null)
	{
		Assert::integer($cyan);
		Assert::range($cyan, 0, 100);
		Assert::integer($magenta);
		Assert::range($magenta, 0, 100);
		Assert::integer($yellow);
		Assert::range($yellow, 0, 100);
		Assert::integer($black);
		Assert::range($black, 0, 100);
		Assert::nullOrInteger($alpha);
		Assert::nullOrRange($alpha, 0, 100);

		$this->cyan = $cyan;
		$this->magenta = $magenta;
		$this->yellow = $yellow;
		$this->black = $black;
		$this->alpha = $alpha;
	}

	public function toString()
	{
		return $this->alpha
			? sprintf('cmyka(%d%%, %d%%, %d%%, %d%%, %.02F)', $this->cyan, $this->magenta, $this->yellow, $this->black, $this->alpha / 100)
			: sprintf('cmyk(%d%%, %d%%, %d%%, %d%%)', $this->cyan, $this->magenta, $this->yellow, $this->black);
	}

	/**
	 * @return int
	 */
	public function getCyan()
	{
		return $this->cyan;
	}

	/**
	 * @return int
	 */
	public function getMagenta()
	{
		return $this->magenta;
	}

	/**
	 * @return int
	 */
	public function getYellow()
	{
		return $this->yellow;
	}

	/**
	 * @return int
	 */
	public function getBlack()
	{
		return $this->black;
	}

	public function getAlpha()
	{
		return $this->alpha;
	}

}

<?php

namespace Mpdf\Color;

use Webmozart\Assert\Assert;

class Grayscale implements \Mpdf\Color\Color
{

	/**
	 * @var int
	 */
	private $value;

	public function __construct($value)
	{
		Assert::integer($value);
		Assert::range($value, 0, 255);

		$this->value = $value;
	}

	public function toString()
	{
		return sprintf('rgb(%d, %d, %d)', $this->value, $this->value, $this->value);
	}

	/**
	 * @return int
	 */
	public function getValue()
	{
		return $this->value;
	}

}

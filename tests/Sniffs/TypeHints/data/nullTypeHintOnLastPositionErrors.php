<?php

class Whatever
{

	/**
	 * @var null|bool
	 */
	private $multilineAnnotation;

	/** @var null|bool */
	private $singleLineAnnotation;

	/**
	 * @param null|string $param
	 */
	public function paramAnnotation($param)
	{
		/** @var null|float|int $number */
		$inlineAnnotation = 0.0;

		/** @var $number null|float|int */
		$inlineAnnotationInSecondFormat = 0.0;
	}

	/**
	 * @return null|string
	 */
	public function returnAnnotation()
	{

	}

	/**
	 * @return NULL|string
	 */
	public function uppercasedNull()
	{

	}

	/**
	 * @return float|null|int
	 */
	public function nullInTheMiddle()
	{

	}

}


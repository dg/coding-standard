<?php

namespace Foo
{
	use Qualified;
	use const Used\HIHI;

	interface Doo
	{

	}

	class Boo implements Doo
	{
		public function __construct()
		{
			\PHP_VERSION;
			\FullyQualified\HEHE;
			Qualified\HAHA;
			HIHI;
		}
	}

}

namespace {

	\PHP_OS;

}

<?php

class Sample
{
	public static function test()
	{
		echo "In ".__CLASS__."\n";
	}
}

class Sample1
{
	public static function test()
	{
		echo "In ".__CLASS__."\n";
	}
}

$name = 'Sample';
$name::test();

$name = 'Sample1';
$name::test();

?>

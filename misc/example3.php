<?php
error_reporting(E_ALL);

/**
 * Pass by reference on objects is deprecated
 * NOTE: According to the documentation for deprecation in
 * PHP 5.3, this should throw an E_DEPRECATED warning. Currently,
 * though, it doesn't. See here for the bug report: http://bugs.php.net/bug.php?id=53267
 */

class MyClass
{

	public function __construct($test)
	{
		echo 'Test: '.$test."\n\n";
	}
}

$sampleString = 'This is a sample string';
$mc = & new MyClass($sampleString);

var_dump($mc);

?>

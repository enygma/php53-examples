<?php

/**
 * Using the __callStatic magic method
 *
 * The new __callStatic method catches static calls for
 * undefined methods.
 */
class MyStatic
{
	static function __callStatic($methodName,$arguments)
	{
		echo __CLASS__.' - '.$methodName."\n";
		var_dump($arguments);
	}
}

MyStatic::testMethod('test1','test2');

?>
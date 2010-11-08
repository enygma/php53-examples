<?php

// Using the __callStatic magic method

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
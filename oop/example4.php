<?php

/**
 * Using variable static calls
 *
 * Just like you could call $className->$methodName()
 * You can now do the same with static methods
 */
class MyClass
{
	public static function methodOne()
	{
		echo __CLASS__.' - '.__METHOD__."\n\n";
	}
}

$className = 'MyClass';
$methodName = 'methodOne';

$className::$methodName();

?>
<?php

// Using variable static calls

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
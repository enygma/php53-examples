<?php

/**
 * An example of using the __callStatic method to catch undefined
 * static method calls
 */

class Sample
{
	/* no static methods defiled */

	public static function __callStatic($functionName,$arguments)
	{
		echo $functionName."\n";
		var_dump($arguments);
	}
}

Sample::test();

?>

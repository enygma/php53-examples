<?php

/**
 * An example of late static binding
 *
 * Late static binding allows the parent class to call one of its own
 * methods even if called from a child.
 */
class pClass
{
	static public function funcOne()
	{
		echo self::funcTwo();
	}
	
	static public function funcTwo()
	{
		echo __CLASS__.' - '.__METHOD__."\n\n";
	}
}

class cClass extends pClass
{
	static public function funcTwo()
	{
		echo __CLASS__.' - '.__METHOD__."\n\n";
	}
}

cClass::funcOne();

?>
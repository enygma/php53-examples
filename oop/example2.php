<?php

// An example of late static binding

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
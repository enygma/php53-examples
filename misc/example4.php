<?php

/**
 * Shows the "bubble up" of exceptions
 */

class ExceptionTypeOne extends Exception {}
class ExceptionTypeTwo extends Exception {}

class Test
{
	public function test()
	{
		try {
			try {
				if(rand(0,1)<0.5){
					throw new ExceptionTypeOne('testing 1');
				}else{
					throw new ExceptionTypeTwo('testing 2');
				}
			}catch(ExceptionTypeTwo $e){
				var_dump($e->getMessage());
			}
		}catch(ExceptionTypeOne $e){
			var_dump($e->getMessage());
		}
	}
}

$t = new Test();
$t->test();

?>

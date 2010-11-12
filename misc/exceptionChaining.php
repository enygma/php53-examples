<?php

class MyException extends Exception {}
class OtherException extends Exception {}

try{
	try {
		throw new MyException('foo');
	}catch(MyException $e){
		throw new OtherException('bar',500,$e);
	}
}catch(OtherException $e){
	echo 'OtherExcepion: '.$e->getMessage()."\n";
	$prev = $e->getPrevious();
	echo 'MyException: '.$prev->getMessage()."\n";
}
?>

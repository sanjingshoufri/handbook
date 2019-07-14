<?php

// throw new Exception("Value must be 1 or below");
// error_reporting(0);

function test()
{
	throw new Exception("hahahahahaha...");
}
// test();

try {
	$a = [1, 3, 5];
	
    if (!isset($a[4])) {
    	/**
    	 * 每一个throw对应一个catch.
    	 * throw发起者  catch接收者
    	 */
    	// throw new Exception("hahahahahaha...");
    	test();
    }

    //从这儿开始代码没有执行
	$a[5] + 1;
} catch (Exception $e) {
	echo $e->getMessage();
} finally {

}
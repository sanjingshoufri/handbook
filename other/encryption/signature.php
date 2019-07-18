<?php
/**
 * 签名计算方法.
 */

function signature($key){
	$timestamp = time();
    $data = $timestamp + '\n' + $key;
    //HASH_HMAC加密.
    $encry_first = hash_hmac('sha256', $data, $key);
    $encry_second = base64_encode($encry_first);
    $encry = urlencode($encry_second);
    return $encry;
}
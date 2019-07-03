<?php
$data = "taonian";
$key = "hello";
$cipher = 'aes-256-cfb';

$ivlen = openssl_cipher_iv_length($cipher);
$iv = openssl_random_pseudo_bytes($ivlen);

//加密
$rs = openssl_encrypt($data, 'aes-256-cfb', $key, 0, $iv);

//解密
$origin_data = openssl_decrypt($rs, 'aes-256-cfb', $key, 0, $iv);
var_dump($origin_data);
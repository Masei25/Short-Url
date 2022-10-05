<?php


function encrypt($string)
{
    // Storingthe cipher method 
    $ciphering = "AES-128-CTR";

    // Using OpenSSl Encryption method 
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options   = 0;

    // Non-NULL Initialization Vector for encryption 
    $encryption_iv = '1234567891011121';

    // Storing the encryption key 
    $encryption_key = "netbiz";

    // Using openssl_encrypt() function to encrypt the data 
    return openssl_encrypt($string, $ciphering, $encryption_key, $options, $encryption_iv);
}

function decrypt($string)
{
    // Storingthe cipher method 
    $ciphering = "AES-128-CTR";

    // Using OpenSSl Encryption method 
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options   = 0;

    // Non-NULL Initialization Vector for encryption 
    $encryption_iv = '1234567891011121';

    // Storing the encryption key 
    $encryption_key = "netbiz";

    // Using openssl_decrypt() function to decrypt the data 
    return openssl_decrypt($string, $ciphering, $encryption_key, $options, $encryption_iv);
}
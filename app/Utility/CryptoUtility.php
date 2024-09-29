<?php
namespace App\Utility;

class CryptoUtility
{

    private $token;
    private $secret;
    private $environment;
    private static $iv = "@@@@&&&&####$$$$";

    public function __construct($token, $secret, $environment = 'TEST')
    {
        $this->token = $token;
        $this->secret = $secret;
        $this->environment = $environment;
    }

    // Function to encrypt data with AES-256-CBC and SHA256
    public function hashEncrypt($data, $password)
    {
        $iv = substr(sha1(mt_rand()), 0, 16);
        $passwordHash = sha1($password);
        $salt = sha1(mt_rand());
        $saltWithPassword = hash('sha256', $passwordHash . $salt);

        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $saltWithPassword, 0, $iv);
        return "$iv:$salt:$encrypted";
    }

    // Function to decrypt data
    public function hashDecrypt($msgEncryptedBundle, $password)
    {
        $passwordHash = sha1($password);
        $components = explode(':', $msgEncryptedBundle);
        if (count($components) !== 3) {
            return false; // Invalid format
        }

        $iv = $components[0];
        $salt = hash('sha256', $passwordHash . $components[1]);
        $encryptedMsg = $components[2];

        $decryptedMsg = openssl_decrypt($encryptedMsg, 'aes-256-cbc', $salt, 0, $iv);
        return $decryptedMsg === false ? false : $decryptedMsg;
    }

    // Function to encrypt using AES-128-CBC for checksum
    public static function encrypt($input, $key)
    {
        $key = html_entity_decode($key);
        if (function_exists('openssl_encrypt')) {
            return openssl_encrypt($input, 'AES-128-CBC', $key, 0, self::$iv);
        }
        return false; // Openssl_encrypt required
    }

    // Function to decrypt AES-128-CBC encrypted data
    public static function decrypt($encrypted, $key)
    {
        $key = html_entity_decode($key);
        if (function_exists('openssl_decrypt')) {
            return openssl_decrypt($encrypted, 'AES-128-CBC', $key, 0, self::$iv);
        }
        return false; // Openssl_decrypt required
    }

    // Function to generate a checksum signature
    public static function generateSignature($params, $key)
    {
        if (!is_array($params) && !is_string($params)) {
            throw new \Exception("string or array expected, " . gettype($params) . " given");
        }

        if (is_array($params)) {
            $params = self::getStringByParams($params);
        }

        return self::generateSignatureByString($params, $key);
    }

    // Function to verify a checksum signature
    public static function verifySignature($params, $key, $checksum)
    {
        if (isset($params['CHECKSUMHASH'])) {
            unset($params['CHECKSUMHASH']);
        }

        if (is_array($params)) {
            $params = self::getStringByParams($params);
        }

        return self::verifySignatureByString($params, $key, $checksum);
    }

    // Helper function to generate a random string
    private static function generateRandomString($length)
    {
        $random = '';
        $data = '9876543210ZYXWVUTSRQPONMLKJIHGFEDCBAabcdefghijklmnopqrstuvwxyz!@#$&_';
        for ($i = 0; $i < $length; $i++) {
            $random .= substr($data, rand() % strlen($data), 1);
        }
        return $random;
    }

    // Helper function to sort params and concatenate them into a string
    private static function getStringByParams($params)
    {
        ksort($params);
        $params = array_map(function ($value) {
            return ($value !== null && strtolower($value) !== 'null') ? $value : '';
        }, $params);
        return implode('|', $params);
    }

    // Helper function to generate checksum by string
    private static function generateSignatureByString($params, $key)
    {
        $salt = self::generateRandomString(4);
        return self::calculateChecksum($params, $key, $salt);
    }

    // Helper function to verify signature by string
    private static function verifySignatureByString($params, $key, $checksum)
    {
        $ahkwebHash = self::decrypt($checksum, $key);
        $salt = substr($ahkwebHash, -4);
        return $ahkwebHash === self::calculateHash($params, $salt);
    }

    // Helper function to calculate hash
    private static function calculateHash($params, $salt)
    {
        $finalString = $params . '|' . $salt;
        $hash = hash('sha256', $finalString);
        return $hash . $salt;
    }

    // Helper function to calculate checksum
    private static function calculateChecksum($params, $key, $salt)
    {
        $hashString = self::calculateHash($params, $salt);
        return self::encrypt($hashString, $key);
    }

}

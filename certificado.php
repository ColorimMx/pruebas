<?php
$cert = file_get_contents(__DIR__."/KeyCert/CSD01_AAA010101AAA.key") ;


$data = openssl_x509_read($cert);
if (!openssl_x509_export($data, $data)) {
    return false;
}
$data = str_replace("-----BEGIN CERTIFICATE-----", "", $data);
$data = str_replace("-----END CERTIFICATE-----", "", $data);
$data = base64_decode($data);
$fingerprint = sha1($data);
$fingerprint = strtoupper($fingerprint);
return $fingerprint;
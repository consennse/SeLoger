<?php

$apiUrl = "https://maisonetappartments.onrender.com/run";

$data = [
    "source_url" => "https://manda.propertybase.com/api/v2/feed/00DWx000007hlhBMAQ/XML2U/a0hSb000005gPOwIAM/full",
    "ftp_host" => "transferts.seloger.com",
    "ftp_username" => "Propertybase",
    "ftp_password" => "4iWJUPqs",
    "ftp_target_path" => "RC-1577371.zip"
];
// host : ftps://
// login : 
// mot de passe : 4iWJUPqs
// port : 990


$ch = curl_init($apiUrl);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json']
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo "Error: " . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);

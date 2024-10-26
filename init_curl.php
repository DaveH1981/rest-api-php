<?php

/* DO NOT PUT A LIVE ACCESS TOKEN IN THE CODE BELOW */
$headers = [
    "User-Agent: rest-api-php",
    "Authorization: token invalid"
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true
]);

return $ch;

?>
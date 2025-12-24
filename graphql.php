<?php

function graphqlRequest($query, $variables = []) {
    $endpoint = "https://api.sachlo.com/graphql";

    $payload = json_encode([
        "query" => $query,
        "variables" => (object)$variables
    ]);

    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload)
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    $response = curl_exec($ch);

    if ($response === false) {
        die('Curl error: ' . curl_error($ch));
    }

    curl_close($ch);

    return json_decode($response, true);
}

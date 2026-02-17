<?php

namespace App\Models;

class Ai
{
    public function request($data)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/responses');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer '
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);

        $decodedResponse = null;

        if (curl_errno($ch)) {
            echo 'Ошибка cURL: ' . curl_error($ch);
        } else {
            $decodedResponse = json_decode($response, true);
        }

        curl_close($ch);
        return $decodedResponse;
    }
}

<?php

namespace App\Src\Helpers;


class CustomFunctions
{

    public static function outputJson(string $message = '', array $data = [])
    {
        echo json_encode([
            'message' => $message,
            'data' => $data
        ]);
        exit;
    }

    public static function displayError(string $message = '', array $data = [])
    {
        echo json_encode([
            'errorMessage' => $message,
            'errorData' => $data
        ]);
        exit;
    }
}

<?php

namespace Alfianizzah\Laradi\Helper;

class StringHelper
{
    public static function helloWorld()
    {
        return "hello World";
    }

    public static function randomQuote()
    {
        $jsonData = file_get_contents(__DIR__ . "/../Datasets/quotes.json");
        if ($jsonData === false) {
            return "json failed";
        } else {
            $data = json_decode($jsonData, true);
            if ($data === null) {
                return "data json kosong";
            } else {
                $randomIndex = array_rand($data);
                return $data[$randomIndex]["quote"];
            }
        }
    }
}

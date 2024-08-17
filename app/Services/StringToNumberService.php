<?php

namespace App\Services;

class StringToNumberService
{
    public function convertStringToNumber(string $string): int
    {
        // Простой алгоритм: суммируем ASCII коды всех символов строки
        $sum = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            $sum += ord($string[$i]);
        }
        return $sum;
    }
}

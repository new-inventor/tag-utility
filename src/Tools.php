<?php
declare(strict_types = 1);

namespace NewInventor\TagUtility;


class Tools
{
    public static function checkStrictFormat($string)
    {
        return preg_match('/[^a-z\d-]/', $string) === 1;
    }
}
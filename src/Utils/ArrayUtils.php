<?php

namespace Kata\Utils;
/**
 * Custom class to find values inside an array
 */
class ArrayUtils
{
    public static function find(array $_arr, int $n): int
    {
        $found = false;
        foreach ($_arr as $val) {
            if ($n == $val) {
                $found = true;
            }
        }
        return $found;
    }
}
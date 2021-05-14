<?php

namespace Kata\UniqueArray;


use Kata\Utils\ArrayUtils;

class DuplicateRemover
{
    /**
     * Method to get the unique values inside an array.
     * Created a custom class ArrayUtils
     */
    public function __invoke(array $input): array
    {
        $result = [];
        foreach ($input as $value) {
            if (!ArrayUtils::find($result, $value)){
                $result[] = $value;
            }
        }
        return $result;
    }

}

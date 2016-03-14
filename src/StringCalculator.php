<?php

class StringCalculator
{
    function add($numbers)
    {
//      $numbers = explode (',', $numbers);

        $numbers = preg_split('/\s*(,|\\\n)\s*/', $numbers);

        $solution = 0;

        foreach($numbers as $number)
        {
            if ($number < 0)
            {
                throw new InvalidArgumentException;
            }

            if ($number >= 1000)
            {
                continue;
            }

            $solution += $number;
        }

        return $solution;
    }

}

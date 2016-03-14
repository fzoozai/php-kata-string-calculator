<?php

class StringCalculator
{
    function add($numbers)
    {
        $numbers = explode (',', $numbers);

        return array_sum($numbers);
    }

}

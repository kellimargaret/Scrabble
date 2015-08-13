<?php

    class Scrabble
    {
        function scrabbleGame($input)
        {
            $score = 0;
            $input_array = str_split(strtolower($input));
            foreach($input_array as $letter)
            {
                if (($letter == "a") || ($letter == "e") || ($letter == "i") || ($letter == "o") || ($letter == "u") || ($letter == "l") || ($letter == "r") || ($letter == "s") || ($letter == "t")) {
                    $score += 1;
                } elseif(($letter == "d") || ($letter == "g")) {
                    $score += 2;
                } elseif (($letter == "b") || ($letter == "c") || ($letter == "m") || ($letter == "p")) {
                    $score += 3;
                } elseif (($letter == "f") || ($letter == "h") || ($letter == "v") || ($letter == "w") || ($letter == "y")) {
                    $score += 4;
                } elseif (($letter == "k")) {
                    $score += 5;
                } elseif (($letter == "j") || ($letter == "x")) {
                    $score += 8;
                } elseif (($letter == "q") || ($letter == "z")) {
                    $score += 10;
                } else {
                    return "Error Message";
                }
            }
            /*$score = 0;
            $count = 0;
            $letter_array = array(array("a", "e", "i", "o", "u", "l", "r", "s", "t") => 1);
            echo $letter_array[0];
            foreach($letter_array as $array)
            {
                foreach($array as $letters)
                {
                    if($input == $letters)
                    {
                        $score += $letter_array[$count];
                    }
                }
                $count += 1;
            }*/
            return $score;
        }
    }
 ?>

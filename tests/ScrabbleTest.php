<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {

        function test_one_letter()
        {
            $test_Scrabble = new Scrabble;
            $input = "a";

            $result = $test_Scrabble->scrabbleGame($input);

            $this->assertEquals(1, $result);
        }

        function test_two_letters()
        {
            $test_Scrabble = new Scrabble;
            $input = "ae";

            $result = $test_Scrabble->scrabbleGame($input);

            $this->assertEquals(2, $result);
        }

        function test_word()
        {
            $test_Scrabble = new Scrabble;
            $input = "hello";

            $result = $test_Scrabble->scrabbleGame($input);

            $this->assertEquals(8, $result);
        }

        function test_upcase()
        {
            $test_Scrabble = new Scrabble;
            $input = "Hello";

            $result = $test_Scrabble->scrabbleGame($input);

            $this->assertEquals(8, $result);
        }

        function test_non_letters()
        {
            $test_Scrabble = new Scrabble;
            $input = "He#llo1";

            $result = $test_Scrabble->scrabbleGame($input);

            $this->assertEquals("Error Message", $result);
        }

        function test_multiple_words()
        {
            $test_Scrabble = new Scrabble;
            $input = "Hello World";

            $result = $test_Scrabble->scrabbleGame($input);

            $this->assertEquals("Error Message", $result);
        }
    }
?>

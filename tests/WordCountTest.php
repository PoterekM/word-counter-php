<?php

    require_once "src/WordCount.php";

    class WordCountTest extends PHPUnit_Framework_TestCase
    {
        function testOneMatchWordCount()
        {
        //Arrange
        $test_matching_word = new WordCount;
        $input = "boop";


        //Act
        $result = $test_matching_word->compareWordCounter($input);

        //assert
        $this->assertEquals("boop", $result);


        }

    }

?>

<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testOneMatchRepeatCounter()
        {
        //Arrange
        $test_matching_word = new RepeatCounter;
        $input = ("boop");


        //Act
        $result = $test_matching_word->countRepeats($input);

        //assert
        $this->assertEquals(1, $result);


        }

    }

?>

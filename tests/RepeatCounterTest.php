<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testOneMatchRepeatCounter()
        {
        //Arrange
        $test_matching_word = new RepeatCounter;
        $input = "boop";
        $input_string = "boop";

        //Act
        $result = $test_matching_word->countRepeats($input, $input_string);

        //assert
        $this->assertEquals(1, $result);
        }
        function testOneMatchStringRepeatCounter()
        {
        //Arrange
        $test_matching_word = new RepeatCounter;
        $input = "boop";
        $input_string = "boop beep";

        //Act
        $result = $test_matching_word->countRepeats($input, $input_string);

        //assert
        $this->assertEquals(1, $result);
        }



    }

?>

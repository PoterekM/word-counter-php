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
        function testMultipleMatchStringRepeatCounter()
        {
            //Arrange
            $test_matching_word = new RepeatCounter;
            $input = "boop";
            $input_string = "one boop two boop red boop blue boop";
            //Act
            $result = $test_matching_word->countRepeats($input, $input_string);

            //assert
            $this->assertEquals(4, $result);
        }

        function testCaseRepeatCounter()
        {
            //Arrange
            $test_matching_word = new RepeatCounter;
            $input = "booP";
            $input_string = "one BOOP beep two BoOp BEEP red booP beep blue boop beep";
            //Act
            $result = $test_matching_word->countRepeats($input, $input_string);

            //assert
            $this->assertEquals(4, $result);
        }

        function testWithPunctuationRepeatCounter()
        {
            //Arrange
            $test_matching_word = new RepeatCounter;
            $input = "booP";
            $input_string = "one !BOOP! beep two !BoOp. BEEP red !booP. beep blue !boop. beep";
            //Act
            $result = $test_matching_word->countRepeats($input, $input_string);

            //assert
            $this->assertEquals(5, $result);


        }


    }

?>

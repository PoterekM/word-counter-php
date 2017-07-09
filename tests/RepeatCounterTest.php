<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testOneMatchRepeatCounter()
        {
            $test_matching_word = new RepeatCounter;
            $input = "boop";
            $input_string = "boop";

            $result = $test_matching_word->countRepeats($input, $input_string);

            $this->assertEquals(1, $result);
        }
        function testOneMatchStringRepeatCounter()
        {
            $test_matching_word = new RepeatCounter;
            $input = "boop";
            $input_string = "boop beep";

            $result = $test_matching_word->countRepeats($input, $input_string);

            $this->assertEquals(1, $result);
        }
        function testMultipleMatchStringRepeatCounter()
        {
            $test_matching_word = new RepeatCounter;
            $input = "boop";
            $input_string = "one boop two boop red boop blue boop";
            $result = $test_matching_word->countRepeats($input, $input_string);

            $this->assertEquals(4, $result);
        }

        function testCaseRepeatCounter()
        {
            $test_matching_word = new RepeatCounter;
            $input = "booP";
            $input_string = "one BOOP beep two BoOp BEEP red booP beep blue boop beep";
            $result = $test_matching_word->countRepeats($input, $input_string);

            $this->assertEquals(4, $result);
        }

        function testWithPunctuationRepeatCounter()
        {
            $test_matching_word = new RepeatCounter;
            $input = "booP";
            $input_string = "one !BOOP! beep two !BoOp. BEEP red !booP. beep blue !boop. beep it's like totally #boop";
            $result = $test_matching_word->countRepeats($input, $input_string);

            $this->assertEquals(5, $result);
        }

        function testForWordSpaceRepeatCounter()
        {
            $test_for_space = new RepeatCounter;
            $input_with_space = "I want lots of words";
            $input_string = "I've just got all the things to say, ya know?";
            $result = $test_for_space->countRepeats($input_with_space, $input_string);

            $this->assertEquals("Hey there, we said you could check ONE word. Unfortunately, 'i want lots of words' is more than one word. Please try following directions better.", $result);
        }
    }
?>

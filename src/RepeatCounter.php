<?php
    class RepeatCounter
    {
        function countRepeats($input, $input_string)
        {
            $input = $input;
            $split_input_string = explode(" ", $input_string);
            $count = 0;
            foreach ($split_input_string as $word) {
                if ($input == $word) {
                    $count = ++$count;
                }
            }
            return $count;
        }



    }






 ?>

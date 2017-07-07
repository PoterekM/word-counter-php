<?php
    class RepeatCounter
    {
        function countRepeats($input, $input_string)
        {
            $split_input_string = explode(" ", $input_string);
            // $split_array = array();
            $count = 0;

            foreach ($split_input_string as $word) {
                // array_push($split_array, $word);
                if ($input == $word) {
                    $count++;
                    return $count;
                }
            }



        }






    }
 ?>

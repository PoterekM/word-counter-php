<?php
    class RepeatCounter
    {
        function countRepeats($input, $input_string)
        {
            $input = strtolower($input);
            $space = " ";
            $input_with_space = strpos($input, $space);
            if ($input_with_space == true) {
                return "Hey there, we said you could check ONE word. Unfortunately, '" . $input . "' is more than one word. Please try following directions better.";
            } else {
                $input_string = strtolower($input_string);
                $characters_to_split_on = array(' ', '#', '.', ',', '!', '', '?', ';', ':', '#', '()', '&');
                foreach($characters_to_split_on as $space){
                    $input_string = str_replace($space," ",$input_string);
                }
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
    }
 ?>

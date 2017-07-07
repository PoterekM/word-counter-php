<?php
    class RepeatCounter
    {
        function countRepeats($input, $input_string)
        {
            $input = strtolower($input);
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





 ?>

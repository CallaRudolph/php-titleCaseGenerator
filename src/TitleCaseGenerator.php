<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $noCaps = strtolower($input_title);
            $input_array_of_words = explode(" ", $noCaps);
            $output_titlecased = array();

            $string = ucwords($noCaps);
            $prep = array(' a ', ' an ', ' the ', ' for ', ' and ', ' nor ', ' but ', ' or ', ' yet ', ' so ', ' such ', ' as ', ' at ', ' around ', ' by ', ' after ', ' along ', ' for ', ' from ', ' of ', ' on ', ' to ', ' with ', ' without ', ' is ');
            foreach($prep as $lowerCase) {
              $string = str_replace(ucwords($lowerCase), strtolower($lowerCase), $string);
            }
            return ucfirst($string);

            foreach ($input_array_of_words as $word) {
                array_push($output_titlecased, ucfirst($word));
            }
            return implode(" ", $output_titlecased);
        }
    }

?>

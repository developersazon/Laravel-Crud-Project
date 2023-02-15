<?php 
    //Use for important and repeat function
    if(!function_exists('p')){
        function p($data){
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }


    //use for date format
    if(!function_exists('formatted_date')){
        function formatted_date($date, $format){
            $formattedDate = date($format, strtotime($date));
            return $formattedDate;
        }
    }
?>
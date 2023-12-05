<?php
if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

// function Date_Format($date,$format){
//     return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($format);    
// }

//Not used as of Now
if(!function_exists('get_formatted_date')){
    function get_formatted_date($date,$format){
        $formatDate = date($format, strtotime($date));
        return $formatDate;
    }
}


//This is for Datetime of date
// if(!function_exists('Date_Format')){
//     function Date_Format($date, $format){
//         $formatDate = date($format, strtotime($date));
//         return $formatDate;
//     }
// }
?>
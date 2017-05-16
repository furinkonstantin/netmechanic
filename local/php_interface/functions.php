<?php
    
    function declension_word($number, $word) {
        $ar= array (2, 0, 1, 1, 1, 2);
        return $word[ ($number%100 > 4 && $number%100 < 20) ? 2 : $ar[min($number%10, 5)] ];
    }
    
    function DownCounter($dateEnd) {
        $res = array();
        
        $check_time = strtotime($dateEnd) - time();
	    if($check_time <= 0){
	        return false;
	    }
           
        $days = floor($check_time/86400);
	    $hours = floor(($check_time%86400)/3600);
	    $minutes = floor(($check_time%3600) /60);
	    $seconds = $check_time % 60; 
        
        if($days > 0) {
            $res["days"] = $days;
        }
        
        if($hours > 0) {
            $res["hours"] = $hours;
        }

        if($minutes > 0) {
            $res["minutes"] = $minutes;
        }

        if($seconds > 0) {
            $res["seconds"] = $seconds;
        }

        return $res;
    }
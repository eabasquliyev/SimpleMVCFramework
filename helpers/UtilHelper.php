<?php
    namespace app\helpers;
    
    class UtilHelper{
        public static function randomString($n){
            $characters = "1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
            $str = '';
            for($i = 0; $i < $n; $i++){
                $index= rand(0, strlen($characters) - 1);
                $str .= $characters[$index];
            }
        
            return $str;
        }
    }
?>
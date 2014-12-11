<?php
class lib_misc {
    
    function gen_doubles() {        
        for ($x=97;$x<=122;$x++) {
            for ($y=97;$y<=122;$y++) {
                $a = $a . chr($x) . chr($y) . '<br>';
            }
        }
        return $a;
    }

    function gen_single() {
        for ($x=97;$x<=122;$x++) {
            $a = $a . chr($x) . '<br>';       
        }
        return $a;
    }

    function display_phpinfo() {
        phpinfo();
    }  
    
}


?>

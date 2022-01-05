<?php

class FourLovesSanitizeData{

     private function sanitize_custom_option($input){
        return ($input === 'Yes') ? 'Yes' : 'No';
    }

    private function sanitize_custom_text($input){
        return filter_var($input,FILTER_SANITIZE_STRING);
    }
}
?>
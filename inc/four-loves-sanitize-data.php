<?php

class FourLovesSanitizeData{

    private function sanitize_custom_text($input){
        return filter_var($input,FILTER_SANITIZE_STRING);
    }
}
?>
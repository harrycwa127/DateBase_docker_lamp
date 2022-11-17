<?php

//for login validation
if (!function_exists('_is_valid')) {
    function _is_valid($var){
        if (empty($var) || is_null($var) || FALSE === $var)
            return FALSE;
        return TRUE;
    }
}

//error logging
if (!function_exists('_log_error')) {
    function _log_error($msg){
        echo "<script type='text/javascript'>alert('$msg');</script>";
        // die($msg);
    }
}

if (!function_exists('_password_hash')) {
    function _password_hash($password){
        return hash('sha256',$password);
    }
}
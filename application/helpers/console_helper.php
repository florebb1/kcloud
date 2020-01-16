<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('console')){
    function console($str){
        return "<script>console.log('".$str."')</script>";
    }
}
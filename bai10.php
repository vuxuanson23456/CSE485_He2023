<?php
function lowerLetter($arr) { 
    $result = array_map(function($item) { 
        if(is_string($item)) {
             return strtolower($item); 
            } return $item; 
        }, $arr); 
        return $result;
    }$arrs = ['1', 'B', 'C', 'E'];
    $result = lowerLetter($arrs);
    print_r($result);
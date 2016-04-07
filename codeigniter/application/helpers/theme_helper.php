<?php

if(!function_exists('menu_is_active')) {
    function menu_is_active($item, $themeData) {
        if($themeData['menu'] == $item) {
            return true;
        } else {
            return false;
        }
    }
}
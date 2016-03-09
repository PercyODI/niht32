<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Users extends CI_CONTROLLER {
    
    public function index() {
        echo "This is the index!";
    }
    
    public function show($userId = 0) {
        $userId = (int)$userId;
        echo "This is show users!";
        if($userId > 0) {
            echo "User ID: {$userId}";
        }
    }
}
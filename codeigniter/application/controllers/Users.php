<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Users extends CI_CONTROLLER {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->helper("url_helper");
        $this->load->library("user_factory");
    }
    
    public function index() {
        echo "This is the index!";
    }
    
    public function show($userId = 0) {
        $userId = (int)$userId;
        $data = array(
            "users" => $this->user_factory->getUser($userId)
        );
        $this->load->view("show_users", $data);
    }
}
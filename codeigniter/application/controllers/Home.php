<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
    }
    public function index() {
        // $this->set_message("This is a message");
        $this->render();
    }
}
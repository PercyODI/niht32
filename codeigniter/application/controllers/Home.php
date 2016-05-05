<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    
    private $theme_options = array();
    
    public function __construct() {
        parent::__construct();
        
        $this->theme_options['menu'] = 'home';
    }
    public function index() {
        $this->theme_options = array_merge($this->theme_options, array('title' => 'Home / Dashboard'));
        
        $this->set_var('theme', $this->theme_options);
        $this->render();
    }
}
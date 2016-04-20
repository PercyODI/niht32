<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Analytics extends MY_Controller {
    
    private $theme_options = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->helper("url_helper");
        $this->load->model('analytics_model', 'analytics');
        
        $this->theme_options['menu'] = 'trainees';
    }
    
    public function index() {
        $this->render();
    }
    
    public function graphs(){
         $this->theme_options = array_merge(
            $this->theme_options, 
            array(
                'title' => 'Data Analytics',
                'subtitle' => ''
            )
        );
        
        $this->set_var('theme', $this->theme_options);
        $this->render();
    }
}
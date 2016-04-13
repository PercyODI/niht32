<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Trainees extends MY_Controller {
    
    private $theme_options = array();
    
    public function __construct() {
        parent::__construct();
        // $this->load->model("trainee_model", "trainee");
        $this->load->helper("url_helper");
        
        $this->theme_options['menu'] = 'trainees';
    }
    
    public function index() {
        $this->render();
    }
    
    public function add_trainee() {
        $this->theme_options = array_merge(
            $this->theme_options, 
            array(
                'title' => 'Adding a Trainee',
                'subtitle' => ''
            )
        );
        
        $this->set_var('theme', $this->theme_options);
        $this->render();
    }
    
}
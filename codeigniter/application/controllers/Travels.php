<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Travels extends MY_Controller {
    
    private $theme_options = array();
    
    public function __construct() {
        parent::__construct();
        // $this->load->model("travel_model", "travel");
        $this->load->helper("url_helper");
        $this->load->model('travel_model', 'travel');
        
        $this->theme_options['menu'] = 'travels';
    }
    
    public function index() {
        $this->render();
    }
    
    public function view_travels($search = 'null', $offset = 0, $limit = 15) {
        $this->theme_options = array_merge($this->theme_options, array(
            'title' => '',
            'subtitle' => '')
        );
        
        $offset = (int)$offset;
        
        if($search === '' || $search === 'null') {
            $data = $this->travel->limit($limit, $offset)->join_trainees()->get_all();
        } else {
            $data = $this->travel->limit($limit, $offset)->join_trainees()->search($search)->get_all();
        }
        $this->set_var('theme', $this->theme_options);
        $this->set_var('travels', $data);
        $this->set_var('offset', $offset);
        $this->set_var('limit', $limit);
        $this->set_var('search', $search);
        $this->render();
    }
    
    public function get_travel_json($travelId = 0){
        $travelId = (int)$travelId;
        if($travelId > 0) {
            $data = new stdClass();
            if($data->travel_data = $this->travel->get($travelId)) {
                $data->success = true;
            }
        }
        if(!isset($data->success) || $data->success != true) {
            $data->success = false;
        }
        
        $this->render_json($data);
    }
    
}
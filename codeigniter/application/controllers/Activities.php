<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Activities extends CI_CONTROLLER {
    public function __construct() {
        parent::__construct();
        $this->load->model("activity_model", "activity");
    }   
    
    public function index() {
        echo "This is the Activity Index";
    }
    
    public function show($activityId = 0) {
        $activityId = (int)$activityId;
        if($activityId > 0) {
            $data = $this->activity->get($activityId);
        } else {
            $data = $this->activity->get_all();
        }
        var_dump($data);
    }
}
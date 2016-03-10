<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Activities extends CI_CONTROLLER {
    public function __construct() {
        parent::__construct();
        $this->load->model("activity_model");
    }   
    
    public function index() {
        echo "This is the Activity Index";
    }
    
    public function show($activityId = 0) {
        $activityId = (int)$activityId;
        if($activity > 0) {
            $data = array("activity" => $this->activity_model->getActivityById($activityId));
        } else {
            $data = Activity_model::getAllActivities();
        }
        var_dump($data);
    }
}
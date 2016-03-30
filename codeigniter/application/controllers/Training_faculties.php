<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Training_faculties extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("training_faculty_model", "training_faculty");
    }   
    
    public function index() {
        echo "This is the Training Faculty Index";
    }
    
    public function show($id = 0) {
        $id = (int)$id;
        if($id > 0) {
            $data = $this->training_faculty->get($id);
        } else {
            $data = $this->training_faculty->get_all();
            // echo var_dump($data);
        }
        $this->set_var("table", $data);
        $this->render();
    }
}
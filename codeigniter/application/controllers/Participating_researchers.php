<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Participating_researchers extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("participating_researcher_model", "participating_researcher");
    }   
    
    public function index() {
        echo "This is the Participating Researchers Index";
    }
    
    public function show($id = 0) {
        $id = (int)$id;
        if($id > 0) {
            $data = $this->participating_researcher->get($id);
        } else {
            $data = $this->participating_researcher->get_all();
            // echo var_dump($data);
        }
        $this->set_var("table", $data);
        $this->render();
    }
}
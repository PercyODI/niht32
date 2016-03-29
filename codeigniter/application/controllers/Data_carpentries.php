<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Data_carpentries extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("data_carpentry_model", "data_carpentry");
    }   
    
    public function index() {
        echo "This is the Data Carpentries Index";
    }
    
    public function show($id = 0) {
        $id = (int)$id;
        if($id > 0) {
            $data = $this->data_carpentry->get($id);
        } else {
            $data = $this->data_carpentry->get_all();
            // echo var_dump($data);
        }
        $this->set_var("table", $data);
        $this->render();
    }
}
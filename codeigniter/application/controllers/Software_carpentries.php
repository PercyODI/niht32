<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Software_carpentries extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("software_carpentry_model", "software_carpentry");
    }   
    
    public function index() {
        echo "This is the Software Carpentries Index";
    }
    
    public function show($id = 0) {
        $id = (int)$id;
        if($id > 0) {
            $data = $this->software_carpentry->get($id);
        } else {
            $data = $this->software_carpentry->get_all();
            // echo var_dump($data);
        }
        $this->set_var("table", $data);
        $this->render();
    }
}
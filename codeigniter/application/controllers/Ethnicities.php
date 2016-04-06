<?php
class Ethnicities extends MY_Controller {
 public function __construct() {
        parent::__construct();
        $this->load->model("ethnicity_model", "ethnicity");
    }   
    
    public function index() {
        echo "This is the Ethnicities Index";
    }
    
    public function show($ethnicityId = 0) {
        $ethnicityId = (int)$ethnicityId;
        if($ethnicityId > 0) {
            $data = $this->ethnicity->get($ethnicityId);
        } else {
            $data = $this->ethnicity->get_all();
            // echo var_dump($data);
        }
        $this->set_var("table", $data);
        $this->render();
    }   

}
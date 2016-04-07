<?php
class Ethnicities extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model("ethnicity_model", "ethnicity");
        // $theme_data
        
    }
    
    public function index() {
        echo "This is the Activity Index";
    }
    
    public function show($ethnicityId=0){
        
        $ethnicityId = (int)$ethnicityId;
        
        $theme_data = array(
            'menu' = 'ethnicities'
        );
        
        if ($ethnicityId>0) {
            $data = $this->ethnicity->get($ethnicityId);
            $this->view("ethnicities/show_one");
            $this->set_var("row", $data);
        }
        else{
            $data = $this->ethnicity->get_all();
            $this->set_var("table", $data);
        }
        
        
        $this->render();
    }
    
}


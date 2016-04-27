<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ethnicity_model extends MY_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function ethnicitiesPieChartData() {
        $result = $this->_database->count_all('ethnicities');
        $result = $this->_database
            ->select("COUNT(ethnicity_id) as count, ethnicity_id, ethnicities.name")
            ->from("trainee_ethnicities")
            ->join("ethnicities", "trainee_ethnicities.ethnicity_id = ethnicities.id")
            ->group_by("ethnicity_id")
            ->get()
            ->{$this->_return_type(1)}();
            
        
        return $result;
    }
}
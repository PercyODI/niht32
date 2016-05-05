<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Travel_model extends MY_Model {
    
    public $belongs_to = array('trainee');
    
    public $validate = array(
       
    );
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_with_offset($offset) {
        $offset = (int)$offset;
        
        $this->_database->offset($offset);
        $this->_database->limit(15);
        
        $this->get_all();
    }
    
    public function join_trainees() {
        $this->_database->select("travels.*, trainees.legal_first_name, trainees.legal_family_name");
        $this->_database->join('trainees', 'travels.trainee_id=trainees.id');
        
        return $this;
    }
    
    public function search($search) {
        // $this->_database->from('trainees tn'); 
        $this->_database->like('trainees.legal_family_name',$search);
        $this->_database->or_like('trainees.legal_first_name',$search);
        $this->_database->or_like('travels.name',$search);
        
        return $this;
    }
}
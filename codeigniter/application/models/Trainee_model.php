<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trainee_model extends MY_Model {
    
    public $has_many = array('travels');
    
    public $validate = array(
        array( 'field' => 'username', 
              'label' => 'username',
              'rules' => 'alpha_numeric|max_length[45]' ),
        array( 'field' => 'fname',
              'label' => 'first name',
              'rules' => 'alpha|max_length[45]' ),
        array( 'field' => 'lname',
              'label' => 'last name',
              'rules' => 'alpha|max_length[45]' ),
        array( 'field' => 'email', 
              'label' => 'email',
              'rules' => 'valid_email' ),
        array( 'field' => 'password', 
              'label' => 'password',
              'rules' => 'min_length[10]' ),
        // array( 'field' => 'birthday',
        //       'label' => 'birthday',
        //       'rules' => 'regex_match[/^(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$/]')
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
    
    public function search($search) {
        
        $this->_database->like('legal_family_name', $search);
        $this->_database->or_like('legal_first_name', $search);
        
        return $this;
    }
    
    public function get_everything_from_id($traineeId) {
        $data = $this->get($traineeId);
        $data->institutions = $this->_database
                                ->from('institution_nodes')
                                ->where('trainee_id', $data->id)
                                ->get()
                                ->{$this->_return_type(1)}();
        $data->testScore = $this->_database
                                ->from('test_scores')
                                ->where('id', $data->test_score_id)
                                ->get()
                                ->{$this->_return_type()}();
        $data->mailing_address = $this->_database
                                ->from('addresses')
                                ->where('id', $data->mailing_address_id)
                                ->get()
                                ->{$this->_return_type()}();
        $data->permanent_address = $this->_database
                                ->from('addresses')
                                ->where('id', $data->permanent_address_id)
                                ->get()
                                ->{$this->_return_type()}();
        $data->background_nodes = $this->_database
                                ->from('background_nodes')
                                ->where('trainee_id', $data->id)
                                ->get()
                                ->{$this->_return_type(1)}();
        $data->ethnicities = $this->_database
                                ->from('ethnicities')
                                ->join('trainee_ethnicities', 'ethnicities.id = trainee_ethnicities.ethnicity_id')
                                ->where('trainee_ethnicities.trainee_id', $data->id)
                                ->get()
                                ->{$this->_return_type(1)}();  
        $data->resident_status = $this->_database
                                ->from('resident_statuses')
                                ->where('id', $data->resident_status_id)
                                ->get()
                                ->{$this->_return_type()}(); 
        $data->other_names = $this->_database
                                ->from('other_names')
                                ->where('trainee_id', $data->id)
                                ->get()
                                ->{$this->_return_type(1)}();
                                
        return $data;
    }
    
    public function save_updated_name($data, $traineeId = 0){
        $traineeId = (int)$traineeId;
        
        $this->db->where('id', $traineeId);
        $this->db->update('trainees', $data);
    }
    
    public function save_updated_address($data, $addId = 0){
        $addId = (int)$addId;
        
        $this->db->where('id', $addId);
        $this->db->update('addresses', $data);
    }
    
    public function save_updated_test_scores($data, $testId = 0){
        $testId = (int)$testId;
        
        $this->db->where('id', $testId);
        $this->db->update('test_scores', $data);
    }
    
    public function save_updated_educational_background($data, $traineeId = 0){
        $traineeId = (int)$traineeId;
        
        $this->db->where('id', $traineeId);
        $this->db->update('institution_nodes', $data);
    }
}
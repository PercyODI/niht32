<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trainee_model extends MY_Model {
    
    public $has_many = array('company_admins');
    
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
}
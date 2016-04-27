<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Analytics_model extends MY_Model {
    
        public function __construct() {
        parent::__construct();
    }
    
    public function getTravelsFromTraineeId($traineeId) {
        $traineeId = (int)$traineeId;
        $result = $this->_database
            ->from('travels')
            ->where('trainee_id', $traineeId)
            ->order_by('date', 'ASC')
            ->get()
            ->{$this->_return_type(1)}();
            
        return $result;
    }
}
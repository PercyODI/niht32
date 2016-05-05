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
    
    public function getAverageApplicantGREScores() {
        $result = $this->_database
            ->select('
                AVG(gre_verbal_percentile) as average_gre_verbal_percentile, 
                AVG(gre_quantitative_percentile) as average_gre_quantitative_percentile, 
                AVG(gre_analytical_writing_percentile) as average_gre_analytical_writing_percentile
            ')
            ->from('test_scores')
            ->get()
            ->{$this->_return_type()}();
            
        return $result;
    }
    
    public function getDegreeLevels() {
        $result = $this->_database
            ->select('
                required_degree_nodes.name as degree_name, 
                COUNT(degree_requirement_nodes.id) as number_of_trainees')
            ->from('required_degree_nodes ')
            ->join('degree_requirement_nodes', 
                'required_degree_nodes.id = degree_requirement_nodes.required_degree_node_id',
                'left outer')
            ->group_by('required_degree_nodes.id')
            ->get()
            ->{$this->_return_type(1)}();
        // select required_degree_nodes.name as degree_name, COUNT(degree_requirement_nodes.id) as number_of_trainees
        // from required_degree_nodes 
        // left outer join degree_requirement_nodes ON (required_degree_nodes.id = degree_requirement_nodes.required_degree_node_id)
        // group by required_degree_nodes.id;
        return $result;
    }
    
    public function getTraineeBackground() {
        $result = $this->_database
            ->select("node_text as name, COUNT(trainee_id) as count")
            ->from("background_nodes")
            ->group_by("node_text")
            ->order_by("count", 'DESC')
            ->get()
            ->{$this->_return_type(1)}();
            
        
        return $result;
    }
}
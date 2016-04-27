<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Analytics extends MY_Controller {
    
    private $theme_options = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->helper("url_helper");
        $this->load->model('analytics_model', 'analytics');
        
        $this->theme_options['menu'] = 'trainees';
    }
    
    public function index() {
        $this->render();
    }
    
    public function graphs(){
         $this->theme_options = array_merge(
            $this->theme_options, 
            array(
                'title' => 'Data Analytics',
                'subtitle' => ''
            )
        );
        
        $this->set_var('theme', $this->theme_options);
        $this->render();
    }
    
    public function ethnicityPieGraphData() {
        $this->load->model("ethnicity_model", "ethnicity");
        $result = array();
        $countArray = $this->ethnicity->ethnicitiesPieChartData();
        if(count($countArray) == 0) {
            $result['success'] = false;
        } else {
            $result['success'] = true;
        }
        $result['datasets'][0] = array();
        foreach($countArray as $ethnicity) {
            $result['labels'][] = $ethnicity->name;
            $result['datasets'][0]['data'][] = (int)$ethnicity->count;
            $randomColor = "rgb(" . rand(0, 255). "," . rand(0, 255) . "," . rand(0, 255) . ")";
            $result['datasets'][0]['backgroundColor'][] = $randomColor;
            $result['datasets'][0]['hoverBackgroundColor'][] = $randomColor;
            
        }
        $this->render_json($result);
    }
    
    public function traineeTravelExpenseOverTime($traineeId = 0) {
        $traineeId = (int)$traineeId;
        
        $result = array();
        $databaseResult = $this->analytics->getTravelsFromTraineeId($traineeId);
        $totalCost = 0.0;
        foreach($databaseResult as $travel) {
            $result['dates'][] = $travel->date;
            $totalCost = $travel->cost + $totalCost;
            $result['totalCost'][] = $totalCost;
            $result['success'] = true;
        }
        
        if(!isset($result['success']) || $result['success'] != true) {
            $result['success'] = false;
        }
        
        $this->render_json($result);
    }
}
<?php
if(! defined("BASEPATH")) exit("No direct script access allowed");

class Trainees extends MY_Controller {
    
    private $theme_options = array();
    
    public function __construct() {
        parent::__construct();
        // $this->load->model("trainee_model", "trainee");
        $this->load->helper("url_helper");
        $this->load->model('trainee_model', 'trainee');
        
        $this->theme_options['menu'] = 'trainees';
    }
    
    public function index() {
        $this->render();
    }
    
    public function add_trainee() {
        $this->theme_options = array_merge(
            $this->theme_options, 
            array(
                'title' => 'Adding a Trainee',
                'subtitle' => ''
            )
        );
        
        $this->set_var('theme', $this->theme_options);
        $this->render();
    }
    
    public function trainee_profile($traineeId = 1) {
        $data = $this->trainee->get($traineeId);
        
        $this->set_var('theme', $this->theme_options);
        $this->set_var('trainee', $data);
        $this->render();
    }
    
    public function view_trainees($search = 'null', $offset = 0, $limit = 15) {
        $this->theme_options = array_merge($this->theme_options, array(
            'title' => '',
            'subtitle' => '')
        );
        
        $offset = (int)$offset;
        
        if($search === '' || $search === 'null') {
            $data = $this->trainee->limit($limit, $offset)->get_all();
        } else {
            $data = $this->trainee->limit($limit, $offset)->search($search)->get_all();
        }
        
        $this->set_var('theme', $this->theme_options);
        $this->set_var('trainees', $data);
        $this->set_var('offset', $offset);
        $this->set_var('limit', $limit);
        $this->set_var('search', $search);
        $this->render();
    }
    
    public function view_trainee($traineeId = 0) {
        $traineeId = (int)$traineeId;
        if($traineeId < 1) {
            redirect('/trainees/view_trainees');
        }
        
        
        
        $data = $this->trainee->get_everything_from_id($traineeId);
        
        $this->theme_options = array_merge($this->theme_options, array(
            'title' => 'Showing Profile for ' . $data->legal_first_name . ' ' . $data->legal_family_name,
            'subtitle' => ''
            )
        );
        $this->set_var('theme', $this->theme_options);
        $this->set_var('trainee', $data);
        $this->render();
    }
    
    public function get_trainee_name_json($traineeId = 0){console.log(trainee_id);
        $traineeId = (int)$traineeId; console.log("here");
        if($traineeId > 0) {
            $data = new stdClass();
            if($data->trainee_data = $this->trainee->get($traineeId)) {
                $data->success = true;
            }
        }
        if(!isset($data->success) || $data->success != true) {
            $data->success = false;
        }
        
        $this->render_json($data);
    }
    
    /*
    public function add_trainee_post() {
        $this->load->library('form_validation');
        $this->load->model('test_scores_model', 'test_scores');
        // Need to parse $_POST data, insert or update the appropriate tables through models
        
        $participantId = $this->participant->insert(array(
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'prefname' => $_POST['prefname']
            )
        );
        
        $test_score_id = $this->test_score->insert(array(
            'id' => $participantId,
            'gmat_date'  => $_POST['gmat_date'],
            'gmat_score' => $_POST['gmat_score'],
            'gmat_verbal_score' => $_POST['gmat_verbal_score'],
            'gmat_verbal_percentile' => $_POST['gmat_verbal_percentile'],
            'gmat_quantitative_score' => $_POST['gmat_quantitative_score'],
            'gmat_quantitative_percentile' => $_POST['gmat_quantitative_percentile'],
            'gmat_analytical_writing_score' => $_POST['gmat_analytical_writing_score'],
            'gmat_analytical_writing_percentile' => $_POST['gmat_analytical_writing_percentile'],
            'gmat_integrated_reasoningl_score' => $_POST['gmat_integrated_reasoningl_score'],
            'gmat_integrated_reasoning_percentile' => $_POST['gmat_integrated_reasoning_percentile'],
            'gre_date' => $_POST['gre_date'],
            'gre_verbal_score' => $_POST['gre_verbal_score'],
            'gre_verbal_percentile' => $_POST['gre_verbal_percentile'],
            'gre_quantitative_score' => $_POST['gre_quantitative_score'],
            'gre_quantitative_percentile' => $_POST['gre_quantitative_percentile'],
            'gre_analytical_writing_score' => $_POST['gre_analytical_writing_score'],
            'gre_analytical_writing_percentile' => $_POST['gre_analytical_writing_percentile'],
            'toefl_date' => $_POST['toefl_date'],
            'toefl_score' => $_POST['toefl_score'],
            'ibt_reading' => $_POST['ibt_reading'],
            'ibt_listening' => $_POST['ibt_listening'],
            'ibt_speaking' => $_POST['ibt_speaking'],
            'ibt_writing' => $_POST['ibt_writing'],
            'pb_listening' => $_POST['pb_listening'],
            'pb_writing' => $_POST['pb_writing'],
            'pb_reading' => $_POST['pb_reading'],
            'pb_essay' => $_POST['pb_essay'],
            'ielts_date' => $_POST['ielts_date'],
            'ielts_score' => $_POST['ielts_score'],
            'ielts_listening' => $_POST['ielts_listening'],
            'ielts_reading' => $_POST['ielts_reading'],
            'ielts_writing' => $_POST['ielts_writing'],
            'ielts_speaking' => $_POST['ielts_speaking'],
            'mat_date' => $_POST['mat_date'],
            'mat_score' => $_POST['mat_score']
            )
        );
        
        $mailing_address_id = $this->address->insert(array(
            'id' => $participantId,
            'address_line_1' => $_POST['mailing_address_line_1'],
            'address_line_2' => $_POST['mailing_address_line_2'],
            'address_city' => $_POST['mailing_address_city'],
            'address_county' => $_POST['mailing_address_county'],
            'address_state' => $_POST['mailing_address_state'],
            'address_zip' => $_POST['mailing_address_zip'],
            'address_country' => $_POST['mailing_address_country'],
            'telephone_country_code' => $_POST['mailing_telephone_country_code'],
            'telephone_area_code' => $_POST['mailing_telephone_area_code'],
            'telephone_number' => $_POST['mailing_telephone_number'],
            'valid_til' => $_POST['mailing_valid_til']
            )
        );
        
        $permanent_address_id = $this->address->insert(array(
            'id' => $participantId,
            'address_line_1' => $_POST['permanent_address_line_1'],
            'address_line_2' => $_POST['permanent_address_line_2'],
            'address_city' => $_POST['permanent_address_city'],
            'address_county' => $_POST['permanent_address_county'],
            'address_state' => $_POST['permanent_address_state'],
            'address_zip' => $_POST['permanent_address_zip'],
            'address_country' => $_POST['permanent_address_country'],
            'telephone_country_code' => $_POST['permanent_telephone_country_code'],
            'telephone_area_code' => $_POST['permanent_telephone_area_code'],
            'telephone_number' => $_POST['permanent_telephone_number'],
            'valid_til' => $_POST['permanent_valid_til']
            )
        );
        
        $list_of_ethnicities = $this->ethnicities->get_all();
        foreach($_POST['ethnicities'] as $ethnicity){
            //for trainee ethnicities
            //if($ethnicity in $list_of_ethnicities) {
                $this->trainee_ethnicity->insert(array(
                    //'ethnicity_id' => //id from list_of_ethnicities,
                    'trainee_id' => $participantId
                    )
                );
           // }
        }
        
        foreach ($_POST['institutions'] as $institution){
            //for institution nodes
            $institutionId = $this->institution_node->insert(array(
                'id' => $participantId,
                'name' => $institution['name'],
                'city' => $institution['city'],
                'state' => $institution['institution_state'],
                'country' =>  $institution['institution_country'],
                'start_date' =>  $institution['start_date'],
                'end_date' =>  $institution['end_date'],
                'degree_earned' =>  $institution['degree_earned'],
                'degree_date' =>  $institution['degree_date'],
                'overall_gpa' =>  $institution['overall_gpa'],
                'major_gpa' =>  $institution['major_gpa'],
                'gpa_scale' =>  $institution['gpa_scale']
                )
            );
  
            //for trainee institutions
            $this->trainee_institution->insert(array(
                'former_institution_id' => $institutionId,
                'trainee_id' => $participantId
                )
            );
        }
      
        $this->trainee->insert(array(
            'id' => $participantId,
            'admission_year' => $_POST['admission_year'],
            'admission_season' => $_POST['admission_season'],
            'student_number' => $_POST['student_number'],
            'legal_family_name' => $_POST['legal_family_name'],
            'legal_first_name' => $_POST['legal_first_name'],
            'legal_middle_name' => $_POST['legal_middle_name'],
            'email_address' => $_POST['email_address'],
            'mailing_address_id' => $mailing_address_id,
            'permanent_address_id' => $permanent_address_id,
            'date_of_birth' => $_POST['date_of_birth'],
            'state_of_birth' => $_POST['state_of_birth'],
            'city_of_birth' => $_POST['city_of_birth'],
            'missouri_resident' => $_POST['missouri_resident'],
            'us_af_veteran' => $_POST['us_af_veteran'],
            'us_citizen' => $_POST['us_citizen'],
            'country_of_citizenship' => $_POST['country_of_citizenship'],
            'graduate_program' => $_POST['graduate_program'],
            'resident_status_id' => $_POST['resident_status_id'], 
            'attendance_status' => $_POST['attendance_status'],
            'assistantship_interest' => $_POST['assistantship_interest'],
            'expected_entrance_term' => $_POST['expected_entrance_term'],
            'attending_us_school' => $_POST['attending_us_school'],
            'test_score_id' => $test_score_id
            )
        );
            
        //parse other names string
        
        $this->other_name->insert(array(
            'id' => $participantId
            //'name' => 
            )
        );
        
        $this->trainee_other_name->insert(array(
            'trainee_id' => $participantId
            //'other_name_id' => //will insert after insert into other names table
            )
        );
        
        if(!isset($data['add_success']) || $data['add_success'] != true) {
            $data['add_success'] = false;
            $data['errors'] = $this->form_validation->error_array();
        }
        
        $this->render_json($data);
    }*/
    
}
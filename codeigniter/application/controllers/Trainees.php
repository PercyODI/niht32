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
    
    public function save_name($fname, $mname, $lname, $email, $traineeId){
       $traineeId = (int)$traineeId;
       $fname = (string)$fname;
       $lname = (string)$lname;
       $mname = (string)$mname;
       $email = (string)$email;
       
        if($traineeId > 0) {
            $data = array(
               'legal_first_name' => urldecode($fname),
               'legal_middle_name' => urldecode($mname),
               'legal_family_name' => urldecode($lname),
               'email_address' => urldecode($email)
            );
        
            $this->trainee->save_updated_name($data, $traineeId);
            
            redirect('trainees/view_trainee/' . $traineeId);
        }
    }
    
    public function save_mail_address($add1, $add2, $city, $state, $zipcode, $traineeId){
       $traineeId = (int)$traineeId;
       
        if($traineeId > 0) {
            $data = array(
               'address_line_1' => urldecode($add1),
               'address_line_2' => urldecode($add2),
               'address_city' => urldecode($city),
               'address_state' => urldecode($state),
               'address_zip' => urldecode($zipcode)
            );
            
            if($trainee_data = $this->trainee->get($traineeId)) {
                $this->trainee->save_updated_address($data, $trainee_data->mailing_address_id);
            }
            
            redirect('trainees/view_trainee/' . $traineeId);
        }
    }
    
    public function save_perm_address($add1, $add2, $city, $state, $zipcode, $traineeId){
       $traineeId = (int)$traineeId;
       
        if($traineeId > 0) {
            $data = array(
               'address_line_1' => urldecode($add1),
               'address_line_2' => urldecode($add2),
               'address_city' => urldecode($city),
               'address_state' => urldecode($state),
               'address_zip' => urldecode($zipcode)
            );
            
            if($trainee_data = $this->trainee->get($traineeId)) {
                $this->trainee->save_updated_address($data, $trainee_data->permanent_address_id);
            }
            
            redirect('trainees/view_trainee/' . $traineeId);
        }
    }
    
    public function save_gender_ethnicity($gender, $ethnicity, $traineeId){
       $traineeId = (int)$traineeId;
       
        if($traineeId > 0) {
            $data = array(
               'gender' => urldecode($gender)
            );
            
            $this->trainee->save_updated_gender($data, $traineeId);
            
            redirect('trainees/view_trainee/' . $traineeId);
        }
    }
    
    public function save_admissions_info($program, $attendance, $assistantship, $entrance, $traineeId){
       $traineeId = (int)$traineeId;
       
        if($traineeId > 0) {
            $data = array(
               'graduate_program' => urldecode($program),
               'attendence_status' => urldecode($attendance),
               'assistantship_interest' => urldecode($assistantship),
               'expected_entrance_term' => urldecode($entrance)
            );
            
            $this->trainee->save_updated_admissions_info($data, $traineeId);
            
            redirect('trainees/view_trainee/' . $traineeId);
        }
    }
    
    public function save_educational_background($name, $city, $state, $country, $startdate, $enddate, $degreeearned, $degreedate, 
    $overallgpa, $major_gpa, $gpa_scale, $traineeId){
        
       $traineeId = (int)$traineeId;
       
        if($traineeId > 0) {
            $data = array(
               'name' => urldecode($name),
               'city' => urldecode($city),
               'state' => urldecode($state),
               'country' => urldecode($country),
               'start_date' => urldecode($startdate),
               'end_date' => urldecode($enddate),
               'degree_earned' => urldecode($degreeearned),
               'degree_date' => urldecode($degreedate),
               'overall_gpa' => urldecode($overallgpa),
               'major_gpa' => urldecode($major_gpa),
               'gpa_scale' => urldecode($gpa_scale)
            );
            
            $this->trainee->save_updated_institution($data, $traineeId);
            
            redirect('trainees/view_trainee/' . $traineeId);
        }
    }
    
    public function save_birth_citizenship($dob, $sob, $cob, $citizen, $perm_res, $mo_res, $veteran, $traineeId){
        
       $traineeId = (int)$traineeId;
       
        if($traineeId > 0) {
            $data_trainee = array(
               'date_of_birth' => urldecode($dob),
               'state_of_birth' => urldecode($sob),
               'city_of_birth' => urldecode($cob),
               'us_citizen' => urldecode($citizen),
               'missouri_resident' => urldecode($mo_res),
               'us_af_veteran' => urldecode($veteran)
            );
            
            $data_visa = array(
                'us_permanent_resident' => urldecode($perm_res),
                'visa_status' => urldecode($visa)
            );
               
            $this->trainee->save_updated_birth_citizenship_trainee($data_trainee, $traineeId);
            
            if($trainee_data = $this->trainee->get($traineeId)) {
                $this->trainee->save_updated_birth_citizenship_visa($data_visa, $trainee_data->resident_status_id);
            }
            
            redirect('trainees/view_trainee/' . $traineeId);
        }
    }
    
    public function save_test_scores($gmat_date, $gmat_score, $gmat_v_score, $gmat_v_perc, $gmat_q_score, 
        $gmat_q_perc, $gmat_aw_score, $gmat_aw_perc, $gmat_ir_score, $gmat_ir_perc,
        $gre_date, $gre_v_score, $gre_v_perc, $gre_q_score, $gre_q_perc, $gre_aw_score, $gre_aw_perc, 
        $toefl_date, $toefl_score, $ibt_read, $ibt_write, $ibt_list, $ibt_speak, $pb_read, $pb_write, 
        $pb_list, $pb_essay, $ielts_date, $ielts_score,  $ielts_read, $ielts_write, $ielts_list, $ielts_speak, 
        $mat_date, $mat_score, $traineeId){
            
       $traineeId = (int)$traineeId;
       
        if($traineeId > 0) {
            $data = array(
               'gmat_date' => urldecode($gmat_date),
               'gmat_score' => urldecode($gmat_score),
               'gmat_verbal_score' => urldecode($gmat_v_score),
               'gmat_verbal_percentile' => urldecode($gmat_v_perc),
               'gmat_quantitative_score' => urldecode($gmat_q_score),
               'gmat_quantitative_percentile' => urldecode($gmat_q_perc),
               'gmat_analytical_writing_score' => urldecode($gmat_aw_score),
               'gmat_analytical_writing_percentile' => urldecode($gmat_aw_perc),
               'gmat_integrated_reasoningl_score' => urldecode($gmat_ir_score),
               'gmat_integrated_reasoning_percentile' => urldecode($gmat_ir_perc),
               'gre_date' => urldecode($gre_date),
               'gre_verbal_score' => urldecode($gre_v_score),
               'gre_verbal_percentile' => urldecode($gre_v_perc),
               'gre_quantitative_score' => urldecode($gre_q_score),
               'gre_quantitative_percentile' => urldecode($gre_q_perc),
               'gre_analytical_writing_score' => urldecode($gre_aw_score),
               'gre_analytical_writing_percentile' => urldecode($gre_aw_perc),
               'toefl_date' => urldecode($toefl_date),
               'toefl_score' => urldecode($toefl_score),
               'ibt_reading' => urldecode($ibt_read),
               'ibt_listening' => urldecode($ibt_list),
               'ibt_writing' => urldecode($ibt_write),
               'ibt_speaking' => urldecode($ibt_speak),
               'pb_listening' => urldecode($pb_list),
               'pb_reading' => urldecode($pb_read),
               'pb_writing' => urldecode($pb_write),
               'pb_essay' => urldecode($pb_essay),
               'ielts_date' => urldecode($ielts_date),
               'ielts_score' => urldecode($ielts_score),
               'ielts_listening' => urldecode($ielts_list),
               'ielts_reading' => urldecode($ielts_read),
               'ielts_writing' => urldecode($ielts_write),
               'ielts_speaking' => urldecode($ielts_speak),
               'mat_date' => urldecode($mat_date),
               'mat_score' => urldecode($mat_score)
            );
            
            if($trainee_data = $this->trainee->get($traineeId)) {
                $this->trainee->save_updated_test_scores($data, $trainee_data->test_score_id);
            }
            
            redirect('trainees/view_trainee/' . $traineeId);
        }
    }
    
    public function add_trainee_post() {
        // var_dump($_POST);
        $this->load->library('form_validation');
        // Need to parse $_POST data, insert or update the appropriate tables through models
        
        $traineeId = $this->trainee->insert(array(
            'admission_season' => isset($_POST['admission_season']) ? $_POST['admission_season'] : null,
            'admission_year' => isset($_POST['admission_year']) ? $_POST['admission_year'] : null,
            'student_number' => isset($_POST['student_number']) ? $_POST['student_number'] : null,
            'legal_family_name' => isset($_POST['legal_family_name']) ? $_POST['legal_family_name'] : null,
            'legal_first_name' => isset($_POST['legal_first_name']) ? $_POST['legal_first_name'] : null,
            'legal_middle_name' => isset($_POST['legal_middle_name']) ? $_POST['legal_middle_name'] : null,
            'email_address' => isset($_POST['email_address']) ? $_POST['email_address'] : null,
            'date_of_birth' => isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : null,
            'state_of_birth' => isset($_POST['state_of_birth']) ? $_POST['state_of_birth'] : null,
            'city_of_birth' => isset($_POST['city_of_birth']) ? $_POST['city_of_birth'] : null,
            'missouri_resident' => isset($_POST['missouri_resident']) ? $_POST['missouri_resident'] : null,
            'us_af_veteran' => isset($_POST['us_af_veteran']) ? $_POST['us_af_veteran'] : null,
            'us_citizen' => isset($_POST['us_citizen']) ? $_POST['us_citizen'] : null,
            'country_of_citizenship' => isset($_POST['country_of_citizenship']) ? $_POST['country_of_citizenship'] : null,
            'gender' => isset($_POST['gender']) ? $_POST['gender'] : null,
            'graduate_program' => isset($_POST['graduate_program']) ? $_POST['graduate_program'] : null,
            'resident_status_id' => isset($_POST['resident_status_id']) ? $_POST['resident_status_id'] : null,
            'attendence_status' => isset($_POST['attendence_status']) ? $_POST['attendence_status'] : null,
            'assistantship_interest' => isset($_POST['assistantship_interest']) ? $_POST['assistantship_interest'] : null,
            'expected_entrance_term' => isset($_POST['expected_entrance_term']) ? $_POST['expected_entrance_term'] : null,
            'attending_us_school' => isset($_POST['attending_us_school']) ? $_POST['attending_us_school'] : null,
            'test_score_id' => isset($_POST['test_score_id']) ? $_POST['test_score_id'] : null,
            'is_accepted' => isset($_POST['is_accepted']) ? $_POST['is_accepted'] : null
        ));
        
        $this->load->model('test_score_model', 'test_score');
        $test_score_id = $this->test_score->insert(array(
            'gmat_date'  => isset($_POST['gmat_date']) ? $_POST['gmat_date'] : null,
            'gmat_score' => isset($_POST['gmat_score']) ? $_POST['gmat_score'] : null,
            'gmat_verbal_score' => isset($_POST['gmat_verbal_score']) ? $_POST['gmat_verbal_score'] : null,
            'gmat_verbal_percentile' => isset($_POST['gmat_verbal_percentile']) ? $_POST['gmat_verbal_percentile'] : null,
            'gmat_quantitative_score' => isset($_POST['gmat_quantitative_score']) ? $_POST['gmat_quantitative_score'] : null,
            'gmat_quantitative_percentile' => isset($_POST['gmat_quantitative_percentile']) ? $_POST['gmat_quantitative_percentile'] : null,
            'gmat_analytical_writing_score' => isset($_POST['gmat_analytical_writing_score']) ? $_POST['gmat_analytical_writing_score'] : null,
            'gmat_analytical_writing_percentile' => isset($_POST['gmat_analytical_writing_percentile']) ? $_POST['gmat_analytical_writing_percentile'] : null,
            'gmat_integrated_reasoningl_score' => isset($_POST['gmat_integrated_reasoningl_score']) ? $_POST['gmat_integrated_reasoningl_score'] : null,
            'gmat_integrated_reasoning_percentile' => isset($_POST['gmat_integrated_reasoning_percentile']) ? $_POST['gmat_integrated_reasoning_percentile'] : null,
            'gre_date' => isset($_POST['gre_date']) ? $_POST['gre_date'] : null,
            'gre_verbal_score' => isset($_POST['gre_verbal_score']) ? $_POST['gre_verbal_score'] : null,
            'gre_verbal_percentile' => isset($_POST['gre_verbal_percentile']) ? $_POST['gre_verbal_percentile'] : null,
            'gre_quantitative_score' => isset($_POST['gre_quantitative_score']) ? $_POST['gre_quantitative_score'] : null,
            'gre_quantitative_percentile' => isset($_POST['gre_quantitative_percentile']) ? $_POST['gre_quantitative_percentile'] : null,
            'gre_analytical_writing_score' => isset($_POST['gre_analytical_writing_score']) ? $_POST['gre_analytical_writing_score'] : null,
            'gre_analytical_writing_percentile' => isset($_POST['gre_analytical_writing_percentile']) ? $_POST['gre_analytical_writing_percentile'] : null,
            'toefl_date' => isset($_POST['toefl_date']) ? $_POST['toefl_date'] : null,
            'toefl_score' => isset($_POST['toefl_score']) ? $_POST['toefl_score'] : null,
            'ibt_reading' => isset($_POST['ibt_reading']) ? $_POST['ibt_reading'] : null,
            'ibt_listening' => isset($_POST['ibt_listening']) ? $_POST['ibt_listening'] : null,
            'ibt_speaking' => isset($_POST['ibt_speaking']) ? $_POST['ibt_speaking'] : null,
            'ibt_writing' => isset($_POST['ibt_writing']) ? $_POST['ibt_writing'] : null,
            'pb_listening' => isset($_POST['pb_listening']) ? $_POST['pb_listening'] : null,
            'pb_writing' => isset($_POST['pb_writing']) ? $_POST['pb_writing'] : null,
            'pb_reading' => isset($_POST['pb_reading']) ? $_POST['pb_reading'] : null,
            'pb_essay' => isset($_POST['pb_essay']) ? $_POST['pb_essay'] : null,
            'ielts_date' => isset($_POST['ielts_date']) ? $_POST['ielts_date'] : null,
            'ielts_score' => isset($_POST['ielts_score']) ? $_POST['ielts_score'] : null,
            'ielts_listening' => isset($_POST['ielts_listening']) ? $_POST['ielts_listening'] : null,
            'ielts_reading' => isset($_POST['ielts_reading']) ? $_POST['ielts_reading'] : null,
            'ielts_writing' => isset($_POST['ielts_writing']) ? $_POST['ielts_writing'] : null,
            'ielts_speaking' => isset($_POST['ielts_speaking']) ? $_POST['ielts_speaking'] : null,
            'mat_date' => isset($_POST['mat_date']) ? $_POST['mat_date'] : null,
            'mat_score' => isset($_POST['mat_score']) ? $_POST['mat_score'] : null
            )
        );
        
        $this->trainee->update($traineeId, array('test_score_id' => $test_score_id));
        
        $this->load->model('address_model', 'address');
        $mailing_address_id = $this->address->insert(array(
            'address_line_1' => isset($_POST['mailing_address_line_1']) ? $_POST['mailing_address_line_1'] : null,
            'address_line_2' => isset($_POST['mailing_address_line_2']) ? $_POST['mailing_address_line_2'] : null,
            'address_city' => isset($_POST['mailing_address_city']) ? $_POST['mailing_address_city'] : null,
            'address_county' => isset($_POST['mailing_address_county']) ? $_POST['mailing_address_county'] : null,
            'address_state' => isset($_POST['mailing_address_state']) ? $_POST['mailing_address_state'] : null,
            'address_zip' => isset($_POST['mailing_address_zip']) ? $_POST['mailing_address_zip'] : null,
            'address_country' => isset($_POST['mailing_address_country']) ? $_POST['mailing_address_country'] : null,
            'telephone_number' => isset($_POST['mailing_telephone_number']) ? $_POST['mailing_telephone_number'] : null,
            'valid_til' => isset($_POST['mailing_valid_til']) ? $_POST['mailing_valid_til'] : null
            )
        );
        
        $permanent_address_id = $this->address->insert(array(
            'address_line_1' => isset($_POST['permanent_address_line_1']) ? $_POST['permanent_address_line_1'] : null,
            'address_line_2' => isset($_POST['permanent_address_line_2']) ? $_POST['permanent_address_line_2'] : null,
            'address_city' => isset($_POST['permanent_address_city']) ? $_POST['permanent_address_city'] : null,
            'address_county' => isset($_POST['permanent_address_county']) ? $_POST['permanent_address_county'] : null,
            'address_state' => isset($_POST['permanent_address_state']) ? $_POST['permanent_address_state'] : null,
            'address_zip' => isset($_POST['permanent_address_zip']) ? $_POST['permanent_address_zip'] : null,
            'address_country' => isset($_POST['permanent_address_country']) ? $_POST['permanent_address_country'] : null,
            'telephone_number' => isset($_POST['permanent_telephone_number']) ? $_POST['permanent_telephone_number'] : null,
            'valid_til' => isset($_POST['permanent_valid_til']) ? $_POST['permanent_valid_til'] : null
            )
        );
        
        $this->trainee->update($traineeId, array('mailing_address_id' => $mailing_address_id, 'permanent_address_id' => $permanent_address_id));
        
        $this->load->model('ethnicity_model', 'ethnicity');
        $this->load->model('trainee_ethnicity_model', 'trainee_ethnicity');
        
        if(isset($_POST['races'])) {
            $list_of_ethnicities = $this->ethnicity->get_all();
            foreach($_POST['races'] as $race){
                foreach($list_of_ethnicities as $ethnicity) {
                    if($race == $ethnicity->name) {
                        $this->trainee_ethnicity->insert(array(
                            'trainee_id' => $traineeId,
                            'ethnicity_id' => $ethnicity->id
                            )
                        );
                        
                    }
                }
            }
        }
        
        $this->load->model('institution_node_model', 'institution_node');
        $institutionId = $this->institution_node->insert(array(
            'trainee_id' => $traineeId,
            'name' => $_POST['institution_0_name'],
            'city' => $_POST['institution_0_city'],
            'state' => $_POST['institution_0_state'],
            'country' =>  $_POST['institution_0_country'],
            'start_date' =>  $_POST['institution_0_start_date'],
            'end_date' =>  $_POST['institution_0_end_date'],
            'degree_earned' =>  $_POST['institution_0_degree_earned'],
            'degree_date' =>  $_POST['institution_0_degree_date'],
            'overall_gpa' =>  $_POST['institution_0_overall_gpa'],
            'major_gpa' =>  $_POST['institution_0_major_gpa'],
            'gpa_scale' =>  $_POST['institution_0_gpa_scale']
            )
        );
  
        
      
        // $this->trainee->insert(array(
        //     'id' => $participantId,
        //     'admission_year' => $_POST['admission_year'],
        //     'admission_season' => $_POST['admission_season'],
        //     'student_number' => $_POST['student_number'],
        //     'legal_family_name' => $_POST['legal_family_name'],
        //     'legal_first_name' => $_POST['legal_first_name'],
        //     'legal_middle_name' => $_POST['legal_middle_name'],
        //     'email_address' => $_POST['email_address'],
        //     'mailing_address_id' => $mailing_address_id,
        //     'permanent_address_id' => $permanent_address_id,
        //     'date_of_birth' => $_POST['date_of_birth'],
        //     'state_of_birth' => $_POST['state_of_birth'],
        //     'city_of_birth' => $_POST['city_of_birth'],
        //     'missouri_resident' => $_POST['missouri_resident'],
        //     'us_af_veteran' => $_POST['us_af_veteran'],
        //     'us_citizen' => $_POST['us_citizen'],
        //     'country_of_citizenship' => $_POST['country_of_citizenship'],
        //     'graduate_program' => $_POST['graduate_program'],
        //     'resident_status_id' => $_POST['resident_status_id'], 
        //     'attendance_status' => $_POST['attendance_status'],
        //     'assistantship_interest' => $_POST['assistantship_interest'],
        //     'expected_entrance_term' => $_POST['expected_entrance_term'],
        //     'attending_us_school' => $_POST['attending_us_school'],
        //     'test_score_id' => $test_score_id
        //     )
        // );
            
        //parse other names string
        
        // $this->other_name->insert(array(
        //     'id' => $participantId
        //     //'name' => 
        //     )
        // );
        
        // $this->trainee_other_name->insert(array(
        //     'trainee_id' => $participantId
        //     //'other_name_id' => //will insert after insert into other names table
        //     )
        // );
        
        if(!empty($traineeId) && $traineeId > 0) {
            $response['success'] = true;
            $response['traineeId'] = $traineeId;
        } else {
            $response['success'] = false;
        }
        
        $this->render_json($response);
    }
    
}
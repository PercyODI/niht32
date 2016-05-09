<div class="row">
  <div class="col-md-8 col-sm-8 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Application Information</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
  
        <div class="col-xs-3">
          <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left">
            <li class="active">
              <a href="#legal_name" data-toggle="tab">Legal Name</a>
            </li>
            <li>
              <a href="#mailing_address" data-toggle="tab">Mailing Address</a>
            </li>
            <li>
              <a href="#permanent_address" data-toggle="tab">Permanent Address</a>
            </li>
            <li>
              <a href="#birth_and_citizenship" data-toggle="tab">Birth and Citizenship</a>
            </li>
            <li>
              <a href="#gender_and_ethnicity" data-toggle="tab">Gender and Ethnicity</a>
            </li>
            <li>
              <a href="#admissions_information" data-toggle="tab">Admissions Information</a>
            </li>
            <li>
              <a href="#test_scores" data-toggle="tab">Test Scores</a>
            </li>
            <li>
              <a href="#educational_background" data-toggle="tab">Educational Background</a>
            </li>
          </ul>
        </div>
  
        <div class="col-xs-9">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="legal_name">
              <p class="lead">Legal Name</p>
              <p>
                <b>Legal First Name: </b><?= $trainee->legal_first_name ?>
              </p>
              <p>
                <b>Legal Middle Name: </b><?= $trainee->legal_middle_name ?>
              </p>
              <p>
                <b>Legal Family Name: </b><?= $trainee->legal_family_name ?>
              </p>
              <p>
                <b>Other Names: </b>
              <?php 
                if(is_array($trainee->other_names) && count($trainee->other_names) > 0) {
                  $firstForFlag = true;
                  foreach($trainee->other_names as $name) {
                    if(!$firstForFlag) {
                      echo ', ';
                    }
                    echo $name->name;
                    $firstForFlag = false;
                  }
                } else {
                  echo 'No Other Names';
                }
              ?>
              </p>
              <p>
                <b>Email Address: </b><?= $trainee->email_address ?>
              </p>
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Legalname" id="edit_name">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="mailing_address">
              <p class="lead">Mailing Address</p>
            <?php if($trainee->mailing_address != ''): ?>
              <p>
                <b>Mailing Address line 1: </b><?= $trainee->mailing_address->address_line_1 ?>
              </p>
              <p>
                <b>Mailing Address line 2: </b><?= $trainee->mailing_address->address_line_2 ?>
              </p>
              <p>
                <b>City, State, Zipcode: </b><?= $trainee->mailing_address->address_city . ', ' . $trainee->mailing_address->address_state . ' ' . $trainee->mailing_address->address_zip ?>
              </p>
            <?php else: ?>
              <p>No Mailing Address Listed</p>
            <?php endif ?>
            <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mailingaddress" id="edit_mailing_address">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="permanent_address">
              <p class="lead">Permanent Address</p>
            <?php if($trainee->permanent_address != ''): ?>
              <p>
                <b>Permanent Address line 1: </b><?= $trainee->permanent_address->address_line_1 ?>
              </p>
              <p>
                <b>Permanent Address line 2: </b><?= $trainee->permanent_address->address_line_2 ?>
              </p>
              <p>
                <b>City, State, Zipcode: </b><?= $trainee->permanent_address->address_city . ', ' . $trainee->permanent_address->address_state . ' ' . $trainee->permanent_address->address_zip ?>
              </p>
            <?php else: ?>
              <p>No Permanent Address Listed</p>
            <?php endif ?>
            <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#permanentaddress" id="edit_permanent_address">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="birth_and_citizenship">
              <p class="lead">Birth and Citizenship</p>
              <p>
                <b>Date of Birth: </b><?= (new DateTime($trainee->date_of_birth))->format("F jS, Y") ?>
              </p>
              <p>
                <b>State of Birth: </b><?= $trainee->state_of_birth ?>
              </p>
              <p>
                <b>City of Birth: </b><?= $trainee->city_of_birth ?>
              </p>
              <p>
                <b>U.S. Citizen </b><?= $trainee->us_citizen != '0' ? 'Yes' : 'No' ?>
              </p>
            <?php if($trainee->us_citizen != '0' && $trainee->resident_status != ''): ?>
              <p>
                <b>Permanent Resident of U.S. </b><?= $trainee->resident_status->us_permanent_resident != '0' ? 'Yes' : 'No' ?>
              </p>
              <?php if($trainee->resident_status->us_permanent_resident == '0'): ?>
                <p>
                  <b>Visa Status: </b><?= $trainee->resident_status->visa_status != '' ? $trainee->resident_status->visa_status : $trainee->resident_status->visa_status_other ?>
                </p>
              <?php endif ?>
            <?php endif ?>
              <p>
                <b>Missouri Resident: </b><?= $trainee->missouri_resident != '0' ? 'Yes' : 'No' ?>
              </p>
              <p>
                <b>Veteran of the U.S. Armed Forces: </b><?= $trainee->us_af_veteran != '0' ? 'Yes' : 'No' ?>
              </p>
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#birthandcitizenship" id="edit_birth_citizenship">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="gender_and_ethnicity">
              <p class="lead">Gender and Ethnicity</p>
              <p>
                <b>Gender: </b><?= $trainee->gender != '' ? ucfirst($trainee->gender) : 'No Gender Listed' ?>
              </p>
              <p>
                <b>Ethnicity: </b>
                <?php 
                  if($trainee->ethnicities != '' && is_array($trainee->ethnicities)) {
                    $firstForFlag = true;
                    foreach($trainee->ethnicities as $ethnicity) {
                      if($firstForFlag != true) {
                        echo ', ';
                      }
                      echo $ethnicity->name;
                    }
                  } else {
                    echo 'No Ethnicity Listed';
                  }
                ?>
              </p>
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#genderandethnicity" id="edit_gender_ethnicity">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="admissions_information">
              <p class="lead">Admissions Information</p>
              <p>
                <b>Graduate Program: </b><?= $trainee->graduate_program != '' ? $trainee->graduate_program : 'No Graduate Program Listed' ?>
              </p>
              <p>
                <b>Attendance Status: </b>
                <?php 
                  if($trainee->attendence_status) {
                    if($trainee->attendence_status == "full-time"){
                      echo "Full-Time";
                    }
                    else if($trainee->attendence_status == "part-time"){
                      echo "Part-Time";
                    }
                  } else {
                    echo 'No Attendance Status Listed';
                  }
                ?>
              </p>
              <p>
                <b>Interested in an Assistantship or Fellowship: </b><?= $trainee->assistantship_interest == 1 ? 'Yes' : 'No' ?>
              </p>
              <p>
                <b>Expected Term of Entrance: </b><?= $trainee->expected_entrance_term != '' ? $trainee->expected_entrance_term : 'No Expected Entrance Term Listed' ?>
              </p>
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#admissionsinformation" id="edit_admission_info">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="test_scores">
              <p class="lead">Test Scores</p>
              <?php if($trainee->testScore != ''){
                echo '<p>
                  <b><u>GMAT: </u></b></br>
                  <b>Date: </b>' . $trainee->testScore->gmat_date . '</br>
                  <b>Score: </b>' . $trainee->testScore->gmat_score . '</br>
                  <b>Verbal Score: </b>' .   $trainee->testScore->gmat_verbal_score . '</br>
                  <b>Verbal Percentile: </b>' . $trainee->testScore->gmat_verbal_percentile . '</br>
                  <b>Quantitative Score: </b>' . $trainee->testScore->gmat_quantitative_score .  '</br>
                  <b>Quantitative Percentile: </b>' .  $trainee->testScore->gmat_quantitative_percentile . ' </br>
                  <b>Analytical Writing Score: </b>' . $trainee->testScore->gmat_analytical_writing_score . '</br>
                  <b>Analytical Writing Percentile: </b>' . $trainee->testScore->gmat_analytical_writing_percentile . '</br>
                  <b>Integrated_reasoning Score: </b>' .  $trainee->testScore->gmat_integrated_reasoningl_score . '</br>
                  <b>Integrated Reasoning Percentile: </b>' .  $trainee->testScore->gmat_integrated_reasoning_percentile  . '</br>
                </p>
                <p>
                  <b><u>GRE: </u></b></br>
                  <b>Date: </b>' . $trainee->testScore->gre_date .  '</br>
                  <b>Verbal Score: </b>' . $trainee->testScore->gre_verbal_score . '</br>
                  <b>Verbal Percentile: </b>' . $trainee->testScore->gre_verbal_percentile . '</br>
                  <b>Quantitative Score: </b>' . $trainee->testScore->gre_quantitative_score . '</br>
                  <b>Quantitative Percentile: </b>' . $trainee->testScore->gre_quantitative_percentile . '</br>
                  <b>Analytical Writing Score: </b>' . $trainee->testScore->gre_analytical_writing_score . '</br>
                  <b>Analytical Writing Percentile: </b>'.  $trainee->testScore->gre_analytical_writing_percentile . '</br>
                </p>
                <p>
                  <b><u>TOEFL: </u></b></br>
                  <b>Date: </b>' . $trainee->testScore->toefl_date . '</br>
                  <b>Score: </b>' . $trainee->testScore->toefl_score . '</br>
                </p>
                <p>
                  <b><u>IBT:</u></b></br>
                  <b>Reading: </b>' . $trainee->testScore->ibt_reading . '</br>
                  <b>Writing: </b>' . $trainee->testScore->ibt_writing . '</br>
                  <b>Speaking: </b>' . $trainee->testScore->ibt_speaking . '</br>
                  <b>Listening: </b>' . $trainee->testScore->ibt_listening . '</br>
                </p>
                <p>
                  <b><u>PB: </u></b></br>
                  <b>Reading: </b>' . $trainee->testScore->pb_reading . '</br>
                  <b>Writing: </b>' . $trainee->testScore->pb_writing . '</br>
                  <b>Listening: </b>' . $trainee->testScore->pb_listening . '</br>
                  <b>Essay: </b>' . $trainee->testScore->pb_essay . '</br>
                </p>
                <p>
                  <b><u>IELTS: </u></b></br>
                  <b>Date: </b>' . $trainee->testScore->ielts_date . '</br>
                  <b>Score: </b>' . $trainee->testScore->ielts_score . '</br>
                  <b>Reading: </b>' . $trainee->testScore->ielts_reading . '</br>
                  <b>Writing: </b>' . $trainee->testScore->ielts_writing . '</br>
                  <b>Speaking: </b>' . $trainee->testScore->ielts_speaking . '</br>
                  <b>Listening: </b>' . $trainee->testScore->ielts_listening . '</br>
                </p>
                <p>
                  <b><u>MAT: </u></b></br>
                  <b>Date: </b>' . $trainee->testScore->mat_date . '</br>
                  <b>Score: </b>' . $trainee->testScore->mat_score . '</br>
                </p>';
              }
              else{
                echo 'No Test Scores Listed';
              }?>
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#testscores" id="edit_test_scores">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="educational_background">
              <p class="lead">Educational Background</p>
              <p>
                <?php 
                  if($trainee->institutions != '') {
                    foreach($trainee->institutions as $institution) {
                      if($institution->name != ''){
                        echo '<b>Name: </b>' . $institution->name . '</br>';
                        echo '<b>City: </b>' . $institution->city . '</br>';
                        echo '<b>State: </b>' . $institution->state . '</br>';
                        echo '<b>Country: </b>' . $institution->country . '</br>';
                        echo '<b>Start Date: </b>' . $institution->start_date . '</br>';
                        echo '<b>End Date: </b>' . $institution->end_date . '</br>';
                        echo '<b>Degree Earned: </b>' . $institution->degree_earned . '</br>';
                        echo '<b>Degree Date: </b>' . $institution->degree_date . '</br>';
                        echo '<b>Overall GPA: </b>' . $institution->overall_gpa . '</br>';
                        echo '<b>Major GPA: </b>' . $institution->major_gpa . '</br>';
                        echo '<b>GPA Scale: </b>' . $institution->gpa_scale . '</br></br>';
                        
                        echo'<div class="x_content">
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#educationalbackground" id="edit_educational_background">Edit</button>
                        </div>';
                      }
                      else{
                        echo 'No Institutions Listed';
                      }
                    }
                  } else {
                    echo 'No Institutions Listed';
                  }
                ?>
              </p>
              <p>
              </div>
              </p>
            </div>
          </div>
        </div>
  
        <div class="clearfix"></div>
  
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel tile">
      <div class="x_title">
        <h2>Travel Expenses Over Time</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <canvas id="travelExpenseCanvas" width="100" height="30">
        <script>
          $(document).ready(function() {
            $.getJSON("<?= base_url('analytics/traineeTravelExpenseOverTime/' . $trainee->id) ?>", function(jsonData) {
          		if(jsonData != '' && jsonData.success == true) {
          		  if(jsonData.dates.length > 1) {
  	          		var ctx = $("#travelExpenseCanvas");
  			  				//draw
  			  				
  			  				var data = {
                    labels: jsonData.dates,
                    datasets: [
                    {
                        label: "Total Travel Expenses Over Time",
                        fill: false,
                        backgroundColor: "rgba(0,0,0,0.4)",
                        borderColor: "rgba(0,0,0,1)",
                        pointBorderColor: "rgba(0,0,0,1)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(0,0,0,1)",
                        pointHoverBorderColor: "rgba(0,0,0,1)",
                        pointHoverBorderWidth: 2,
            
                        // The actual data
                        data: jsonData.totalCost,
            
                        // String - If specified, binds the dataset to a certain y-axis. If not specified, the first y-axis is used. First id is y-axis-0
                        yAxisID: "y-axis-0",
                      }
    			  				]
  			  				};
  			        	var myLineChart = new Chart(ctx,{
  							    type: 'line',
  							    data: data,
  							    options: {
  							      scales: {
  							        xAxes: [{type:"time","id":"x-axis-1"}]
  							      },
  							      elements: {
  							        line: {
  							          tension: 0
  							        }
  							      },
  							      legend: {
  							        display: false
  							      }
  							    }
  								});
          		  } else {
            			$("#travelExpenseCanvas").parent().append(jsonData.dates[0] + ": $" + jsonData.totalCost);
            			$("#travelExpenseCanvas").remove();
          		  }
          		} else {
          			$("#travelExpenseCanvas").parent().append("No Travel Data to Show");
          			$("#travelExpenseCanvas").remove();
          		}
          	});
          })
        </script>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bs-example-modal-sm" id="Legalname" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel2">Edit Trainee Profile</h4>
</div>
<div class="modal-body">
  <h4></h>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="legal_first_name_input"> Legal First Name<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="legal_first_name_input" name="legal_first_name" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->legal_first_name) ? $trainee->legal_first_name : '' ?>">
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="legal_middle_name_input"> Legal Middle Name<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="legal_middle_name_input" name="legal_middle_name" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->legal_middle_name) ? $trainee->legal_middle_name : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="legal_family_name_input"> Legal Family Name<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="legal_family_name_input" name="legal_family_name" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->legal_family_name) ? $trainee->legal_family_name : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_input"> Email Address<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="email_input" name="email_address" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->email_address) ? $trainee->email_address : '' ?>">
    </div>
  </div>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id="save_name">Save changes</button>
</div>

    </div>
  </div>
</div>

<!--Mailing Address Modal-->
<div class="modal fade bs-example-modal-sm" id="mailingaddress" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel2">Edit Trainee Profile</h4>
</div>
<div class="modal-body">
  <h4></h>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mailing_address_input"> Mailing Address Line 1<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="mailing_address_input" name="mailing_address" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->mailing_address->address_line_1) ? $trainee->mailing_address->address_line_1 : '' ?>">
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mailing_address2_input"> Mailing Address Line 2<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="mailing_address2_input" name="mailing_address" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->mailing_address->address_line_2) ? $trainee->mailing_address->address_line_2 : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city_input"> City<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="city_input" name="city" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->mailing_address->address_city) ? $trainee->mailing_address->address_city : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state_input"> State<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="state_input" name="state" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->mailing_address->address_state) ? $trainee->mailing_address->address_state : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="zipcode_input"> Zipcode<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="zipcode_input" name="zipcode" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->mailing_address->address_zip) ? $trainee->mailing_address->address_zip : '' ?>">
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id="save_mail_address">Save changes</button>
</div>

    </div>
  </div>
</div>

<!--Permanent Address-->
<div class="modal fade bs-example-modal-sm" id="permanentaddress" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel2">Edit Trainee Profile</h4>
</div>
<div class="modal-body">
  <h4></h>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mailing_address_input"> Permanent Address Line 1<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="permanent_address_input" name="mailing_address" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->permanent_address->address_line_1) ? $trainee->permanent_address->address_line_1 : '' ?>">
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mailing_address2_input"> Permanent Address Line 2<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="permanent_address2_input" name="mailing_address2" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->permanent_address->address_line_2) ? $trainee->permanent_address->address_line_2 : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city_input"> City<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="permanent_city_input" name="city" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->permanent_address->address_city) ? $trainee->permanent_address->address_city : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state_input"> State<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="permanent_state_input" name="state" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->permanent_address->address_state) ? $trainee->permanent_address->address_state : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="zipcode_input"> Zipcode<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="permanent_zipcode_input" name="zipcode" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->permanent_address->address_zip) ? $trainee->permanent_address->address_zip : '' ?>">
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id="save_perm_address">Save changes</button>
</div>

    </div>
  </div>
</div>

<!--Birth and Citizenship-->
<div class="modal fade bs-example-modal-sm" id="birthandcitizenship" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel2">Edit Trainee Profile</h4>
</div>
<div class="modal-body">
  <h4></h>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-date_of_birth_input"> Date of Birth<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="date_of_birth_input" name="date_of_birth" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->date_of_birth) ? $trainee->date_of_birth : '' ?>">
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-state_of_birth_input"> State of Birth<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="state_of_birth_input" name="state_of_birth" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->state_of_birth) ? $trainee->state_of_birth : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-city_of_birth_input"> City of Birth<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="city_of_birth_input" name="city_of_birth" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->city_of_birth) ? $trainee->city_of_birth : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-us_citizen_input"> US Citizen (Yes = 1; No = 0)<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="us_citizen_input" name="us_citizen" class="form-control col-md-7 col-xs-12" value="<?= $trainee->us_citizen?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permanent_resident_of_the_us_input"> Permanent Resident of the US (Yes = 1; No = 0)<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="permanent_resident_of_the_us_input" name="permanent_resident_of_the_us" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->resident_status->us_permanent_resident) ? $trainee->resident_status->us_permanent_resident : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="missouri_resident_input"> Missouri Resident (Yes = 1; No = 0)<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="missouri_resident_input" name="missouri_resident" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->missouri_resident) ? $trainee->missouri_resident : '' ?>">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="veteran_of_the_us_armed_forces_input"> Veteran of the U.S. Armed Forces (Yes = 1; No = 0)<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="veteran_of_the_us_armed_forces_input" name="veteran_of_the_us_armed_forces" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->us_af_veteran) ? $trainee->us_af_veteran : '' ?>">
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id='save_birth_citizenship'>Save changes</button>
</div>

    </div>
  </div>
</div>

<!--Gender and Ethnicity-->
<div class="modal fade bs-example-modal-sm" id="genderandethnicity" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel2">Edit Trainee Profile</h4>
</div>
<div class="modal-body">
  <h4></h>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender_input"> Gender<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gender_input" name="gender" class="form-control col-md-7 col-xs-12" value = "<?= ucfirst($trainee->gender) ?>">
      </div>
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id="save_gender_ethnicity">Save changes</button>
</div>

    </div>
  </div>
</div>

<!--Admissions Information-->
<div class="modal fade bs-example-modal-sm" id="admissionsinformation" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel2">Edit Trainee Profile</h4>
</div>
<div class="modal-body">
  <h4></h>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="graduateprogram_input"> Graduate Program<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="graduateprogram_input" name="graduate_program" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->graduate_program) ? $trainee->graduate_program : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="attendencestatus_input"> Attendance Status(Full-Time/Part-Time)<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="attendencestatus_input" name="attendence_status" class="form-control col-md-7 col-xs-12" value = 
          <?php 
            if($trainee->attendence_status) {
              if($trainee->attendence_status == "full-time"){
                echo "Full-Time";
              }
              else if($trainee->attendence_status == "part-time"){
                echo "Part-Time";
              }
            }?> 
        >
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="assistantshipinterest_input"> Assistantship/Fellowship Interest (Yes = 1; No = 0)<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="assistantshipinterest_input" name="assistantship_interest" class="form-control col-md-7 col-xs-12" value = "<?= isset($trainee->assistantship_interest) ? $trainee->assistantship_interest : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="expectedentranceterm_input"> Expected Entrance Term<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="expectedentranceterm_input" name="expected_entrance_term" class="form-control col-md-7 col-xs-12" value = "<?= $trainee->expected_entrance_term?>">
      </div>
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id="save_admission_info">Save changes</button>
</div>

    </div>
  </div>
</div>

<!--Test Scores-->
<div class="modal fade bs-example-modal-sm" id="testscores" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel2">Edit Trainee Profile</h4>
</div>
<div class="modal-body">
  <h4></h>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatdate"> GMAT Date<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatdate_input" name="gmatdate" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_date) ? $trainee->testScore->gmat_date : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatscore"> GMAT Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatscore_input" name="gmatscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_score) ? $trainee->testScore->gmat_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatverbalscore"> GMAT Verbal Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatverbalscore_input" name="gmatverbalscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_verbal_score) ? $trainee->testScore->gmat_verbal_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatverbalpercentile"> GMAT Verbal Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatverbalpercentile_input" name="gmatverbalpercentile" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_verbal_percentile) ? $trainee->testScore->gmat_verbal_percentile : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatquantscore"> GMAT Quantitative Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatquantscore_input" name="gmatquantscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_quantitative_score) ? $trainee->testScore->gmat_quantitative_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatquantpercentile"> GMAT Quantitative Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatquantpercentile_input" name="gmatquantpercentile" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_quantitative_percentile) ? $trainee->testScore->gmat_quantitative_percentile : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatAWscore"> GMAT Analytical Writing Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatAWscore_input" name="gmatAWscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_analytical_writing_score) ? $trainee->testScore->gmat_analytical_writing_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatAWpercentile"> GMAT Analytical Writing Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatAWpercentile_input" name="gmatAWpercentile" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_analytical_writing_percentile) ? $trainee->testScore->gmat_analytical_writing_percentile : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatIRscore"> GMAT Integrated Reasoning Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatIRscore_input" name="gmatIRscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_integrated_reasoningl_score) ? $trainee->testScore->gmat_integrated_reasoningl_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatIRpercentile"> GMAT Integrated Reasoning Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatIRpercentile_input" name="gmatIRpercentile" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gmat_integrated_reasoning_percentile) ? $trainee->testScore->gmat_integrated_reasoning_percentile : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gredate"> GRE Date<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gredate_input" name="gredate" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gre_date) ? $trainee->testScore->gre_date : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="greverbalscore"> GRE Verbal Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="greverbalscore_input" name="greverbalscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gre_verbal_score) ? $trainee->testScore->gre_verbal_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="greverbalpercentile"> GRE Verbal Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="greverbalpercentile_input" name="greverbalpercentile" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gre_verbal_percentile) ? $trainee->testScore->gre_verbal_percentile : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="grequantscore"> GRE Quantitative Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="grequantscore_input" name="grequantscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gre_quantitative_score) ? $trainee->testScore->gre_quantitative_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="grequantpercentile"> GRE Quantitative Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="grequantpercentile_input" name="grequantpercentile" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gre_quantitative_percentile) ? $trainee->testScore->gre_quantitative_percentile : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="greAWscore"> GRE Analytical Writing Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="greAWscore_input" name="greAWscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gre_analytical_writing_score) ? $trainee->testScore->gre_analytical_writing_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="greAWpercentile"> GRE Analytical Writing Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="greAWpercentile_input" name="greAWpercentile" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->gre_analytical_writing_percentile) ? $trainee->testScore->gre_analytical_writing_percentile : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="toefldate"> TOEFL Date<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="toefldate_input" name="toefldate" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->toefl_date) ? $trainee->testScore->toefl_date : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="toeflscore"> TOEFL Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="toeflscore_input" name="toeflscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->toefl_score) ? $trainee->testScore->toefl_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibtreading"> IBT Reading<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ibtreading_input" name="ibtreading" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ibt_reading) ? $trainee->testScore->ibt_reading : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibtwriting"> IBT Writing<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ibtwriting_input" name="ibtwriting" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ibt_writing) ? $trainee->testScore->ibt_writing : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibtspeaking"> IBT Speaking<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ibtspeaking_input" name="ibtspeaking" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ibt_speaking) ? $trainee->testScore->ibt_speaking : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibtlistening"> IBT Listening<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ibtlistening_input" name="ibtlistening" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ibt_listening) ? $trainee->testScore->ibt_listening : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pbreading"> PB Reading<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="pbreading_input" name="pbreading" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->pb_reading) ? $trainee->testScore->pb_reading : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pbwriting"> PB Writing<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="pbwriting_input" name="pbwriting" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->pb_writing) ? $trainee->testScore->pb_writing : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pblistening"> PB Listening<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="pblistening_input" name="pblistening" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->pb_listening) ? $trainee->testScore->pb_listening : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pbessay"> PB Essay<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="pbessay_input" name="pbessay" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->pb_essay) ? $trainee->testScore->pb_essay : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltsdate"> IELTS Date<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltsdate_input" name="ieltsdate" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ielts_date) ? $trainee->testScore->ielts_date : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltsscore"> IELTS Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltsscore_input" name="ieltsscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ielts_score) ? $trainee->testScore->ielts_score : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltsreading"> IELTS Reading<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltsreading_input" name="ieltsreading" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ielts_reading) ? $trainee->testScore->ielts_reading : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltswriting"> IELTS Writing<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltswriting_input" name="ieltswriting" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ielts_writing) ? $trainee->testScore->ielts_writing : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltsspeaking"> IELTS Speaking<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltsspeaking_input" name="ieltsspeaking" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ielts_speaking) ? $trainee->testScore->ielts_speaking : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltslistening"> IELTS Listening<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltslistening_input" name="ieltslistening" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->ielts_listening) ? $trainee->testScore->ielts_listening : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matdate"> MAT Date<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="matdate_input" name="matdate" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->mat_date) ? $trainee->testScore->mat_date : '' ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matscore"> MAT Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="matscore_input" name="matscore" class="form-control col-md-7 col-xs-12" value="<?= isset($trainee->testScore->mat_score) ? $trainee->testScore->mat_score : '' ?>">
      </div>
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id="save_test_scores">Save changes</button>
</div>

    </div>
  </div>
</div>

<!--Educational Background-->
<div class="modal fade bs-example-modal-sm" id="educationalbackground" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel2">Edit Trainee Profile</h4>
</div>
<div class="modal-body">
  <h4></h>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Name</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_name_input" name="name" class="form-control col-md-7 col-xs-12" value="<?= $institution->name ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city"> City</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_city_input" name="city" class="form-control col-md-7 col-xs-12" value="<?= $institution->city ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state"> State</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_state_input" name="state" class="form-control col-md-7 col-xs-12" value="<?= $institution->state ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Country</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_country_input" name="country" class="form-control col-md-7 col-xs-12" value="<?= $institution->country ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="startdate"> Start Date</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_startdate_input" name="startdate" class="form-control col-md-7 col-xs-12" value="<?= $institution->start_date ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="enddate"> End Date</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_enddate_input" name="enddate" class="form-control col-md-7 col-xs-12" value="<?= $institution->end_date ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="degreeearned"> Degree Earned</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_degreeearned_input" name="degreeearned" class="form-control col-md-7 col-xs-12" value="<?= $institution->degree_earned ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="degreedate"> Degree Date</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_degreedate_input" name="degreedate" class="form-control col-md-7 col-xs-12" value="<?= $institution->degree_date ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="overallgpa"> Overall GPA</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_overallgpa_input" name="overallgpa" class="form-control col-md-7 col-xs-12" value="<?= $institution->overall_gpa ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="majorgpa"> Major GPA</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_majorgpa_input" name="majorgpa" class="form-control col-md-7 col-xs-12" value="<?= $institution->major_gpa ?>">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gpascale"> GPA Scale</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="eb_gpascale_input" name="gpascale" class="form-control col-md-7 col-xs-12"value="<?= $institution->gpa_scale ?>">
      </div>
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id='save_educational_background'>Save changes</button>
</div>

    </div>
  </div>
</div>
<!-- /modals -->

<script>
/* global $ */

  $(document).ready(function() {
    var trainee_id = '<?= $trainee->id ?>';
    
    $("#save_name").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/save_name") ?>'  + '/' 
      + encodeURIComponent($('#legal_first_name_input').val() != '' ? $('#legal_first_name_input').val() : 'null') + '/' 
      + encodeURIComponent($('#legal_middle_name_input').val() != '' ? $('#legal_middle_name_input').val() : 'null')+ '/' 
      + encodeURIComponent($('#legal_family_name_input').val() != '' ? $('#legal_family_name_input').val() : 'null')+ '/' 
      + encodeURIComponent($('#email_input').val() != '' ? $('#email_input').val() : 'null')+ '/' + trainee_id;
    });
    
    $("#save_perm_address").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/save_perm_address") ?>'  + '/' 
      + encodeURIComponent($('#permanent_address_input').val() != '' ? $('#permanent_address_input').val() : 'null')+ '/' 
      + encodeURIComponent($('#permanent_address2_input').val() != '' ? $('#permanent_address2_input').val() : 'null')+ '/' 
      + encodeURIComponent($('#permanent_city_input').val() != '' ? $('#permanent_city_input').val() : 'null')+ '/' 
      + encodeURIComponent($('#permanent_state_input').val() != '' ? $('#permanent_state_input').val() : 'null')+ '/'
      + encodeURIComponent($('#permanent_zipcode_input').val() != '' ? $('#permanent_zipcode_input').val() : 'null')+ '/' + trainee_id;
    });
    
    $("#save_mail_address").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/save_mail_address") ?>'  + '/' 
      + encodeURIComponent($('#mailing_address_input').val() != '' ? $('#mailing_address_input').val() : 'null')+ '/' 
      + encodeURIComponent($('#mailing_address2_input').val() != '' ? $('#mailing_address2_input').val() : 'null')+ '/' 
      + encodeURIComponent($('#city_input').val() != '' ? $('#city_input').val() : 'null')+ '/' 
      + encodeURIComponent($('#state_input').val() != '' ? $('#state_input').val() : 'null')+ '/'
      + encodeURIComponent($('#zipcode_input').val() != '' ? $('#zipcode_input').val() : 'null')+ '/' + trainee_id;
    });
    
    $("#save_gender_ethnicity").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/save_gender_ethnicity") ?>'  + '/' 
      + encodeURIComponent($('#gender_input').val() != '' ? $('#gender_input').val() : 'null') + '/' + trainee_id;
    });
    
    $("#save_admission_info").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/save_admissions_info") ?>'  + '/' 
      + encodeURIComponent($('#graduateprogram_input').val() != '' ? $('#graduateprogram_input').val() : 'null') + '/' 
      + encodeURIComponent($('#attendencestatus_input').val() != '' ? $('#attendencestatus_input').val() : 'null') + '/' 
      + encodeURIComponent($('#assistantshipinterest_input').val() != '' ? $('#assistantshipinterest_input').val() : 'null') + '/'
      + encodeURIComponent($('#expectedentranceterm_input').val() != '' ? $('#expectedentranceterm_input').val() : 'null') + '/'+ trainee_id;
    });
    
    $("#save_birth_citizenship").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/save_birth_citizenship") ?>'  + '/' 
      + encodeURIComponent($('#data_of_birth_input').val() != '' ? $('#data_of_birth_input').val() : 'null') + '/' 
      + encodeURIComponent($('#state_of_birth_input').val() != '' ? $('#state_of_birth_input').val() : 'null') + '/' 
      + encodeURIComponent($('#city_of_birth_input').val() != '' ? $('#city_of_birth_input').val() : 'null') + '/' 
      + encodeURIComponent($('#us_citizen_input').val() != '' ? $('#us_citizen_input').val() : 'null') + '/'
      + encodeURIComponent($('#permanent_resident_of_the_us_input').val() != '' ? $('#permanent_resident_of_the_us_input').val() : 'null') + '/'
      + encodeURIComponent($('#missouri_resident_input').val() != '' ? $('#missouri_resident_input').val() : 'null') + '/'
      + encodeURIComponent($('#veteran_of_the_us_armed_forces_input').val() != '' ? $('#veteran_of_the_us_armed_forces_input').val() : 'null') + '/' + trainee_id;
    });
    
    $("#save_test_scores").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/save_test_scores") ?>'  + '/' 
      + encodeURIComponent($('#gmatdate_input').val() != '' ? $('#gmatdate_input').val() : 'null') + '/' 
      + encodeURIComponent($('#gmatscore_input').val() != '' ? $('#gmatscore_input').val() : 'null') + '/' 
      + encodeURIComponent($('#gmatverbalscore_input').val() != '' ? $('#gmatverbalscore_input').val() : 'null') + '/' 
      + encodeURIComponent($('#gmatverbalpercentile_input').val() != '' ? $('#gmatverbalpercentile_input').val() : 'null') + '/'
      + encodeURIComponent($('#gmatquantscore_input').val() != '' ? $('#gmatquantscore_input').val() : 'null') + '/'
      + encodeURIComponent($('#gmatquantpercentile_input').val() != '' ? $('#gmatquantpercentile_input').val() : 'null') + '/' 
      + encodeURIComponent($('#gmatAWscore_input').val() != '' ? $('#gmatAWscore_input').val() : 'null') + '/' 
      + encodeURIComponent($('#gmatAWpercentile_input').val() != '' ? $('#gmatAWpercentile_input').val() : 'null') + '/' 
      + encodeURIComponent($('#gmatIRscore_input').val() != '' ? $('#gmatIRscore_input').val() : 'null') + '/'
      + encodeURIComponent($('#gmatIRpercentile_input').val() != '' ? $('#gmatIRpercentile_input').val() : 'null') + '/'
      + encodeURIComponent($('#gredate_input').val() != '' ? $('#gredate_input').val() : 'null') + '/' 
      + encodeURIComponent($('#greverbalscore_input').val() != '' ? $('#greverbalscore_input').val() : 'null') + '/' 
      + encodeURIComponent($('#greverbalpercentile_input').val() != '' ? $('#greverbalpercentile_input').val() : 'null') + '/' 
      + encodeURIComponent($('#grequantscore_input').val() != '' ? $('#grequantscore_input').val() : 'null') + '/'
      + encodeURIComponent($('#grequantpercentile_input').val() != '' ? $('#grequantpercentile_input').val() : 'null') + '/'
      + encodeURIComponent($('#greAWscore_input').val() != '' ? $('#greAWscore_input').val() : 'null') + '/' 
      + encodeURIComponent($('#greAWpercentile_input').val() != '' ? $('#greAWpercentile_input').val() : 'null') + '/' 
      + encodeURIComponent($('#toefldate_input').val() != '' ? $('#toefldate_input').val() : 'null') + '/' 
      + encodeURIComponent($('#toeflscore_input').val() != '' ? $('#toeflscore_input').val() : 'null') + '/'
      + encodeURIComponent($('#ibtreading_input').val() != '' ? $('#ibtreading_input').val() : 'null') + '/'
      + encodeURIComponent($('#ibtwriting_input').val() != '' ? $('#ibtwriting_input').val() : 'null') + '/'
      + encodeURIComponent($('#ibtlistening_input').val() != '' ? $('#ibtlistening_input').val() : 'null') + '/'
      + encodeURIComponent($('#ibtspeaking_input').val() != '' ? $('#ibtspeaking_input').val() : 'null') + '/' 
      + encodeURIComponent($('#pbreading_input').val() != '' ? $('#pbreading_input').val() : 'null') + '/' 
      + encodeURIComponent($('#pbwriting_input').val() != '' ? $('#pbwriting_input').val() : 'null') + '/' 
      + encodeURIComponent($('#pblistening_input').val() != '' ? $('#pblistening_input').val() : 'null') + '/'
      + encodeURIComponent($('#pbessay_input').val() != '' ? $('#pbessay_input').val() : 'null') + '/'
      + encodeURIComponent($('#ieltsdate_input').val() != '' ? $('#ieltsdate_input').val() : 'null') + '/' 
      + encodeURIComponent($('#ieltsscore_input').val() != '' ? $('#ieltsscore_input').val() : 'null') + '/' 
      + encodeURIComponent($('#ieltsreading_input').val() != '' ? $('#ieltsreading_input').val() : 'null') + '/' 
      + encodeURIComponent($('#ieltswriting_input').val() != '' ? $('#ieltswriting_input').val() : 'null') + '/'
      + encodeURIComponent($('#ieltslistening_input').val() != '' ? $('#ieltslistening_input').val() : 'null') + '/'
      + encodeURIComponent($('#ieltsspeaking_input').val() != '' ? $('#ieltsspeaking_input').val() : 'null') + '/' 
      + encodeURIComponent($('#matdate_input').val() != '' ? $('#matdate_input').val() : 'null') + '/' 
      + encodeURIComponent($('#matscore_input').val() != '' ? $('#matscore_input').val() : 'null')
      + '/' + trainee_id;
    });
    
    $("#save_educational_background").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/save_educational_background") ?>'  + '/'
      + encodeURIComponent($('#eb_name_input').val() != '' ? $('#eb_name_input').val() : 'null') + '/'  
      + encodeURIComponent($('#eb_city_input').val() != '' ? $('#eb_city_input').val() : 'null') + '/' 
      + encodeURIComponent($('#eb_state_input').val() != '' ? $('#eb_state_input').val() : 'null') + '/'
      + encodeURIComponent($('#eb_country_input').val() != '' ? $('#eb_country_input').val() : 'null') + '/'
      + encodeURIComponent($('#eb_startdate_input').val() != '' ? $('#eb_startdate_input').val() : 'null') + '/' 
      + encodeURIComponent($('#eb_enddate_input').val() != '' ? $('#eb_enddate_input').val() : 'null') + '/' 
      + encodeURIComponent($('#eb_degreeearned_input').val() != '' ? $('#eb_degreeearned_input').val() : 'null') + '/' 
      + encodeURIComponent($('#eb_degreedate_input').val() != '' ? $('#eb_degreedate_input').val() : 'null') + '/'
      + encodeURIComponent($('#eb_overallgpa_input').val() != '' ? $('#eb_overallgpa_input').val() : 'null') + '/'
      + encodeURIComponent($('#eb_majorgpa_input').val() != '' ? $('#eb_majorgpa_input').val() : 'null') + '/'
      + encodeURIComponent($('#eb_gpascale_input').val() != '' ? $('#eb_gpascale_input').val() : 'null')
      + '/' + trainee_id;
    });
    
  });
</script>
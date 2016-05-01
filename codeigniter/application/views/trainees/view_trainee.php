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
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Legalname">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="mailing_address">
              <p class="lead">Mailing Address</p>
            <?php if($trainee->mailing_address != null): ?>
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
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mailingaddress">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="permanent_address">
              <p class="lead">Permanent Address</p>
            <?php if($trainee->permanent_address != null): ?>
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
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#permanentaddress">Edit</button>
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
            <?php if($trainee->us_citizen != '0' && $trainee->resident_status != null): ?>
              <p>
                <b>Permanent Resident of U.S. </b><?= $trainee->resident_status->us_permanent_resident != '0' ? 'Yes' : 'No' ?>
              </p>
              <?php if($trainee->resident_status->us_permanent_resident == '0'): ?>
                <p>
                  <b>Visa Status: </b><?= $trainee->resident_status->visa_status != null ? $trainee->resident_status->visa_status : $trainee->resident_status->visa_status_other ?>
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
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#birthandcitizenship">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="gender_and_ethnicity">
              <p class="lead">Gender and Ethnicity</p>
              <p>
                <b>Gender: </b><?= $trainee->gender != null ? ucfirst($trainee->gender) : 'No Gender Listed' ?>
              </p>
              <p>
                <b>Ethnicity: </b>
                <?php 
                  if($trainee->ethnicities != null && is_array($trainee->ethnicities)) {
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
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#genderandethnicity">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="admissions_information">
              <p class="lead">Admissions Information</p>
              <p>
                <b>Graduate Program: </b><?= $trainee->graduate_program != null ? $trainee->graduate_program : 'No Graduate Program Listed' ?>
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
                <b>Expected Term of Entrance: </b><?= $trainee->expected_entrance_term != null ? $trainee->expected_entrance_term : 'No Expected Entrance Term Listed' ?>
              </p>
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#admissionsinformation">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="test_scores">
              <p class="lead">Test Scores</p>
              <p>
                <b><u>GMAT: </u></b></br>
                <b>Date: </b><?= $trainee->testScore->gmat_date ?></br>
                <b>Score: </b><?= $trainee->testScore->gmat_score ?></br>
                <b>Verbal Score: </b><?= $trainee->testScore->gmat_verbal_score ?></br>
                <b>Verbal Percentile: </b><?= $trainee->testScore->gmat_verbal_percentile ?></br>
                <b>Quantitative Score: </b><?= $trainee->testScore->gmat_quantitative_score ?></br>
                <b>Quantitative Percentile: </b><?= $trainee->testScore->gmat_quantitative_percentile ?></br>
                <b>Analytical Writing Score: </b><?= $trainee->testScore->gmat_analytical_writing_score ?></br>
                <b>Analytical Writing Percentile: </b><?= $trainee->testScore->gmat_analytical_writing_percentile ?></br>
                <b>Integrated_reasoning Score: </b><?= $trainee->testScore->gmat_integrated_reasoningl_score ?></br>
                <b>Integrated Reasoning Percentile: </b><?= $trainee->testScore->gmat_integrated_reasoning_percentile ?></br>
              <p>
                <b><u>GRE: </u></b></br>
                <b>Date: </b><?= $trainee->testScore->gre_date ?></br>
                <b>Verbal Score: </b><?= $trainee->testScore->gre_verbal_score ?></br>
                <b>Verbal Percentile: </b><?= $trainee->testScore->gre_verbal_percentile ?></br>
                <b>Quantitative Score: </b><?= $trainee->testScore->gre_quantitative_score ?></br>
                <b>Quantitative Percentile: </b><?= $trainee->testScore->gre_quantitative_percentile ?></br>
                <b>Analytical Writing Score: </b><?= $trainee->testScore->gre_analytical_writing_score ?></br>
                <b>Analytical Writing Percentile: </b><?= $trainee->testScore->gre_analytical_writing_percentile ?></br>
              </p>
              <p>
                <b><u>TOEFL: </u></b></br>
                <b>Date: </b><?= $trainee->testScore->toefl_date ?></br>
                <b>Score: </b><?= $trainee->testScore->toefl_score ?></br>
              </p>
              <p>
                <b><u>IBT:</u></b></br>
                <b>Reading: </b><?= $trainee->testScore->ibt_reading ?></br>
                <b>Writing: </b><?= $trainee->testScore->ibt_writing ?></br>
                <b>Speaking: </b><?= $trainee->testScore->ibt_speaking ?></br>
                <b>Listening: </b><?= $trainee->testScore->ibt_listening ?></br>
              </p>
              <p>
                <b><u>PB: </u></b></br>
                <b>Reading: </b><?= $trainee->testScore->pb_reading ?></br>
                <b>Writing: </b><?= $trainee->testScore->pb_writing ?></br>
                <b>Listening: </b><?= $trainee->testScore->pb_listening ?></br>
                <b>Essay: </b><?= $trainee->testScore->pb_essay ?></br>
              </p>
              <p>
                <b><u>IELTS: </u></b></br>
                <b>Date: </b><?= $trainee->testScore->ielts_date ?></br>
                <b>Score: </b><?= $trainee->testScore->ielts_score ?></br>
                <b>Reading: </b><?= $trainee->testScore->ielts_reading ?></br>
                <b>Writing: </b><?= $trainee->testScore->ielts_writing ?></br>
                <b>Speaking: </b><?= $trainee->testScore->ielts_speaking ?></br>
                <b>Listening: </b><?= $trainee->testScore->ielts_listening ?></br>
              </p>
              <p>
                <b><u>MAT: </u></b></br>
                <b>Date: </b><?= $trainee->testScore->mat_date ?></br>
                <b>Score: </b><?= $trainee->testScore->mat_score ?></br>
              </p>
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#testscores">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="educational_background">
              <p class="lead">Educational Background</p>
              <p>
                <?php 
                  if($trainee->institutions != null && is_array($trainee->institutions)) {
                    foreach($trainee->institutions as $institution) {
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
                    }
                  } else {
                    echo 'No Institutions Listed';
                  }
                ?>
              </p>
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#educationalbackground">Edit</button>
                </div>
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
          		if(jsonData != null && jsonData.success == true) {
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
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel tile">
      <div class="x_title">
        <h2>Output of $trainee</h2>
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
        <?php
          var_dump($trainee);
        ?>
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
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Legal First Name<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="legal_family_name_input" name="legal_family_name" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Legal Middle Name<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="legal_family_name_input" name="legal_family_name" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Legal Family Name<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="legal_family_name_input" name="legal_family_name" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Other Names<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="legal_family_name_input" name="legal_family_name" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Email Address<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="description_input" name="description_input" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
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
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mailing Address Line 1<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="mailing_address" name="mailing_address" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mailing Address Line 2<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="mailing_address" name="mailing_address" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> City, State, Zipcode<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="city_state_zipcode" name="city_state_zipcode" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
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
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Permanent Address Line 1<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="mailing_address" name="mailing_address" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Permanent Address Line 2<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="mailing_address" name="mailing_address" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> City, State, Zipcode<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="city_state_zipcode" name="city_state_zipcode" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
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
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Date of Birth<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="date_of_birth" name="date_of_birth" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> State of Birth<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="state_of_birth" name="state_of_birth" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> City of Birth<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="city_of_birth" name="city_of_birth" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> US Citizen<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="us_citizen" name="us_citizen" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Permanent Resident of the US<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="permanent_resident_of_the_us" name="permanent_resident_of_the_us" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Visa Status<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="visa_status" name="visa_status" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Missouri Resident<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="missouri_resident" name="missouri_resident" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Veteran of the U.S. Armed Forces<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="veteran_of_the_us_armed_forces" name="veteran_of_the_us_armed_forces" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
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
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender"> Gender<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gender" name="gender" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ethnicity"> Ethnicity<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="ethnicity" name="ethnicity" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
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
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="graduate_program"> Graduate Program<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="graduate_program" name="graduate_program" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="attendence_status"> Attendance Status<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="attendence_status" name="attendence_status" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="assistantship_interest"> Assistantship/Fellowship Interest<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="assistantship_interest" name="assistantship_interest" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="expected_entrance_term"> Expected Entrance Term<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="expected_entrance_term" name="expected_entrance_term" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
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
        <input type="text" id="gmatdate" name="gmatdate" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatscore"> GMAT Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatscore" name="gmatscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatverbalscore"> GMAT Verbal Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatverbalscore" name="gmatverbalscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatverbalpercentile"> GMAT Verbal Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatverbalpercentile" name="gmatverbalpercentile" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatquantscore"> GMAT Quantitative Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatquantscore" name="gmatquantscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatquantpercentile"> GMAT Quantitative Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatquantpercentile" name="gmatquantpercentile" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatAWscore"> GMAT Analytical Writing Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatAWscore" name="gmatAWscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatAWpercentile"> GMAT Analytical Writing Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatAWpercentile" name="gmatAWpercentile" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatIRscore"> GMAT Integrated Reasoning Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatIRscore" name="gmatIRscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmatIRpercentile"> GMAT Integrated Reasoning Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gmatIRpercentile" name="gmatIRpercentile" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gredate"> GRE Date<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gredate" name="gredate" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="greverbalscore"> GRE Verbal Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="greverbalscore" name="greverbalscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="greverbalpercentile"> GRE Verbal Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="greverbalpercentile" name="greverbalpercentile" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="grequantscore"> GRE Quantitative Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="grequantscore" name="grequantscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="grequantpercentile"> GRE Quantitative Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="grequantpercentile" name="grequantpercentile" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="greAWscore"> GRE Analytical Writing Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="greAWscore" name="greAWscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="greAWpercentile"> GRE Analytical Writing Percentile<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="greAWpercentile" name="greAWpercentile" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="toefldate"> TOEFL Date<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="toefldate" name="toefldate" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="toeflscore"> TOEFL Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="toeflscore" name="toeflscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibtreading"> IBT Reading<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ibtreading" name="ibtreading" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibtwriting"> IBT Writing<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ibtwriting" name="ibtwriting" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibtspeaking"> IBT Speaking<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ibtspeaking" name="ibtspeaking" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibtlistening"> IBT Listening<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ibtlistening" name="ibtlistening" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pbreading"> PB Reading<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="pbreading" name="pbreading" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pbwriting"> PB Writing<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="pbwriting" name="pbwriting" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pblistening"> PB Listening<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="pblistening" name="pblistening" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pbessay"> PB Essay<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="pbessay" name="pbessay" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltsdate"> IELTS Date<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltsdate" name="ieltsdate" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltsscore"> IELTS Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltsscore" name="ieltsscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltsreading"> IELTS Reading<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltsreading" name="ieltsreading" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltswriting"> IELTS Writing<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltswriting" name="ieltswriting" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltsspeaking"> IELTS Speaking<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltsspeaking" name="ieltsspeaking" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ieltslistening"> IELTS Listening<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ieltslistening" name="ieltslistening" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matdate"> MAT Date<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="matdate" name="matdate" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matscore"> MAT Score<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="matscore" name="matscore" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
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
        <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city"> City</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="city" name="city" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state"> State</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="state" name="state" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Country</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="country" name="country" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="startdate"> Start Date</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="startdate" name="startdate" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="enddate"> End Date</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="enddate" name="enddate" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="degreeearned"> Degree Earned</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="degreeearned" name="degreeearned" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="degreedate"> Degree Date</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="degreedate" name="degreedate" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="overallgpa"> Overall GPA</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="overallgpa" name="overallgpa" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="majorgpa"> Major GPA</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="majorgpa" name="majorgpa" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gpascale"> GPA Scale</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="gpascale" name="gpascale" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
</div>

    </div>
  </div>
</div>

<!-- /modals -->
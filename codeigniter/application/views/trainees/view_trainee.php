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
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mailingaddress">Edit</button>
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
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mailingaddress">Edit</button>
                </div>
              </p>
            </div>
            <div class="tab-pane" id="test_scores">
              <p class="lead">Test Scores</p>
              <p>
                <b>GMAT: </b>
              </p>
              <b>Date: </b><?= $trainee->testScore->gmat_date ?>
              <b>Score: </b><?= $trainee->testScore->gmat_score ?>
              <b>Verbal Score: </b><?= $trainee->testScore->gmat_verbal_score ?>
              <b>Verbal Percentile: </b><?= $trainee->testScore->gmat_verbal_percentile ?>
              <b>Quantitative Score: </b><?= $trainee->testScore->gmat_quantitative_score ?>
              <p>
               if($trainee->testScore->gmat_quantitative_percentile != NULL){
                 <?= $trainee->testScore->gmat_quantitative_percentile ?>
               }
              </p>
              <p>
               if($trainee->testScore->gmat_analytical_writing_score != NULL){
                 <?= $trainee->testScore->gmat_analytical_writing_score ?>
               }
              </p>
              <p>
               if($trainee->testScore->gmat_analytical_writing_percentile != NULL){
                 <?= $trainee->testScore->gmat_analytical_writing_percentile ?>
               }
              </p>
              <p>
               if($trainee->testScore->gmat_integrated_reasoningl_score != NULL){
                 <?= $trainee->testScore->gmat_integrated_reasoningl_score ?>
               }
              </p>
              <p>
               if($trainee->testScore->gmat_integrated_reasoning_percentile != NULL){
                 <?= $trainee->testScore->gmat_integrated_reasoning_percentile ?>
               }
              </p>
              <p>
                <b>GRE: </b><?= $trainee->assistantship_interest == 1 ? 'Yes' : 'No' ?>
              </p>
              <p>
                 if($trainee->testScore->gmat_date != NULL){
                   <?= $trainee->testScore->gmat_date ?>
                 }
                </p>
              <p>
                <b>TOEFL: </b><?= $trainee->expected_entrance_term != null ? $trainee->expected_entrance_term : 'No Expected Entrance Term Listed' ?>
              </p>
              <p>
                <b>IBT: </b><?= $trainee->expected_entrance_term != null ? $trainee->expected_entrance_term : 'No Expected Entrance Term Listed' ?>
              </p>
              <p>
                <b>PB: </b><?= $trainee->expected_entrance_term != null ? $trainee->expected_entrance_term : 'No Expected Entrance Term Listed' ?>
              </p>
              <p>
                <b>IELTS: </b><?= $trainee->expected_entrance_term != null ? $trainee->expected_entrance_term : 'No Expected Entrance Term Listed' ?>
              </p>
              <p>
                <b>MAT: </b><?= $trainee->expected_entrance_term != null ? $trainee->expected_entrance_term : 'No Expected Entrance Term Listed' ?>
              </p>
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mailingaddress">Edit</button>
                </div>
              </p>
            </div>
            
            <div class="tab-pane" id="educational_background">
              <p class="lead">Educational Background</p>
              
              <p>
                <div class="x_content">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mailingaddress">Edit</button>
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
<!-- /modals -->
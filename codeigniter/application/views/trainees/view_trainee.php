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
            </div>
            <div class="tab-pane" id="mailing_address">
              <p class="lead">Mailing Address</p>
            <?php if($trainee->mailing_address != null): ?>
              <p>
                <?= $trainee->mailing_address->address_line_1 ?>
              </p>
              <p>
                <?= $trainee->mailing_address->address_line_2 ?>
              </p>
              <p>
                <?= $trainee->mailing_address->address_city . ', ' . $trainee->mailing_address->address_state . ' ' . $trainee->mailing_address->address_zip ?>
              </p>
            <?php else: ?>
              <p>No Mailing Address Listed</p>
            <?php endif ?>
            </div>
            <div class="tab-pane" id="permanent_address">
              <p class="lead">Permanent Address</p>
            <?php if($trainee->permanent_address != null): ?>
              <p>
                <?= $trainee->permanent_address->address_line_1 ?>
              </p>
              <p>
                <?= $trainee->permanent_address->address_line_2 ?>
              </p>
              <p>
                <?= $trainee->permanent_address->address_city . ', ' . $trainee->permanent_address->address_state . ' ' . $trainee->permanent_address->address_zip ?>
              </p>
            <?php else: ?>
              <p>No Permanent Address Listed</p>
            <?php endif ?>
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
            </div>
            <div class="tab-pane" id="admissions_information">
              <p class="lead">Admissions Information</p>
            </div>
            <div class="tab-pane" id="test_scores">
              <p class="lead">Test Scores</p>
            </div>
            <div class="tab-pane" id="educational_background">
              <p class="lead">Educational Background</p>
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
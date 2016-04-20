<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel tile">
      <div class="x_title">
        <h2>Personal Information</h2>
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
          <b>Email Address: </b><?= $trainee->email_address ?>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel tile">
      <div class="x_title">
        <h2>Birth Information</h2>
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
        <p>
          <b>Date of Birth: </b><?= (new DateTime($trainee->date_of_birth))->format("F jS, Y") ?>
        </p>
        <p>
          <b>State of Birth: </b><?= $trainee->state_of_birth ?>
        </p>
        <p>
          <b>City of Birth: </b><?= $trainee->city_of_birth ?>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel tile">
      <div class="x_title">
        <h2>Residency Information</h2>
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
        <p>
          <b>U.S. Citizen: </b><?= $trainee->us_citizen == '1' ? 'Yes' : 'No' ?>
        </p>
        <p>
          <b>Missouri Resident: </b><?= $trainee->missouri_resident == '1' ? 'Yes' : 'No' ?>
        </p>
        <p>
          <b>City of Birth: </b><?= $trainee->city_of_birth ?>
        </p>
      <?php if($trainee->resident_status_id !== null): ?>
        <p>
          <b>U.S. Permanent Resident: </b><?= $trainee->resident_status->us_permanent_resident == '1' ? 'Yes' : 'No' ?>
        </p>
        <p>
          <b>Visa Status: </b><?= $trainee->resident_status->visa_status !== null ? $trainee->resident_status->visa_status : $trainee->resident_status->visa_status_other ?>
        </p>
      <?php endif ?>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel tile">
      <div class="x_title">
        <h2>Mailing Address</h2>
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
        <p>
          <?= $trainee->mailing_address->address_line_1 ?>
        </p>
        <p>
          <?= $trainee->mailing_address->address_line_2 ?>
        </p>
        <p>
          <?= $trainee->mailing_address->address_city . ', ' . $trainee->mailing_address->address_state . ' ' . $trainee->mailing_address->address_zip ?>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel tile">
      <div class="x_title">
        <h2>Permanent Address</h2>
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
        <p>
          <?= $trainee->permanent_address->address_line_1 ?>
        </p>
        <p>
          <?= $trainee->permanent_address->address_line_2 ?>
        </p>
        <p>
          <?= $trainee->permanent_address->address_city . ', ' . $trainee->permanent_address->address_state . ' ' . $trainee->permanent_address->address_zip ?>
        </p>
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
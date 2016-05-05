<div class="row">  
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Add a trainee to the NIHT32 Program</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
  
  
        <!-- Smart Wizard -->
        <p>Enter the information of the trainee</p>
        <div id="wizard" class="form_wizard wizard_horizontal">
          <ul class="wizard_steps">
            <li>
              <a href="#step-1">
                <span class="step_no">1</span>
                <span class="step_descr">
                                  Step 1<br />
                                  <small>Legal Name</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-2">
                <span class="step_no">2</span>
                <span class="step_descr">
                                  Step 2<br />
                                  <small>Mailing Address</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-3">
                <span class="step_no">3</span>
                <span class="step_descr">
                                  Step 3<br />
                                  <small>Permanent Address</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-4">
                <span class="step_no">4</span>
                <span class="step_descr">
                                  Step 4<br />
                                  <small>Birth and Citizenship</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-5">
                <span class="step_no">5</span>
                <span class="step_descr">
                                  Step 5<br />
                                  <small>Gender and Ethnicity</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-6">
                <span class="step_no">6</span>
                <span class="step_descr">
                                  Step 6<br />
                                  <small>Admissions Information</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-7">
                <span class="step_no">7</span>
                <span class="step_descr">
                                  Step 7<br />
                                  <small>Self-Reported Test Scores</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-8">
                <span class="step_no">8</span>
                <span class="step_descr">
                                  Step 8<br />
                                  <small>Educational Background</small>
                              </span>
              </a>
            </li>
          </ul>
          <form class="form-horizontal form-label-left" action="POST" id="add_trainee_form">
            <!--Step 1-->
            <div id="step-1">
              <h2 class="StepTitle text-center">Legal Name</h2>
              <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Family Name/Surname <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="legal_family_name" name="legal_family_name" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">First / Given Name <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="legal_first_name" name="legal_first_name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="legal_middle_name" name="legal_middle_name" class="form-control col-md-7 col-xs-12" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Other Names</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="other_names" name="other_names" class="form-control col-md-7 col-xs-12" type="text">
                  </div>
                </div>
                <!--<div class="ln_solid row"></div>-->
                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="email_address" name="email_address" class="form-control col-md-7 col-xs-12" type="email">
                  </div>
                </div>
                <script>
                  $(function() {
                    $('#tags_1').tagsInput({
                      width: 'auto',
                      'defaultText':'Add Name'
                    });
                  });
                </script>
              </div>
            </div> <!--/Step 1-->
            
            <!--Step 2-->
            <div id="step-2">
              <h2 class="StepTitle text-center">Mailing Address</h2>
              <div class="row">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Number & Street or RFU No.</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mailing_address_line_1" name="mailing_address_line_1" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Apt. No. or Box No.</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mailing_address_line_2" name="mailing_address_line_2" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mailing_address_city" name="mailing_address_city" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">County</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mailing_address_county" name="mailing_address_county" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">State or Province</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mailing_address_state" name="mailing_address_state"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ZIP or Postal Code</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mailing_address_zip" name="mailing_address_zip" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Country</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mailing_address_country" name="mailing_address_country" class="form-control">
                  </div>
                </div>
              </div>
            </div><!--/Step 2-->
            
            <!--Step 3-->
            <div id="step-3">
              <h2 class="StepTitle text-center">Permanent Address</h2>
              <div class="row">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Number & Street or RFU No.</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="permanent_address_line_1" name="permanent_address_line_1" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Apt. No. or Box No.</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="permanent_address_line_2" name="permanent_address_line_2" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="permanent_address_city" name="permanent_address_city" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">County</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="permanent_address_county" name="permanent_address_county" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">State or Province</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="permanent_address_state" name="permanent_address_state"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ZIP or Postal Code</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="permanent_address_zip" name="permanent_address_zip" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Country</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="permanent_address_country" name="permanent_address_country" class="form-control">
                  </div>
                </div>
              </div>
            </div> <!--Step 3-->
            
            <!--Step 4-->
            <div id="step-4">
              <h2 class="StepTitle text-center">Birth and Citizenship</h2>
              <div class="row">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="date_of_birth" name="date_of_birth" class="form-control date-mask" data-inputmask="'mask': '99/99/9999'">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">State of Birth</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="state_of_birth" name="state_of_birth" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City of Birth / Country of Birth</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="city_of_birth" name="city_of_birth" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">U.S. Citizen</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="us_citizen" class="btn-group" data-toggle="buttons">
                      <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="us_citizen" value="1" checked> &nbsp; Yes &nbsp;
                      </label>
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="us_citizen" value="0">&nbsp; No &nbsp;&nbsp;
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group us-citizen-hide">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Permanent Resident of the U.S.</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="us_permanent_resident" class="btn-group" data-toggle="buttons">
                      <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="us_permanent_resident" value="1"> &nbsp; Yes &nbsp;
                      </label>
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="us_permanent_resident" value="0" checked="">&nbsp; No &nbsp;&nbsp;
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group us-citizen-hide">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Visa / Immigration Status</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="visa_status" class="btn-group" data-toggle="buttons">
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="visa_status" value="F-1">&nbsp; F-1 &nbsp;
                      </label>
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="visa_status" value="F-2">&nbsp; F-2 &nbsp;
                      </label>
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="visa_status" value="J-1">&nbsp; J-1 &nbsp;
                      </label>
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="visa_status" value="Refugee">&nbsp; Refugee &nbsp;
                      </label>
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="visa_status" value="Asylee">&nbsp; Asylee &nbsp;
                      </label>
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="visa_status" value="Other">&nbsp; Other &nbsp;
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group visa-status-other-hide">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Other (state visa type)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="visa_status_other" name="visa_status_other" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Missouri Resident</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="missouri_resident" class="btn-group" data-toggle="buttons">
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="missouri_resident" value="1"> &nbsp; Yes &nbsp;
                      </label>
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="missouri_resident" value="0" checked="">&nbsp; No &nbsp;&nbsp;
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Veteran of the U.S. Armed Forces</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="us_af_veteran" class="btn-group" data-toggle="buttons">
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="us_af_veteran" value="1"> &nbsp; Yes &nbsp;
                      </label>
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="us_af_veteran" value="0" checked="">&nbsp; No &nbsp;&nbsp;
                      </label>
                    </div>
                  </div>
                </div>
                
                <script>
                $(document).ready(function() {
                  $(".us-citizen-hide").hide();
                  $(".visa-status-other-hide").hide();
                  
                  $("#us_citizen input").change(function() {
                    if($(this).val() == '0') {
                      $(".us-citizen-hide").slideDown('slow');
                    } else {
                      $(".us-citizen-hide").slideUp('slow');
                    }
                  })
                  
                  $("#visa_status input").change(function() {
                    if($(this).val() == 'Other') {
                      $('.visa-status-other-hide').slideDown('slow');
                    } else {
                      $(".visa-status-other-hide").slideUp("slow");
                    }
                  });
                });
                </script>
              </div>
            </div> <!--/Step 4-->
            
            <!--Step 5-->
            <div id="step-5">
              <h2 class="StepTitle text-center">Gender and Ethnicity</h2>
              <div class="row">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="ethnicity" class="btn-group" data-toggle="buttons">
                      <div class="radio">
                        <label>
                          <input type="radio" class="flat"  name="gender" value="Male"> Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" class="flat"  name="gender" value="Female" checked> Female
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Ethnicity</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="ethnicity" class="btn-group" data-toggle="buttons">
                      <div class="radio">
                        <label>
                          <input type="radio" class="flat"  name="ethnicity" value="Hispanic"> Hispanic or Latino
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" class="flat"  name="ethnicity" value="Non-Hispanic" checked> Non-Hispanic or Non-Latino
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Race</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="ethnicity" class="btn-group" data-toggle="buttons">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat"  name="race" value="Asian (Other)"> Asian (Other)
                        </label>
                      </div>
                    </div>
                    <div id="ethnicity" class="btn-group" data-toggle="buttons">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat"  name="race" value="White"> White / Caucasian
                        </label>
                      </div>
                    </div>
                    <div id="ethnicity" class="btn-group" data-toggle="buttons">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat"  name="race" value="Hawaiian"> Hawaiian / Pacific Islander
                        </label>
                      </div>
                    </div>
                    <div id="ethnicity" class="btn-group" data-toggle="buttons">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat"  name="race" value="American Indian"> American Indian or Native Alaskan
                        </label>
                      </div>
                    </div>
                    <div id="ethnicity" class="btn-group" data-toggle="buttons">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat"  name="race" value="Black"> Black or African-American
                        </label>
                      </div>
                    </div>
                    <div id="ethnicity" class="btn-group" data-toggle="buttons">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat"  name="race" value="Asian"> Asian (included Chineese, Filipino, Japanese, Korean, Thai, and Asian Indian)
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!--Step 5-->
            
            <!--Step 6-->
            <div id="step-6">
              <h2 class="StepTitle text-center">Admissions Information</h2>
              <div class="row">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Graduate Program</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="graduate_program" name="graduate_program" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Attendance Status</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="attendance_status" class="btn-group" data-toggle="buttons">
                      <div class="radio">
                        <label>
                          <input type="radio" class="flat"  name="attendance_status" value="Hispanic"> Full-time
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" class="flat"  name="attendance_status" value="Non-Hispanic" checked> Part-time
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Interested in an assistantship or fellowship</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="assistantship_interest" class="btn-group" data-toggle="buttons">
                      <div class="radio">
                        <label>
                          <input type="radio" class="flat"  name="assistantship_interest" value="1"> Yes
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" class="flat"  name="assistantship_interest" value="0" checked> No
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Expected Term of Entrance</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="permanent_address_county" name="permanent_address_county" class="form-control">
                  </div>
                </div>
              </div>
            </div> <!--/Step 6-->
            
            <!--Step 7-->
            <div id="step-7">
              <h2 class="StepTitle text-center">Self-Reported Test Scores</h2>
              <div class="row">
                <h3 class="text-center">GMAT</h3>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_date" name="gmat_date" class="form-control date-mask" data-inputmask="'mask': '99/9999'">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Score</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_score" name="gmat_score" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Verbal Score (V)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_verbal_score" name="gmat_verbal_score" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Verbal Percentile (V%)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_verbal_percentile" name="gmat_verbal_percentile" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantitative Score (Q)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_quantitative_score" name="gmat_quantitative_score"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantitative Percentile (Q%)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_quantitative_percentile" name="gmat_quantitative_percentile" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Analytical Writing Score AW</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_analytical_writing_score" name="gmat_analytical_writing_score" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Analytical Writing Percentile (AW%)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_analytical_writing_percentile" name="gmat_analytical_writing_percentile" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Integrated Reasoning Score (IR)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_integrated_reasoning_score" name="gmat_integrated_reasoning_score" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Integrated Resoning Percentile (IR%)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gmat_integrated_reasoning_percentile" name="gmat_integrated_reasoning_percentile" class="form-control">
                  </div>
                </div>
              </div> <!-- /GMAT -->
              <div class="ln_solid "></div>
              <div class="row">
                <h3 class="text-center">GRE</h3>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gre_date" name="gre_date" class="form-control date-mask" data-inputmask="'mask': '99/9999'">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Verbal Score (V)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gre_verbal_score" name="gre_verbal_score"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Verbal Percentile (V%)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gre_verbal_percentile" name="gre_verbal_percentile" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantitative Score (Q)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gre_quantitative_score" name="gre_quantitative_score" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantitative Percentile (Q%)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gre_quantitative_percentile" name="gre_quantitative_percentile"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Analytical Writing Score (AW)</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gre_analytical_writing_score" name="gre_analytical_writing_score" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Analytical Writing Percentile</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gre_analytical_writing_percentile" name="gre_analytical_writing_percentile" class="form-control">
                  </div>
                </div>
              </div> <!-- /GRE -->
              <div class="ln_solid "></div>
              <div class="row">
                <h3 class="text-center">TOEFL</h3>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="gre_date" name="gre_date" class="form-control date-mask" data-inputmask="'mask': '99/9999'">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Score</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="toefl_score" name="toefl_score"class="form-control">
                  </div>
                </div>
              </div> <!-- /TOEFL -->
              <div class="ln_solid "></div>
              <div class="row">
                <h3 class="text-center">IBT</h3>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibt_reading">Reading</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ibt_reading" name="ibt_reading"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibt_listening">Listening</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ibt_listening" name="ibt_listening"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibt_speaking">Speaking</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ibt_speaking" name="ibt_speaking"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibt_writing">Writing</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ibt_writing" name="ibt_writing"class="form-control">
                  </div>
                </div>
              </div><!-- /IBT -->
              <div class="ln_solid "></div>
              <div class="row">
                <h3 class="text-center">PB</h3>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pb_listening">Listening</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="pb_listening" name="pb_listening"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pb_writing">Writing</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="pb_writing" name="pb_writing"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pb_reading">Reading</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="pb_reading" name="pb_reading"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pb_essay">Essay</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="pb_essay" name="pb_essay"class="form-control">
                  </div>
                </div>
              </div><!-- /PB -->
              <div class="ln_solid "></div>
              <div class="row">
                <h3 class="text-center">IELTS</h3>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ielts_date" name="ielts_date" class="form-control date-mask" data-inputmask="'mask': '99/9999'">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ielts_score">Score</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ielts_score" name="ielts_score"class="form-control">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ielts_listening">Listening</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ielts_listening" name="ielts_listening"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ielts_reading">Reading</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ielts_reading" name="ielts_reading"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ielts_writing">Writing</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ielts_writing" name="ielts_writing"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ielts_speaking">Speaking</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ielts_speaking" name="ielts_speaking"class="form-control">
                  </div>
                </div>
              </div> <!-- /IELTS -->
              <div class="ln_solid "></div>
              <div class="row">
                <h3 class="text-center">MAT</h3>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mat_date" name="mat_date" class="form-control date-mask" data-inputmask="'mask': '99/9999'">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mat_score">Score</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mat_score" name="mat_score"class="form-control">
                  </div>
                </div>
              </div> <!-- /MAT -->
            </div> <!--Step 7-->
            
            <!--Step 8-->
            <div id="step-8">
              <h2 class="StepTitle text-center">Educational Background</h2>
              <div class="row" id="education_background_row">
                <h3 class="text-center">Current or Most Recent College</h3>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_name">Name</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_name" name="institution_0_name" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_city">City</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_city" name="institution_0_city" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_state">State</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_state" name="institution_0_state" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_country">Country</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_country" name="institution_0_country" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_start_date" name="institution_0_start_date" class="form-control date-mask" data-inputmask="'mask': '99/99/9999'">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_end_date" name="institution_0_end_date" class="form-control date-mask" data-inputmask="'mask': '99/99/9999'">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_degree_earned">Degree Earned</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_degree_earned" name="institution_0_degree_earned" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Degree Date</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_degree_date" name="institution_0_degree_date" class="form-control date-mask" data-inputmask="'mask': '99/99/9999'">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_overall_gpa">Overall GPA</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_overall_gpa" name="institution_0_overall_gpa" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_major_gpa">Major GPA</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_major_gpa" name="institution_0_major_gpa" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_gpa_scale">GPA Scale</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="institution_0_gpa_scale" name="institution_0_gpa_scale" class="form-control">
                  </div>
                </div>
              </div>
            </div> <!--Step 8-->
            
            
            
          </form>
        </div>
        <!-- End SmartWizard Content -->
      </div>
    </div>
  </div>
</div>

<!--
<div 
  <div class="row" id="education_background_row">
    <h3 class="text-center">Prior College</h3>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_name">Name</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_name" name="institution_0_name" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_city">City</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_city" name="institution_0_city" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_state">State</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_state" name="institution_0_state" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_country">Country</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_country" name="institution_0_country" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_start_date" name="institution_0_start_date" class="form-control date-mask" data-inputmask="'mask': '99/99/9999'">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_end_date" name="institution_0_end_date" class="form-control date-mask" data-inputmask="'mask': '99/99/9999'">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_degree_earned">Degree Earned</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_degree_earned" name="institution_0_degree_earned" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Degree Date</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_degree_date" name="institution_0_degree_date" class="form-control date-mask" data-inputmask="'mask': '99/99/9999'">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_overall_gpa">Overall GPA</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_overall_gpa" name="institution_0_overall_gpa" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_major_gpa">Major GPA</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_major_gpa" name="institution_0_major_gpa" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution_0_gpa_scale">GPA Scale</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="institution_0_gpa_scale" name="institution_0_gpa_scale" class="form-control">
      </div>
    </div>
  </div>
</div>
-->

<script type="text/javascript">
  $(document).ready(function() {
    // Smart Wizard
    $('#wizard').smartWizard({keyNavigation: false, enableAllSteps: true});
    // $('#wizard').smartWizard({onShowStep: onShowStepCallback});
    
    
  
    $(".date-mask").inputmask();
    
    //Educational Background add college
    
  });
</script>
<div class="row">  
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Wizards <small>Sessions</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
  
  
        <!-- Smart Wizard -->
        <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
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
                                  <small>Step 5 description</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-6">
                <span class="step_no">6</span>
                <span class="step_descr">
                                  Step 6<br />
                                  <small>Step 6 description</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-7">
                <span class="step_no">7</span>
                <span class="step_descr">
                                  Step 7<br />
                                  <small>Step 7 description</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-8">
                <span class="step_no">8</span>
                <span class="step_descr">
                                  Step 8<br />
                                  <small>Step 8 description</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-9">
                <span class="step_no">9</span>
                <span class="step_descr">
                                  Step 9<br />
                                  <small>Step 9 description</small>
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
                  <div class="control-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Other Names</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="tags_1" type="text" class="tags form-control col-md-7 col-xs-12" value="" />
                      <div id="suggestions-container" style="position: relative; float: left; margin: 1px;"></div>
                    </div>
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
                  
                  $(".date-mask").inputmask();
                });
                </script>
              </div>
            </div> <!--/Step 4-->
            
            
            
          </form>
        </div>
        <!-- End SmartWizard Content -->
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    // Smart Wizard
    $('#wizard').smartWizard({keyNavigation: false, enableAllSteps: true});
    // $('#wizard').smartWizard({onShowStep: onShowStepCallback});
  });
</script>
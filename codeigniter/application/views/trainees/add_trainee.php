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
                                  <small>Step 2 description</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-3">
                <span class="step_no">3</span>
                <span class="step_descr">
                                  Step 3<br />
                                  <small>Step 3 description</small>
                              </span>
              </a>
            </li>
            <li>
              <a href="#step-4">
                <span class="step_no">4</span>
                <span class="step_descr">
                                  Step 4<br />
                                  <small>Step 4 description</small>
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
          <form class="form-horizontal form-label-left" action="POST">
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
              <h2 class="StepTitle">Step 2 Content</h2>
              <p>
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div><!--/Step 2-->
            
            <!--Step 3-->
            <div id="step-3">
              <h2 class="StepTitle">Step 3 Content</h2>
              <p>
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div> <!--Step 3-->
            
            <!--Step 4-->
            <div id="step-4">
              <h2 class="StepTitle">Step 4 Content</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
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
    $('#wizard').smartWizard();
    // $('#wizard').smartWizard({onShowStep: onShowStepCallback});
  });
</script>
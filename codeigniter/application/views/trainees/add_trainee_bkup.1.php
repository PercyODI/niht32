<form id="add_trainee_form" data-parsley-validate class="">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Legal Name</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="form-group col-md-3">
            <label class="control-label" for="first-name">Family Name / Surname <span class="required">*</span></label>
            <div class="">
              <input type="text" id="legal_family_name" name="legal_family_name" required="required" class="form-control">
            </div>
          </div>
          <div class="form-group col-md-3">
            <label class="control-label" for="last-name">First / Given Name <span class="required">*</span></label>
            <div class="">
              <input type="text" id="legal_first_name" name="legal_first_name" required="required" class="form-control">
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="middle-name" class="control-label">Middle</label>
            <div class="">
              <input id="legal_middle_name" name="legal_middle_name" class="form-control" type="text" name="middle-name">
            </div>
          </div>
          <div class="control-group col-md-3">
            <label class="control-label">Other Names</label>
            <div class="">
              <input id="tags_1" type="text" class="tags form-control" value="" />
              <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
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
      </div>
    </div>
  </div>
  
  <!--Email-->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Email Address</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="form-group">
            <div class="">
              <input type="email" id="email_address" name="email_address" required="required" class="form-control">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--Mailing Address-->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Mailing Address and Telephone Number</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="form-group col-md-4">
              <label class="control-label" for="first-name">Number & Street or RFU No.</span>
              </label>
              <div class="">
                <input type="text" id="mailing_address_line_1" name="mailing_address_line_1" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label" for="first-name">Apt. No. or Box No.</span>
              </label>
              <div class="">
                <input type="text" id="mailing_address_line_2" name="mailing_address_line_2"class="form-control">
              </div>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label" for="first-name">City</span>
              </label>
              <div class="">
                <input type="text" id="mailing_address_city" name="mailing_address_city" class="form-control">
              </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="row">
            <div class="form-group col-md-3">
              <label class="control-label" for="first-name">County</span>
              </label>
              <div class="">
                <input type="text" id="mailing_address_county" name="mailing_address_county" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label" for="first-name">State or Province</span>
              </label>
              <div class="">
                <input type="text" id="mailing_address_state" name="mailing_address_state"class="form-control">
              </div>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label" for="first-name">ZIP or Postal Code</span>
              </label>
              <div class="">
                <input type="text" id="mailing_address_zip" name="mailing_address_zip" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label" for="first-name">Country</span>
              </label>
              <div class="">
                <input type="text" id="mailing_address_country" name="mailing_address_country" class="form-control">
              </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          
          <div class="row">
            <div class="form-group col-md-4 col-md-offset-8">
              <label class="control-label" for="first-name">Telephone</span>
              </label>
              <div class="">
                <input type="text" id="first-name" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Mailing Address-->
  <!--Permanent Address-->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Permanent Address and Telephone Number</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="form-group col-md-4">
              <label class="control-label" for="first-name">Number & Street or RFU No.</span>
              </label>
              <div class="">
                <input type="text" id="permanent_address_line_1" name="permanent_address_line_1" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label" for="first-name">Apt. No. or Box No.</span>
              </label>
              <div class="">
                <input type="text" id="permanent_address_line_2" name="permanent_address_line_2" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label" for="first-name">City</span>
              </label>
              <div class="">
                <input type="text" id="permanent_address_city" name="permanent_address_city" class="form-control">
              </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="row">
            <div class="form-group col-md-3">
              <label class="control-label" for="first-name">County</span>
              </label>
              <div class="">
                <input type="text" id="permanent_address_county" name="permanent_address_county" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label" for="first-name">State or Province</span>
              </label>
              <div class="">
                <input type="text" id="permanent_address_state" name="permanent_address_state"class="form-control">
              </div>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label" for="first-name">ZIP or Postal Code</span>
              </label>
              <div class="">
                <input type="text" id="permanent_address_zip" name="permanent_address_zip" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label" for="first-name">Country</span>
              </label>
              <div class="">
                <input type="text" id="permanent_address_country" name="permanent_address_country" class="form-control">
              </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          
          <div class="row">
            <div class="form-group col-md-4 col-md-offset-8">
              <label class="control-label" for="first-name">Telephone</span>
              </label>
              <div class="">
                <input type="text" id="first-name" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Permanent Address-->
  <!--Birthday, MO Resident, and US Veteran-->
  <div class="row">
    <!--Birthday-->
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Birth Information</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="form-group col-md-6">
              <label class="control-label" for="first-name">Date of Birth</span>
              </label>
              <div class="">
                <input type="text" id="" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label class="control-label" for="first-name">Place of Birth</span>
              </label>
              <div class="">
                <input type="text" id="first-name" class="form-control">
              </div>
            </div>
          </div>
          <div class="ln_solid row"></div>
          <div class="row">
            <div class="form-group col-md-12">
              <label class="control-label" for="first-name">City of Birth / Country of Birth</span>
              </label>
              <div class="">
                <input type="text" id="first-name" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/Birthday-->
    <!--MO Resident-->
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="row">
        <div class="x_panel">
          <div class="x_title">
            <h2>Residency</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-md-4" for="first-name">Missouri Resident </span>
                </label>
                <div class="btn-group col-md-8" data-toggle="buttons">
                  <label class="btn btn-default active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Yes
                  </label>
                  <label class="btn btn-default">
                    <input type="radio" name="options" id="option2" autocomplete="off"> No
                  </label>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label" for="first-name">City of Birth / Country of Birth</span>
                </label>
                <div class="">
                  <input type="text" id="first-name" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/MO Resident-->
    <!--US Veteran-->
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="row">
        <div class="x_panel">
          <div class="x_title">
            <h2>Veteran Status</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="form-group col-md-12">
                <label class="control-label" for="first-name">US Veteran </span>
                </label>
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-default">
                    <input type="radio" name="options" id="option1" autocomplete="off"> Yes
                  </label>
                  <label class="btn btn-default active">
                    <input type="radio" name="options" id="option2" autocomplete="off" checked> No
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/US Veteran-->
  </div>
  <!--/Birthday, MO Resident, and US Veteran-->
  <!--Citizenship, ethnicity, gender-->
  <div class="row">
    <!--Citizenship-->
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Citizenship</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="form-group col-md-12">
              <label class="control-label col-md-6" for="first-name">Citizen of the U.S. </span>
              </label>
              <div class="btn-group col-md-6" data-toggle="buttons">
                <label class="btn btn-default active">
                  <input type="radio" name="options" id="option1" autocomplete="off" checked> Yes
                </label>
                <label class="btn btn-default">
                  <input type="radio" name="options" id="option2" autocomplete="off"> No
                </label>
              </div>
            </div>
          </div>
          <div class="ln_solid row"></div>
          <div class="row">
            <div class="form-group col-md-12">
              <label class="control-label" for="first-name">Country of Citizenship</span>
              </label>
              <div class="">
                <input type="text" id="first-name" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/Citizenship-->
    <!--MO Resident-->
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="row">
        <div class="x_panel">
          <div class="x_title">
            <h2>Residency</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-md-6" for="first-name">Missouri Resident </span>
                </label>
                <div class="btn-group col-md-6" data-toggle="buttons">
                  <label class="btn btn-default active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Yes
                  </label>
                  <label class="btn btn-default">
                    <input type="radio" name="options" id="option2" autocomplete="off"> No
                  </label>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label" for="first-name">City of Birth / Country of Birth</span>
                </label>
                <div class="">
                  <input type="text" id="first-name" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/MO Resident-->
    <!--US Veteran-->
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="row">
        <div class="x_panel">
          <div class="x_title">
            <h2>Veteran Status</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-md-6" for="first-name">US Veteran </span>
                </label>
                <div class="btn-group col-md-6" data-toggle="buttons">
                  <label class="btn btn-default active">
                    <input type="radio" name="options" id="option1" autocomplete="off"> Yes
                  </label>
                  <label class="btn btn-default">
                    <input type="radio" name="options" id="option2" autocomplete="off" checked> No
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/US Veteran-->
  </div>
  <!--/Citizenship, Ethnicity, Gender-->
  
</form>
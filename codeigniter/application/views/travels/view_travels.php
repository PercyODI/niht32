<div class="row">  
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>See All Trainee Trips</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="input-group col-md-3 pull-right">
          <input type="text" class="form-control" id="travel-search-field" placeholder="Search for..." value='<?= $search == 'null' ? '' : $search ?>'>
          <span class="input-group-btn">
              <button class="btn btn-default" id="travel-search-btn" type="button">Go!</button>
          </span>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php if($travels != null): ?>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Trainee First Name</th>
              <th>Trainee Last Name</th>
              <th>Trip Name</th>
              <th>Description</th>
              <th>Cost</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($travels as $travel): ?>
            <tr style="cursor:pointer;" data-travel-id="<?= $travel->id ?>">
              <!--<th scope="row">1</th>-->
              <td><?= $travel->legal_first_name ?></td>
              <td><?= $travel->legal_family_name ?></td>
              <td><?= $travel->name ?></td>
              <td><?= $travel->description ?></td>
              <td><?= $travel->cost ?></td>
            </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      <?php else: ?>
        <h3 class="text-center">No Results</h3>
      <?php endif ?>
        <div class="ln_solid"></div>
        <div class="footer">
        <?php if($travels != null): ?>
          <a href="<?= base_url('travels/view_travels' . '/' . urlencode($search) . '/' . ($offset + $limit)) ?>" class="btn btn-primary pull-right">Next</a>
          <button class="btn btn-default pull-right pull-right"><?= ($offset + 1) . ' to ' . ($offset + count($travels))?></button>
        <?php else: ?>
          <a class="btn btn-primary disabled pull-right">Next</a>
          <button class="btn btn-default pull-right pull-right">No Results</button>
        <?php endif ?>
          <a href="<?= base_url("travels/view_travels" . '/' . urlencode($search) . '/' . max(0, ($offset - $limit))) ?>" class="btn btn-primary pull-right">Previous</a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade bs-example-modal-sm" id="sharedModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel2">Edit Trainee Travel</h4>
        </div>
        <div class="modal-body">
          <h4></h>
        </div>
        <div class="row">
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_input">Trip Name</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="name_input" name="name_input" class="form-control col-md-7 col-xs-12">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_input">Trip Description</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="description_input" name="description_input" class="form-control col-md-7 col-xs-12">
              </div>
          </div>
        </div>
        <div class="row">
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cost_input">Trip Cost</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="cost_input" name="cost_input" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save_button" name="save_button">Save changes</button>
      </div>

    </div>
  </div>
</div>
<!-- /modals -->

<script>
/* global $ */
  $(document).ready(function() {
    $("tr[data-travel-id]").click(function(e) {
      e.preventDefault();
      $.getJSON("<?= base_url('travels/get_travel_json') ?>" + "/" + $(this).attr("data-travel-id"), function(data) {
        if(data.success == true) {
          $("#name_input").val(data.travel_data.name);
          $("#description_input").val(data.travel_data.description);
          $("#cost_input").val(data.travel_data.cost);
          $("#sharedModal").data('travel_id', data.travel_data.id).modal();
        }
      });
      
    });
    
    $("#save_button").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("travels/save_travel") ?>'  + '/' + 
        encodeURIComponent($('#name_input').val()) + '/' + 
        encodeURIComponent($('#description_input').val()) + '/' + 
        encodeURIComponent($('#cost_input').val()) + '/' + 
        encodeURIComponent($('#sharedModal').data('travel_id'));
    });

    
    $("#travel-search-btn").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("travels/view_travels") ?>' + '/' + encodeURIComponent($('#travel-search-field').val()); 
    });
    
    $("#travel-search-field").keypress(function(e) {
      if(e.keyCode == 13) {
        $("#travel-search-btn").click();
      }
    });
  });
</script>
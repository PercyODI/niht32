<div class="row">  
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Find a Trainee</h2>
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
          <li>
            <a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        
        <div class="input-group col-md-3 pull-right">
          <input type="text" class="form-control" id="trainee-search-field" placeholder="Search for..." value='<?= $search == 'null' ? '' : $search ?>'>
          <span class="input-group-btn">
              <button class="btn btn-default" id="trainee-search-btn" type="button">Go!</button>
          </span>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php if($trainees != null): ?>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($trainees as $trainee): ?>
            <tr style="cursor:pointer;" data-trainee-id="<?= $trainee->id ?>">
              <!--<th scope="row">1</th>-->
              <td><?= $trainee->legal_first_name ?></td>
              <td><?= $trainee->legal_family_name ?></td>
              <td><?= $trainee->email_address ?></td>
            </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      <?php else: ?>
        <h3 class="text-center">No Results</h3>
      <?php endif ?>
        <div class="ln_solid"></div>
        <div class="footer">
        <?php if($trainees != null): ?>
          <a href="<?= base_url('trainees/view_trainees' . '/' . urlencode($search) . '/' . ($offset + $limit)) ?>" class="btn btn-primary pull-right">Next</a>
          <button class="btn btn-default pull-right pull-right"><?= ($offset + 1) . ' to ' . ($offset + count($trainees))?></button>
        <?php else: ?>
          <a class="btn btn-primary disabled pull-right">Next</a>
          <button class="btn btn-default pull-right pull-right">No Results</button>
        <?php endif ?>
          <a href="<?= base_url("trainees/view_trainees" . '/' . urlencode($search) . '/' . max(0, ($offset - $limit))) ?>" class="btn btn-primary pull-right">Previous</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
/* global $ */
  $(document).ready(function() {
    $("tr[data-trainee-id]").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/view_trainee") ?>' + '/' + $(this).attr('data-trainee-id');
    });
    
    $("#trainee-search-btn").click(function(e) {
      e.preventDefault();
      window.location.href = '<?= base_url("trainees/view_trainees") ?>' + '/' + encodeURIComponent($('#trainee-search-field').val()); 
    });
    
    $("#trainee-search-field").keypress(function(e) {
      if(e.keyCode == 13) {
        $("#trainee-search-btn").click();
      }
    });
  });
</script>
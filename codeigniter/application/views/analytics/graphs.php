<!--Graph ideas:-->
<!--Trainee Ethnicity Pie Chart? Histogram?-->
<!--Amount spent on travel total? Over Time? -->
<!--Average Trainee / applicant test score like GRE-->
<!--Number of students in each stage of degree requirement-->

<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Pie Graph for Trainee Ethnicity</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          
        <canvas id="mycanvas" width="256" height="256">
        <script>
        /* global $ */
          $(document).ready(function(){
          	$.getJSON("<?= base_url('analytics/ethnicityPieGraphData') ?>", function(data) {
          		if(data.success == true) {
	          		var ctx = $("#mycanvas");
			  				//draw
			        	var myPieChart = new Chart(ctx,{
								    type: 'pie',
								    data: data,
								});
          		} else {
          			$("#mycanvas").parent().append("No Etnicity Data to Show");
          			$("#mycanvas").remove();
          		}
          	});
       		});
        </script>
      </div>
    </div>
  </div>
</div>
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
          
        <canvas id="traineeEthnicityCanvas" width="256" height="256">
        <script>
        /* global $ */
          $(document).ready(function(){
          	$.getJSON("<?= base_url('analytics/ethnicityPieGraphData') ?>", function(data) {
          		if(data.success == true) {
	          		var ctx = $("#traineeEthnicityCanvas");
			  				//draw
			        	var myPieChart = new Chart(ctx,{
								    type: 'pie',
								    data: data,
								});
          		} else {
          			$("#traineeEthnicityCanvas").parent().append("No Etnicity Data to Show");
          			$("#traineeEthnicityCanvas").remove();
          		}
          	});
       		});
        </script>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Average GRE Scores of Applicants</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          
        <canvas id="degree_level_chart" width="256" height="256">
        <script>
        /* global $ */
          $(document).ready(function(){
          	$.getJSON("<?= base_url('analytics/applicantGREScoreAverages') ?>", function(jsonData) {
          		if(jsonData != null && jsonData.success == true) {
	          		var ctx = $("#degree_level_chart");
			  				//draw
			  				
			  				var data = {
								    labels: jsonData.labels,
								    datasets: [
								        {
								            label: "My First dataset",
								            backgroundColor: "#5A738E",
								            borderColor: "#2A3F54",
								            borderWidth: 1,
								            hoverBackgroundColor: "#5A738E",
								            hoverBorderColor: "#2A3F54",
								            data: jsonData.data,
								        }
								    ]
								};
			        	var myBarChart = new Chart(ctx, {
								    type: 'bar',
								    data: data,
								    options: {
								    	legend: {
								    		display: false
								    	},
								    	scales: {
								    		yAxes: [{
								    			ticks: {
								    				beginAtZero: true,
								    				max: 100
								    			}
								    		}]
								    	}
								    }
								});
          		} else {
          			$("#travelExpenseCanvas").parent().append("No Travel Data to Show");
          			$("#travelExpenseCanvas").remove();
          		}
          	});
       		});
        </script>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Number of Participants in Each Degree Level</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          
        <canvas id="degree_level_chart" width="256" height="256">
        <script>
        /* global $ */
          $(document).ready(function(){
          	$.getJSON("<?= base_url('analytics/degreeLevelChart') ?>", function(jsonData) {
          		if(jsonData != null && jsonData.success == true) {
	          		var ctx = $("#degree_level_chart");
			  				//draw
			  				
			  				var data = {
								    labels: jsonData.labels,
								    datasets: [
								        {
								            label: "My First dataset",
								            backgroundColor: "#5A738E",
								            borderColor: "#2A3F54",
								            borderWidth: 1,
								            hoverBackgroundColor: "#5A738E",
								            hoverBorderColor: "#2A3F54",
								            data: jsonData.data,
								        }
								    ]
								};
			        	var myBarChart = new Chart(ctx, {
								    type: 'bar',
								    data: data,
								    options: {
								    	legend: {
								    		display: false
								    	},
								    	scales: {
								    		yAxes: [{
								    			ticks: {
								    				beginAtZero: true,
								    				max: 100
								    			}
								    		}]
								    	}
								    }
								});
          		} else {
          			$("#degree_level_chart").parent().append("No Travel Data to Show");
          			$("#travelExpenseCanvas").remove();
          		}
          	});
       		});
        </script>
      </div>
    </div>
  </div>
</div>
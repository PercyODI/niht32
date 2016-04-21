<div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Pie Graph for Trainee Ethnicity</h2>
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
                    
                        <canvas id="mycanvas" width="256" height="256">
		                    <script>
			                    $(document).ready(function(){
			                  	var ctx = $("#mycanvas").get(0).getContext("2d");
				                  //pie chart data
				                  //sum of values = 360
				                  var data = [
				                	{
			                			value: 270,
					                	color: "cornflowerblue",
					                 	highlight: "lightskyblue",
					 	                label: "Corn Flower Blue"
					                },
					                {
					                	value: 50,
					                 	color: "lightgreen",
					                	highlight: "yellowgreen",
					                 	label: "Lightgreen"
					                },
		                			{
		                				value: 40,
			                			color: "orange",
	                 					highlight: "darkorange",
		                				label: "Orange"
			                 		}
			                  	];
                  				//draw
			                  	var piechart = new Chart(ctx).Pie(data);
	                     		});
		                    </script>
                </div>
              </div>
        </div>
</div>
<!-- <template> -->
  <div class="page">
  
      <h1>login-check</h1>
<?php

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
} 

debug_to_console("Student Sign-in");
					
					require('db.php');
					session_start();
					debug_to_console("Student Sign-in");
					// When form submitted, check and create user session.
					if(isset($_POST['rollno'])) {
						$rollno = stripslashes($_REQUEST['rollno']);    // removes backslashes
						$rollno = mysqli_real_escape_string($con, $rollno);
						$password = stripslashes($_REQUEST['password']);
						$password = mysqli_real_escape_string($con, $password);
				
						// $rollno = $_POST['username'];
						// $password = $_POST['password'];
				
						debug_to_console("Check");
						// Check user is exist in the database
						$query    = "SELECT * FROM `student` WHERE rollno='$rollno' AND password='$password'";
						$result = mysqli_query($con, $query);
						$rows = mysqli_num_rows($result);
						if ($rows == 1) {
							$_SESSION['rollno'] = $rollno;
              $reg = $_SESSION['reg_status'];

            //   if( $reg == "true"){
            //     echo '<script type="text/javascript">
            //                 function pageRedirect() {
            //                     window.location.replace("/#!/home/");
            //                 }      
            //                 setTimeout("pageRedirect()", 100);
            //             </script>';
            //   } else {
            //     echo '<script type="text/javascript">
            //     function pageRedirect() {
            //         window.location.replace("https://attender.onrender.com/");
            //     }      
            //     setTimeout("pageRedirect()", 100);
            // </script>'; 
            //   }

							//Redirect to user dashboard page
							echo '<script type="text/javascript">
                            function pageRedirect() {
                                window.location.replace("/#!/home/");
                            }      
                            setTimeout("pageRedirect()", 100);
                        </script>'; 
						} else {
               include("header.php");  echo '<div class="page">
              
              <div class="navbar navbar-style-1">
      <div class="navbar-bg"></div>
      <div class="navbar-inner">
        <div class="left">
          <a href="/" class="link back">
            <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M4.3419 8L10.2222 2.22222L8 2.73828e-07L1.22201e-06 8L8 16L10.2222 13.7778L4.3419 8Z" fill="#122261"/>
				</svg>
            <span class="if-not-md">Back</span>
          </a>
        </div>
        <div class="title">Student Login</div>
      </div>
    </div>
              <div class="form">
								  <h3>Incorrect Username/password.</h3><br/>
								  <p>Click here to <a href="/">Login</a> again.</p>
								  </div>
                  </div>
                  '; include("footer.php");
						}
					}
				?>

    <!-- </div> -->
  </div>
<!-- </template> -->
<script>
  export default (props, { $f7, $onMounted, $onBeforeUnmount }) => {
    let areaSimple;
    let areaWithTooltip;
    let areaWithAxis;
    let areaWithLegend;
    let areaLines;

    // helpers data for axis
    const dates = [];
    const today = new Date();
    const year = today.getFullYear();
    const month = today.getMonth();
    for (let i = 0; i < 4; i += 1) {
      dates.push(new Date(year, month - (3 - i)))
    }
    const axisDateFormat = Intl.DateTimeFormat(undefined, { month: 'short', year: 'numeric' })
    const tooltipDateFormat = Intl.DateTimeFormat(undefined, { month: 'long', year: 'numeric' })

    $onMounted(() => {
      areaSimple = $f7.areaChart.create({
        el: '.area-chart-simple',
        datasets: [
          {
            color: '#f00',
            values: [0, 100, 250, 300, 175, 400]
          },
          {
            color: '#00f',
            values: [100, 75, 133, 237, 40, 200]
          },
          {
            color: '#ff0',
            values: [100, 300, 127, 40, 250, 80]
          },
        ]
      });
      areaWithTooltip = $f7.areaChart.create({
        el: '.area-chart-with-tooltip',
        tooltip: true,
        datasets: [
          {
            label: 'Red data',
            color: '#f00',
            values: [100, 75, 133, 237, 40, 200]
          },
          {
            label: 'Blue data',
            color: '#00f',
            values: [100, 300, 127, 40, 250, 80]
          },
          {
            label: 'Yellow data',
            color: '#ff0',
            values: [0, 100, 250, 300, 175, 400]
          },
        ]
      });

      areaWithAxis = $f7.areaChart.create({
        el: '.area-chart-with-axis',
        tooltip: true,
        axis: true,
        axisLabels: dates,
        formatAxisLabel(date) {
          return axisDateFormat.format(date);
        },
        formatTooltipAxisLabel(date) {
          return tooltipDateFormat.format(date);
        },
        datasets: [
          {
            label: 'Green data',
            color: '#0f0',
            values: [100, 75, 133, 237]
          },
          {
            label: 'Red data',
            color: '#f00',
            values: [100, 300, 127, 47]
          },
          {
            label: 'Yellow data',
            color: '#ff0',
            values: [0, 100, 250, 307]
          },
        ]
      });

      areaWithLegend = $f7.areaChart.create({
        el: '.area-chart-with-legend',
        tooltip: true,
        axis: true,
        axisLabels: dates,
        legend: true,
        toggleDatasets: true,
        formatAxisLabel(date) {
          return axisDateFormat.format(date);
        },
        formatTooltipAxisLabel(date) {
          return tooltipDateFormat.format(date);
        },
        datasets: [
          {
            label: 'Red data',
            color: '#f00',
            values: [100, 300, 127, 47]
          },
          {
            label: 'Blue data',
            color: '#00f',
            values: [100, 75, 133, 237]
          },
          {
            label: 'Yellow data',
            color: '#ff0',
            values: [0, 100, 250, 307]
          },
        ]
      });

      areaLines = $f7.areaChart.create({
        el: '.area-chart-lines',
        tooltip: true,
        axis: true,
        axisLabels: dates,
        legend: true,
        toggleDatasets: true,
        lineChart: true,
        formatAxisLabel(date) {
          return axisDateFormat.format(date);
        },
        formatTooltipAxisLabel(date) {
          return tooltipDateFormat.format(date);
        },
        datasets: [
          {
            label: 'Red data',
            color: '#f00',
            values: [0, 300, 127, 47]
          },
          {
            label: 'Blue data',
            color: '#00f',
            values: [0, 75, 133, 237]
          },
          {
            label: 'Green data',
            color: '#0f0',
            values: [0, 100, 250, 307]
          },
        ]
      });
    })

    $onBeforeUnmount(() => {
      areaSimple.destroy();
      areaWithTooltip.destroy();
      areaWithAxis.destroy();
      areaWithLegend.destroy();
      areaLines.destroy();
    })

    return $render;
  }
</script>

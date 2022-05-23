<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {

        $course_name    = $_POST['course_name'];
        $course_duration    = $_POST['course_duration'];
        $create_datetime = date("Y-m-d H:i:s");


        $query    = "INSERT into `courses` (`course_name`, `course_duration`,  `course_tstamp`)
                     VALUES (  '$course_name','$course_duration', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            include('header.php');
            
            echo '<div class="page">
            <div class="navbar navbar-style-1">
              <div class="navbar-bg"></div>
              <div class="navbar-inner sliding">
                <div class="left">
                    <a onclick="history.back()" class="link back">
                      <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3419 8L10.2222 2.22222L8 2.73828e-07L1.22201e-06 8L8 16L10.2222 13.7778L4.3419 8Z" fill="#122261"/>
                          </svg>
                     
                    </a>
                  </div>
                <div class="title">New Course</div>
              </div>
            </div>
            <div class="tabs">
              <div id="tab-1" class="page-content tab tab-active"><div class="space" style="height:10%;"></div>
                <div class="block">
                <center><p style="font-size:15px;">New Course Added.</p>
          <div class="color-theme" style="background-color: var(--f7-theme-color); border-radius: 50%; height:80px; width:80px;">
          <i  style="color:white; font-size:56px; margin-top: 12px;" class="fa fa-graduation-cap"></i>
                
           </div>
          <h5 class="custom-file-label text-primary">'.$course_name.'</h5>
          <h5>Duration :'.$course_duration.' years</h5>
          <h5>'.$course_tstamp.'</h5>
          
          
          <h5 class="custom-file-label text-primary">Lecture Status: Lecture Added Sucessfully</h5>
          
          
          </center>
          
          <div class="bottom-layer"><div class="toolbar toolbar-bottom container footer-button padding">
                  <a  onclick="history.back()"  class="button button-fill sheet-open button-large button" data-sheet=".demo-sheet-swipe-to-close">OK</a>
              </div> </div>
              
                </div>
              </div>
            </div>
          </div>
          ';  include('footer.php');
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
    
?>

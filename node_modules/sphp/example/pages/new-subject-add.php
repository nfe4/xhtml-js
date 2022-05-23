<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {

        $ltc_name    = $_POST['ltc_name'];
        $ltc_type    = $_POST['ltc_type'];
        $class = $_POST['class'];
        $sem = $_POST['sem'];
        $sub_code = $_POST['sub_code'];
        $create_datetime = date("Y-m-d H:i:s");
        $ltc_incharge = $_POST['ltc_incharge'];


        $query    = "INSERT into `subject` (`ltc_name`, `ltc_type`, `class`, `sem`, `sub_code`, `ltc_tstamp`, `ltc_incharge`)
                     VALUES (  '$ltc_name','$ltc_type','$class', '$sem', '$sub_code', '$create_datetime', '$ltc_incharge')";
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
                <div class="title">New Lecture</div>
              </div>
            </div>
            <div class="tabs">
              <div id="tab-1" class="page-content tab tab-active"><div class="space" style="height:10%;"></div>
                <div class="block">
                <center><p style="font-size:15px;">New Lecture Added.</p>
          <div class="color-theme" style="background-color: var(--f7-theme-color); border-radius: 50%; height:80px; width:80px;">
          <i  style="color:white; font-size:56px; margin-top: 12px;" class="fa fa-graduation-cap"></i>
                
           </div>
          <h5 class="custom-file-label text-primary">'.$ltc_name.'</h5>
          <h5>'.$class.'</h5>
          <h5>'.$sem.'</h5>
          <h5>'.$ltc_type.'</h5>
          
          
          <h5 class="custom-file-label text-primary">Lecture Status: Lecture Added Sucessfully</h5>
          
          
          </center>
          
          <div class="bottom-layer"><div class="toolbar toolbar-bottom container footer-button padding">
                  <a  href="/#!/home-teacher/" class="link back" class="button button-fill sheet-open button-large button" data-sheet=".demo-sheet-swipe-to-close">OK</a>
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

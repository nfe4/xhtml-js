<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $rollno = $_POST['rollno'];
        $class = $_POST['class'];
        $sem = $_POST['sem'];
        $session = $_POST['session'];
        $email = $_POST['email'];
        $create_datetime = date("Y-m-d H:i:s");


        $query    = "INSERT into `reset_st` (`name`,`rollno`,`class`,`sem`,`session`, `email`, `tstamp`)
                     VALUES (  '$name','$rollno','$class','$sem','$session','$email', '$create_datetime')";
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
                <div class="title">Password Reset</div>
              </div>
            </div>
            <div class="tabs">
              <div id="tab-1" class="page-content tab tab-active"><div class="space" style="height:10%;"></div>
                <div class="block">
                <center><p style="font-size:15px;">Request Sent!</p>
          <div class="color-theme" style="background-color: var(--f7-theme-color); border-radius: 50%; height:80px; width:80px;">
          <i  style="color:white; font-size:56px; margin-top: 12px;" class="fa fa-envelope"></i>
                
           </div>
          <h5 class="custom-file-label text-primary">'.$name.'</h5>
          <h5>'.$rollno.' years</h5>
          <h5>'.$class.'</h5>
          <h5>'.$sem.'</h5>
          <h5>Your request has been sent. The new password will be sent to you by your mention email('.$email.').</h5>
          
          
          <h5 class="custom-file-label text-primary">Request sent Sucessfully</h5>
          
          
          </center>
          
          <div class="bottom-layer"><div class="toolbar toolbar-bottom container footer-button padding">
                  <a  href="/#!/welcome/" class="button button-fill sheet-open button-large button" data-sheet=".demo-sheet-swipe-to-close">OK</a>
              </div> </div>
              
                </div>
              </div>
            </div>
          </div>';  include('footer.php');
        } else {
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
                <div class="title">Password Reset</div>
              </div>
            </div>
            <div class="tabs">
              <div id="tab-1" class="page-content tab tab-active"><div class="space" style="height:10%;"></div>
                <div class="block">
                <center><p style="font-size:15px;">Request Invalid!</p>
          <div class="color-theme" style="background-color: var(--f7-theme-color); border-radius: 50%; height:80px; width:80px;">
          <i  style="color:white; font-size:56px; margin-top: 12px;" class="fa fa-exclamation-triangle"></i>
                
           </div>
          <h5 class="custom-file-label text-primary">'.$name.'</h5>
          <h5>'.$rollno.' years</h5>
          <h5>'.$class.'</h5>
          <h5>'.$sem.'</h5>
          
          
          
          <h5 class="custom-file-label text-primary">Request not Sent!</h5>
          
          
          </center>
          
          <div class="bottom-layer"><div class="toolbar toolbar-bottom container footer-button padding">
                  <a  href="/#!/welcome/" class="button button-fill sheet-open button-large button" data-sheet=".demo-sheet-swipe-to-close">OK</a>
              </div> </div>
              
                </div>
              </div>
            </div>
          </div>';  include('footer.php');;
        }
    } 
?>

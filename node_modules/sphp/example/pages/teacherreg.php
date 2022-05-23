<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        // removes backslashes
        // $username = stripslashes($_REQUEST['username']);
        // $username = mysqli_real_escape_string($con, $username);
        // $fname    = stripslashes($_REQUEST['fname']);
        // $fname    = mysqli_real_escape_string($con, $fname);
        // $lname    = stripslashes($_REQUEST['lname']);
        // $lname    = mysqli_real_escape_string($con, $lname);
        // $desig    = stripslashes($_REQUEST['desig']);
        // $desig    = mysqli_real_escape_string($con, $lname);
        // $password = stripslashes($_REQUEST['password']);
        // $password = mysqli_real_escape_string($con, $password);

        $fname    = $_REQUEST['fname'];
        $lname    = $_REQUEST['lname'];
        $username = $_POST['username'];
        $desig = $_POST['desig'];
        $org_code = $_POST['org_code'];
		$password = $_POST['password'];
        $create_datetime = date("Y-m-d H:i:s");

        if($org_code == "6969"){

        $query    = "INSERT into `teacher` (`teacher_fname`, `teacher_lname`, `teacher_username`, `teacher_desig`, `teacher_pwd`,`org_code`, `teacher_tstamp`)
                     VALUES (  '$fname','$lname','$username', '$desig','" . md5($password) . "', '$org_code', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='/#!/signin/'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }else echo 'Worng Institution code';
    } 
?>

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
        $id = $_REQUEST['teacher_id'];
        $fname    = $_REQUEST['fname'];
        $lname    = $_REQUEST['lname'];
        $username = $_POST['username'];
        $desig = $_POST['desig'];
        $org_code = $_POST['org_code'];
		$password = $_POST['password'];
        $create_datetime = date("Y-m-d H:i:s");

        if($org_code == "6969"){

        $query    = "UPDATE teacher SET `teacher_fname` = $fname, `teacher_lname` = $lname, `teacher_username` = $username, `teacher_desig` = $desig, `teacher_pwd`= " . md5($password) . ",`org_code` = $org_code, `teacher_tstamp` = $create_datetime WHERE teacher_id=$id";
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

<?php
    include('db.php');
    session_start();
		$query = "SELECT * FROM `teacher` WHERE teacher_username='".$_SESSION['username']."'";
		$result = mysqli_query($con, $query); 
        
        if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
           $_SESSION['fname']= $row['teacher_fname'];
           $_SESSION['lname']= $row['teacher_lname'];
           $_SESSION['name']= $_SESSION['fname']. $_SESSION['lname'];
           $_SESSION['desig']= $row['teacher_desig'];
        }
    }
?>
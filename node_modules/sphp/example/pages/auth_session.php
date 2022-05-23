<?php
    include('db.php');
    session_start();
		$query = "SELECT * FROM `student` WHERE rollno='".$_SESSION['rollno']."'";
		$result = mysqli_query($con, $query); 
        
        if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
           $_SESSION['name']= $row['name'];
           $_SESSION['rollno']=$row['rollno'];  
           $_SESSION['sem']=$row['sem'];  
           $_SESSION['class']=$row['class'];
           $_SESSION['reg_status']=$row['reg_status'];
        }
    }
?>
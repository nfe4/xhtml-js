<?php
require('db.php');
include("auth_session_admin.php");
include('header.php');

?>
            <div class="page">
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
                <div class="title">Reset Password</div>
              </div>
            </div>
            <div class="tabs">
              <div id="tab-1" class="page-content tab tab-active">
                <div class="block">
                <center><p style="font-size:15px;">Edit Teacher Details</p>
          
                <form action="pages/teacherupdate.php" method="post">
						<div class="list">
							<ul class="row">
							<?php  $id=$_GET['id'];
							$query = "SELECT * FROM `teacher` WHERE teacher_id=$id";
		$result = mysqli_query($con, $query); 
        
        if ($result->num_rows > 0) 
    {
        //OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
           $_SESSION['fname']= $row['teacher_fname'];
           $_SESSION['lname']= $row['teacher_lname'];
           $_SESSION['username']= $row['teacher_username'];
           $_SESSION['desig']= $row['teacher_desig'];
           $_SESSION['pwd']= $row['teacher_pwd'];
           $_SESSION['org_code']= $row['org_code'];

		   echo'<li class="item-content col-50 item-input item-input-with-value">
		   <div class="item-inner">
			   <div class="item-input-wrap">
				   <input type="text" name="fname" value="'.$_SESSION['fname'].'" placeholder="First Name"  class="form-control" required validate/>
			   </div>
		   </div>
	   </li>
	   <li class="item-content col-50 item-input item-input-with-value">
		   <div class="item-inner">
			   <div class="item-input-wrap">
				   <input type="text" name="lname" value="'.$_SESSION['lname'].'" placeholder="Last Name" class="form-control" required validate/>
			   </div>
		   </div>
	   </li>
	   <li class="item-content col-100 item-input">
		   <div class="item-inner">
			   <div class="item-input-wrap">
				   <input type="text" name="username" value="'.$_SESSION['username'].'" placeholder="Teacher Username" class="form-control" required validate/>
			   </div>
		   </div>
	   </li>
	   <li class="item-content col-100 item-input">
		   <div class="item-inner">
			   <div class="item-input-wrap">
				   <input type="text" name="desig" value="'.$_SESSION['desig'].'" placeholder="Teacher Designation" class="form-control" required validate/>
			   </div>
		   </div>
	   </li>
	   <li class="item-content col-100 item-input">
		   <div class="item-inner">
			   <div class="item-input-wrap">
				   <input type="text" name="password" value="'.$_SESSION['pwd'].'" placeholder="Password" id="dz-password" class="form-control" required validate/>
				   
			   </div>
		   </div>
	   </li>
	   <li class="item-content col-100 item-input">
		   <div class="item-inner">
			   <div class="item-input-wrap">
				   <input type="text" name="org_code"  value="'.$_SESSION['org_code'].'" placeholder="Institute Code" class="form-control" required validate/>
			   </div>
		   </div>
	   </li>
   </ul>
</div>';
		
		}
	}	?>
						
					
						<div class="bottom-layer"><button id="btnSubmit"  type="submit" name="submit" class="col button button-large button-round button-fill">UPDATE</button> </div>
          </center>
          
          
              </form>
                </div>
              </div>
            </div>
          </div>
          <?php include('footer.php'); ?>
<div class="page page-home light">
	<!-- Component CSS start -->
	<style>
		.settings:after{
			font-family: "Font Awesome 5 Free"; 
			font-weight: 900; 
			content: "\f013";
			margin-left: -15px
		}


	</style>
	<!-- Component CSS end -->
	<?php
//include auth_session.php file on all user panel pages
include("db.php");
include("auth_session_teacher.php");
?>
	

	<!-- time message start -->
<?php

	function greeting(){
        date_default_timezone_set("Asia/Kolkata");  
        $h = date('G');

        if($h>=5 && $h<=11)
        {
            echo "Good Morning";
        }
        else if($h>=12 && $h<=15)
        {
            echo "Good Afternoon";
        }
        else
        {
            echo "Good Evening";
        }};

    ?>  	
	<!-- time message end	 -->
	<!-- Page Content -->
	<div class="page-content content-area pt-40">
		
		<div class="searchbar-backdrop"></div>
		

		<div class="container">
			<!-- Notifications -->
			<a href="/teacher-profile/" class="notification-bar">
				<div class="info">
					<span class="text"><?php greeting(); ?></span>
					<h2 class="title"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?> </h2><!-- print user name -->
				</div>
				<div class="media settings">
					<img src="/img/avg.png" alt=""/>
					<!-- <i class="fa fa-circle color-theme-orange active"></i> -->
				</div>
			</a>
			
			
			<div class="custom-file mb-20">
             <a href="/register/" ><div class="custom-text">
								<h5 class="custom-file-label text-primary">Attendance Register</h5>
				<svg class="icon-bx svg-primary" style="fill: var(--f7-theme-color);"  height="40px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="#000" d="M168.8 32.89l-32.6 32.53 21.3 21.17L190 54.08zm33.9 33.96l-9.9 9.91 123 123.04 9.9-9.9zm159.4 18.06c-3.7 0-7.4.1-10.9.3-31.9 1.78-56.7 11.76-78.3 26.39l65.5 65.6c3.5 7.3 52 96.2 65.5 123.3-9.7-6.4-123.4-65.4-123.4-65.4l-15.3-15.2v140.3c23.9-14.6 50.1-27.7 83.6-31.2 37.5-4 83.5 4.3 144.2 33.1V118.7c-51.7-22.99-93.3-32.89-127.2-33.69-1.3 0-2.5-.11-3.7-.1zm-230.8 1.03C100.4 88.93 63.44 99 19.05 118.7v243.4C79.85 333.3 125.8 325 163.3 329c33 5.2 58.1 15.8 83.6 31.2V201.6c-38.6-38.5-77.1-77.1-115.6-115.66zm48.8 3.55l-9.9 9.89 123 123.02 9.9-9.9zM336 205.1l-27.5 27.5 55.1 27.6zM143.8 346.7c-32 .3-71.85 9.8-124.75 36v42.5c60.8-28.8 106.75-37.1 144.25-33.1 18.6 2 34.9 6.9 49.8 13.3-4.7 6.1-9.3 13.3-13.9 21.7h117.2c-6-8.2-11.8-15.4-17.7-21.6 15-6.5 31.4-11.4 50.1-13.4 37.5-4 83.5 4.3 144.2 33.1v-42.5c-53.1-26.3-93.1-35.9-125.2-36h-3.1c-4.8.1-9.4.4-13.9.9-34 3.6-59.6 18-85.6 34.4-5.7-.8-13-1.8-18.3-.9-27.2-16.2-58.2-30.4-85.5-33.5-5.6-.6-11.5-.9-17.6-.9z"/></svg>  
			</div></a>
          </div>
			<!-- Latest Vacancies -->
			<div class="title-bar">
				<h4 class="dz-title">Lectures</h4>
				
			</div>
			<div class="list search-list searchbar-found dz-list mt-0 mb-30">
				<ul class="row" style="padding-bottom:70px ;">
				<?php 
				
				$query = "SELECT * FROM `subject` WHERE ltc_incharge='".$_SESSION['username']."'";
				$result = mysqli_query($con, $query); 
				
				if ($result->num_rows > 0) 
			{
				// OUTPUT DATA OF EACH ROW
				while($row = $result->fetch_assoc())
				{
					$_SESSION['ltc_name']= $row['ltc_name'];
					$_SESSION['ltc_type']= $row['ltc_type'];
					$_SESSION['class']= $row['class'];
					$_SESSION['sem']= $row['sem'];
				   $_SESSION['sub_code']= $row['sub_code'];
				   
				   echo'
				   <li class="col-100 medium-50">
					   <div class="card-bx job-card">
						   <div class="card-media color-theme  ">
							   <a href="/teacher-lecture/"><i  style="font-size: 36px;" class="fa fa-graduation-cap"></i></a>
						   </div>
						   <div class="card-info">
							   <h6 class="item-title"><a href="/teacher-lecture/">'.$_SESSION['ltc_name'].'</a></h6>
							   <div class="list-info">
								   <p>'.$_SESSION['class'].'</p>
								   
								    <!--<p>Attendence</p>-->
									</div>
									<p style="font-size:12px; margin-top:-8px;">'.$_SESSION['sem'].'</p>
							   <div class="item-footer">
								   <a href="#" class="item-tag">'.$_SESSION['sub_code'].'</a>
								   <h5 class="item-price text-primary">'.$_SESSION['ltc_type'].'</h5>
							   </div>
						   </div>
						   <label class="bookmark-btn toggle toggle-init">
							   <input type="checkbox">
								   <span class="toggle-icon"></span>
							 </label>
					   </div>
				   </li>';
				   
				}
			}
				
				
					?>
				</ul>
			</div>
			
		</div>
	</div>

	<div class="bottom-layer"></div>
	<div class="toolbar toolbar-bottom container footer-button padding">
		<a href="/add-new-sub/" class="button button-fill sheet-open button-large button" data-sheet=".demo-sheet-swipe-to-close">Add New Lecture</a>
	</div>
		
</div>

<script>
export default (props, {$on}) => {
	$on('pageInit', () => {	
		$('.bookmark-btn').on('click',function(){
			$(this).toggleClass('active');
		});
	});
	return $render;
}
</script>

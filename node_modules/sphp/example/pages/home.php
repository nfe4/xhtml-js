<?php
	include("db.php");
	include("auth_session.php");
$roll = $_SESSION['rollno'];
$sqlp="SELECT * FROM `attendence` WHERE (attend='present' or attend='Present') and rollno=$roll";
if ($result_p = mysqli_query($con, $sqlp)) {

    // Return the number of rows in result set
    $countp = mysqli_num_rows( $result_p );
    
?>
<div class="page page-home light">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Component CSS start -->
	<style>
		@import url("https://fonts.googleapis.com/css?family=Nanum+Gothic|Nanum+Myeongjo");

		.settings:after {
			font-family: "Font Awesome 5 Free";
			font-weight: 900;
			content: "\f013";
			margin-left: -15px
		}
	</style>
	<!-- Component CSS end -->
	<!-- FAB ICON START -->
	<div class="fab fab-center-bottom fab-morph" data-morph-to=".demo-fab-fullscreen-sheet.fab-morph-target">
		<a href="#">
			<svg style="fill: white; padding: 8px;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512">
				<title>Finger Print</title>
				<path d="M390.42 75.28a10.45 10.45 0 01-5.32-1.44C340.72 50.08 302.35 40 256.35 40c-45.77 0-89.23 11.28-128.76 33.84C122 77 115.11 74.8 111.87 69a12.4 12.4 0 014.63-16.32A281.81 281.81 0 01256.35 16c49.23 0 92.23 11.28 139.39 36.48a12 12 0 014.85 16.08 11.3 11.3 0 01-10.17 6.72zm-330.79 126a11.73 11.73 0 01-6.7-2.16 12.26 12.26 0 01-2.78-16.8c22.89-33.6 52-60 86.69-78.48 72.58-38.84 165.51-39.12 238.32-.24 34.68 18.48 63.8 44.64 86.69 78a12.29 12.29 0 01-2.78 16.8 11.26 11.26 0 01-16.18-2.88c-20.8-30.24-47.15-54-78.36-70.56-66.34-35.28-151.18-35.28-217.29.24-31.44 16.8-57.79 40.8-78.59 71a10 10 0 01-9.02 5.08zM204.1 491a10.66 10.66 0 01-8.09-3.6C175.9 466.48 165 453 149.55 424c-16-29.52-24.27-65.52-24.27-104.16 0-71.28 58.71-129.36 130.84-129.36S387 248.56 387 319.84a11.56 11.56 0 11-23.11 0c0-58.08-48.32-105.36-107.72-105.36S148.4 261.76 148.4 319.84c0 34.56 7.39 66.48 21.49 92.4 14.8 27.6 25 39.36 42.77 58.08a12.67 12.67 0 010 17 12.44 12.44 0 01-8.56 3.68zm165.75-44.4c-27.51 0-51.78-7.2-71.66-21.36a129.1 129.1 0 01-55-105.36 11.57 11.57 0 1123.12 0 104.28 104.28 0 0044.84 85.44c16.41 11.52 35.6 17 58.72 17a147.41 147.41 0 0024-2.4c6.24-1.2 12.25 3.12 13.4 9.84a11.92 11.92 0 01-9.47 13.92 152.28 152.28 0 01-27.95 2.88zM323.38 496a13 13 0 01-3-.48c-36.76-10.56-60.8-24.72-86-50.4-32.37-33.36-50.16-77.76-50.16-125.28 0-38.88 31.9-70.56 71.19-70.56s71.2 31.68 71.2 70.56c0 25.68 21.5 46.56 48.08 46.56s48.08-20.88 48.08-46.56c0-90.48-75.13-163.92-167.59-163.92-65.65 0-125.75 37.92-152.79 96.72-9 19.44-13.64 42.24-13.64 67.2 0 18.72 1.61 48.24 15.48 86.64 2.32 6.24-.69 13.2-6.7 15.36a11.34 11.34 0 01-14.79-7 276.39 276.39 0 01-16.88-95c0-28.8 5.32-55 15.72-77.76 30.75-67 98.94-110.4 173.6-110.4 105.18 0 190.71 84.24 190.71 187.92 0 38.88-31.9 70.56-71.2 70.56s-71.2-31.68-71.2-70.56c.01-25.68-21.49-46.6-48.07-46.6s-48.08 20.88-48.08 46.56c0 41 15.26 79.44 43.23 108.24 22 22.56 43 35 75.59 44.4 6.24 1.68 9.71 8.4 8.09 14.64a11.39 11.39 0 01-10.87 9.16z"></path>
			</svg>
		</a>
	</div>
	<div class="demo-fab-fullscreen-sheet fab-morph-target">
		<div class="block-title">Choose Lecture <a href="#" class="fab-close">
				<svg style="float:right;" width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect width="16" height="16" id="icon-bound" fill="none" />
					<polygon points="14.707,2.707 13.293,1.293 8,6.586 2.707,1.293 1.293,2.707 6.586,8 1.293,13.293 2.707,14.707 8,9.414 
	13.293,14.707 14.707,13.293 9.414,8 " />
				</svg></a></div>
		<div class="space" style="padding: 30;">
			<div class="custom-file mb-20">
				<a href="/fingerprint/">
					<div class="custom-text">
						<h5 class="custom-file-label text-primary">Web Designing</h5>
						<svg class="icon-bx svg-primary" style="fill: var(--f7-theme-color);" height="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 489.736 489.736" style="enable-background:new 0 0 489.736 489.736;" xml:space="preserve">
							<g>
								<g>
									<g>
										<path d="M394.739,213.175h-0.1c-0.4-9-8.8-24.3-28.1-18.8l-141.8,55.2l-141.8-55.1c-18.6-5.6-28.1,7.8-28.1,18.7v117.8
				c0,53.2,35.4,95.9,78.2,95.9h183.5c42.7,0,77.1-43.8,78.2-96.9V213.175z M354.039,329.975h-0.1c0,30.2-17.7,55.2-37.5,55.2
				h-183.4c-20.8,0-37.5-25-37.5-55.2v-86.5l123,46.9c4.2,2.1,9.4,2.1,14.6,0l120.9-46.9V329.975z" />
										<path d="M484.239,456.075l-25.6-31.4c0.3-1,0.5-2,0.6-3v-311.7c0-17-22.1-23.2-24-24l-203.2-84.4c-5.2-2.1-10.4-2.1-15.6,0
				l-203.3,84.5c-20.8,11-11.8,33.7,0,37.5l203.3,84.4c5.8,2,11.1,2.3,15.6,0l185.5-77.1v289.4l-29.2,35.8
				c-7.3,9.4-5.2,21.9,3.1,29.2c9.4,7.3,21.9,5.2,29.2-3.1l16.7-19.8l16.7,19.8c5,6.8,16.7,10.1,27.1,3.1
				C490.539,477.975,491.539,464.375,484.239,456.075z M223.639,167.375l-150.1-62.6l151.1-62.5l149.1,62.5L223.639,167.375z" />
									</g>
								</g>
							</g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
						</svg>


					</div>
				</a>
			</div>

			<div class="custom-file mb-20">
				<a href="/fingerprint/">
					<div class="custom-text">
						<h5 class="custom-file-label text-primary">PHP Programming</h5>
						<svg class="icon-bx svg-primary" style="fill: var(--f7-theme-color);" height="40px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
							<path fill="#000" d="M168.8 32.89l-32.6 32.53 21.3 21.17L190 54.08zm33.9 33.96l-9.9 9.91 123 123.04 9.9-9.9zm159.4 18.06c-3.7 0-7.4.1-10.9.3-31.9 1.78-56.7 11.76-78.3 26.39l65.5 65.6c3.5 7.3 52 96.2 65.5 123.3-9.7-6.4-123.4-65.4-123.4-65.4l-15.3-15.2v140.3c23.9-14.6 50.1-27.7 83.6-31.2 37.5-4 83.5 4.3 144.2 33.1V118.7c-51.7-22.99-93.3-32.89-127.2-33.69-1.3 0-2.5-.11-3.7-.1zm-230.8 1.03C100.4 88.93 63.44 99 19.05 118.7v243.4C79.85 333.3 125.8 325 163.3 329c33 5.2 58.1 15.8 83.6 31.2V201.6c-38.6-38.5-77.1-77.1-115.6-115.66zm48.8 3.55l-9.9 9.89 123 123.02 9.9-9.9zM336 205.1l-27.5 27.5 55.1 27.6zM143.8 346.7c-32 .3-71.85 9.8-124.75 36v42.5c60.8-28.8 106.75-37.1 144.25-33.1 18.6 2 34.9 6.9 49.8 13.3-4.7 6.1-9.3 13.3-13.9 21.7h117.2c-6-8.2-11.8-15.4-17.7-21.6 15-6.5 31.4-11.4 50.1-13.4 37.5-4 83.5 4.3 144.2 33.1v-42.5c-53.1-26.3-93.1-35.9-125.2-36h-3.1c-4.8.1-9.4.4-13.9.9-34 3.6-59.6 18-85.6 34.4-5.7-.8-13-1.8-18.3-.9-27.2-16.2-58.2-30.4-85.5-33.5-5.6-.6-11.5-.9-17.6-.9z" />
						</svg>
					</div>
				</a>
			</div>
			<div class="custom-file mb-20">
				<a href="/fingerprint/">
					<div class="custom-text">
						<h5 class="custom-file-label text-primary">OS - II</h5>
						<svg class="icon-bx svg-primary" style="fill: var(--f7-theme-color);" height="40px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
							<path fill="#000" d="M168.8 32.89l-32.6 32.53 21.3 21.17L190 54.08zm33.9 33.96l-9.9 9.91 123 123.04 9.9-9.9zm159.4 18.06c-3.7 0-7.4.1-10.9.3-31.9 1.78-56.7 11.76-78.3 26.39l65.5 65.6c3.5 7.3 52 96.2 65.5 123.3-9.7-6.4-123.4-65.4-123.4-65.4l-15.3-15.2v140.3c23.9-14.6 50.1-27.7 83.6-31.2 37.5-4 83.5 4.3 144.2 33.1V118.7c-51.7-22.99-93.3-32.89-127.2-33.69-1.3 0-2.5-.11-3.7-.1zm-230.8 1.03C100.4 88.93 63.44 99 19.05 118.7v243.4C79.85 333.3 125.8 325 163.3 329c33 5.2 58.1 15.8 83.6 31.2V201.6c-38.6-38.5-77.1-77.1-115.6-115.66zm48.8 3.55l-9.9 9.89 123 123.02 9.9-9.9zM336 205.1l-27.5 27.5 55.1 27.6zM143.8 346.7c-32 .3-71.85 9.8-124.75 36v42.5c60.8-28.8 106.75-37.1 144.25-33.1 18.6 2 34.9 6.9 49.8 13.3-4.7 6.1-9.3 13.3-13.9 21.7h117.2c-6-8.2-11.8-15.4-17.7-21.6 15-6.5 31.4-11.4 50.1-13.4 37.5-4 83.5 4.3 144.2 33.1v-42.5c-53.1-26.3-93.1-35.9-125.2-36h-3.1c-4.8.1-9.4.4-13.9.9-34 3.6-59.6 18-85.6 34.4-5.7-.8-13-1.8-18.3-.9-27.2-16.2-58.2-30.4-85.5-33.5-5.6-.6-11.5-.9-17.6-.9z" />
						</svg>
					</div>
				</a>
			</div>
		</div>

	</div>
	<!-- FAB ICON END -->

	<!-- time message start -->
	<?php
	function greeting()
	{
		date_default_timezone_set("Asia/Kolkata");
		$h = date('G');

		if ($h >= 5 && $h <= 11) {
			echo "Good Morning";
		} else if ($h >= 12 && $h <= 15) {
			echo "Good Afternoon";
		} else {
			echo "Good Evening";
		}
	};

	?>
	<!-- time message end	 -->
	<!-- Page Content -->
	<div class="page-content content-area pt-40">

		<div class="searchbar-backdrop"></div>

		<div class="container">

			<!-- Notifications -->
			<a href="/profile/" class="notification-bar">
				<div class="info">
					<span class="text"><?php greeting(); ?></span>
					<h2 class="title"> <?php echo $_SESSION['name']; ?></h2><!-- print user name -->
					<!-- <h2 class="title"> </h2>print user name -->
				</div>
				<div class="media settings">
					<img src="/img/avg.png" alt="" />
					<!-- <i class="fa fa-circle color-theme-orange active"></i> -->
				</div>
			</a>
			<!-- <a href="/color-theme/"><i href="/color-theme/" style="font-size:35px; padding-right:15px; top: 7px; z-index:9999999; position: absolute; right: 50;"class="fas fa-palette"></i></a> -->

			<!-- Featured Swiper -->
			<div data-space-between="20" data-slides-per-view="auto" data-centered-slides="false" class="swiper-container swiper-init mb-30 main-swiper chart-swiper">
				<div class="swiper-wrapper" style="height:110px;">
					<div class="swiper-slide" style="width: 120px;">
						<div class="card card-bx card-chart">
							<div class="dz-head">
								<h2 class="title"><?php echo $countp;}?></h2>
								<h6 class="sub-title">Present</h6>
							</div>

						</div>
					</div>
					<div class="swiper-slide" style="width: 120px;">
						<div class="card card-bx card-chart bg-secondary">
							<div class="dz-head">
								<h2 class="title"><?php $sqla="SELECT * FROM `attendence` WHERE (attend='absent' or attend='Absent') and rollno=$roll";
if ($result_a = mysqli_query($con, $sqla)) {

    // Return the number of rows in result set
    $counta = mysqli_num_rows( $result_a );
    echo $counta;}?></h2>
								<h6 class="sub-title">Absent</h6>
							</div>

						</div>
					</div>
					<div class="swiper-slide" style="width: 120px;">
						<div class="card card-bx card-chart color-theme-red">
							<div class="dz-head">
								<h2 class="title">--</h2>
								<h6 class="sub-title">Leave</h6>
							</div>

						</div>
					</div>
					<div class="swiper-slide" style="width: 120px;">
						<div class="card card-bx card-chart color-theme-purple">
							<div class="dz-head">
								<h2 class="title">--</h2>
								<h6 class="sub-title">Duty Leave</h6>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Featured Companies -->
			<div data-space-between="20" data-slides-per-view="auto" data-centered-slides="false" class="swiper-container swiper-init mb-20 main-swiper featured-swiper">
				<div class="swiper-wrapper" style="height:250px;">
					<div class="swiper-slide">
						<div class="card-bx featured-card">
							<div class="card-media">
								<a href="/syllabus/"><i style="font-size: 50px; margin-top:10;" class="fa fa-copy"></i></a>
							</div>
							<div class="card-info">
								<h5 class="title"><a href="/syllabus/">Web Designing</a></h5>
								<p class="location">Theory - BVSD 22</p>
								<h6 class="text-primary vacancy">Syllabus</h6>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card-bx featured-card">
							<div class="card-media color-theme-blue">
								<a href="/syllabus-php/"><i style="font-size: 50px; margin-top:10;" class="fa fa-copy"></i></a>
							</div>
							<div class="card-info">
								<h5 class="title"><a href="/syllabus-php/">Web Programming PHP</a></h5>
								<p class="location"> Theory- BVSD 24</p>
								<h6 class="text-primary vacancy">Syllabus</h6>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card-bx featured-card color-theme-red">
							<div class="card-media">
								<a href="/syllabus-os/"><i style="font-size: 50px; margin-top:10;" class="fa fa-copy"></i></a>
							</div>
							<div class="card-info">
								<h5 class="title"><a href="/syllabus-os/">OS - II</a></h5>
								<p class="location">Theory- BVSD 21</p>
								<h6 class="text-primary vacancy">Syllabus</h6>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card-bx featured-card">
							<div class="card-media">
								<a href="/syllabus-net/"><i style="font-size: 50px; margin-top:10;" class="fa fa-copy"></i></a>
							</div>
							<div class="card-info">
								<h5 class="title"><a href="/syllabus-net/">Networking & Internet</a></h5>
								<p class="location">Theory- BVSD 23</p>
								<h6 class="text-primary vacancy">Syllabus</h6>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- fcgvhbkjnl -->

			

			<script>
        const body = document.querySelector('html');
        const button = document.querySelector('#darkbutton');

        function toggleDark() {
            if (body.classList.contains('theme-dark')) {
                body.classList.remove('theme-dark');
                localStorage.setItem("theme", "light");
                button.innerHTML = "Turn on dark mode";
            } else {
                body.classList.add('dark');
                localStorage.setItem("theme", "dark");
                button.innerHTML = "Turn off dark mode";
            }
        }

        if (localStorage.getItem("theme") === "dark") {
            body.classList.add('dark');
            button.innerHTML = "Turn off dark mode";
        }

        document.querySelector('#darkbutton').addEventListener('click', toggleDark);
    </script>

			<!-- Latest Vacancies -->
			<div class="title-bar">
				<h4 class="dz-title">Lectures</h4>
				<a href="/search/" class="button text-capitalize"></a>
			</div>
			<div class="list search-list searchbar-found dz-list mt-0 mb-30">
				<ul class="row">
					<?php 
					
				$query = "SELECT * FROM `subject` WHERE class='".$_SESSION['class']."' AND sem='".$_SESSION['sem']."'";
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
					$_SESSION['ltc_incharge']= $row['ltc_incharge'];

					
					 
						
					echo '<li class="col-100 medium-50">
						<div class="card-bx job-card">
							<div class="card-media color-theme">
								<a href="/job-detail/"><i style="font-size: 36px;" class="fa fa-graduation-cap"></i></a>
							</div>
							<div class="card-info">
								<h6 class="item-title"><a href="/job-detail/">'.$_SESSION['ltc_name'].'</a></h6>
								<div class="list-info">
									<p>'.$_SESSION['ltc_incharge'].'</p>
									<p>Attendence</p>
								</div>
								<div class="item-footer">
									<a href="#" class="item-tag">'.$_SESSION['sub_code'].'</a>
									<h5 class="item-price text-primary">'.$_SESSION['ltc_type'].'</h5>
								</div>
							</div>
							<a href="#" class="bookmark-btn"  ">
								<i class="fas fa-circle"></i>
								<i class="far fa-circle"></i>
							</a>
						</div>
					</li>';
				}
			};
					?>
					
					
				</ul>
			</div>

		</div>
	</div>

</div>



<script>
	export default (props, {
		$on
	}) => {
		$on('pageInit', () => {
			$('.bookmark-btn').on('click', function() {
				$(this).toggleClass('active');
			});
		});
		return $render;
	}
</script>
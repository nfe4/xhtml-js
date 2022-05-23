<template>
	

	<div class="page account-area">
		<div class="page-content bottom-sp40">
			<div class="container">

				<div class="title-head">
					<h2 class="title">Student - Attender Login Portal</h2>
					<p>Login with the Attender Student account through Attender Login Portal</p>
				</div>
				<div class="toolbar tabbar tabbar-swiper tab-style-1">
					<div class="toolbar-inner">
						<a href="#" class="tab-link tab-link-active">SIGN IN</a>

					</div>
				</div>
				<div class="tabs">
					<div class="tab tab-active form-elements tabs">

						<form action="pages/area-chart.php" method="post" class="tab tab-active ajax-submit" id="tabA1">
							<div class="list">
								<ul class="row">
									<li class="item-content item-input col-100">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="text" name="rollno" placeholder="Username" class="form-control" required validate />
											</div>
										</div>
									</li>
									<li class="item-content col-100 item-input">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="password" name="password" placeholder="Password" class="form-control" required validate />
												<div class="show-pass">
													<span class="show">SHOW</span>
													<span class="hide">HIDE</span>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="clearfix">
								<button id="btnSubmit" type="submit" name="submit" class="col button button-large button-round button-fill">LOGIN</button>
								<p class="form-text">Forgot your password? <a href="#tabA2" data-route-tab-id="tabA2" class="tab-link">Reset here</a></p>
							</div>

						</form>


						<form action="/pages/resetprocess.php" method="post" class="tab" id="tabA2">
							<div class="list">
								<ul>
									<li class="item-content col-100 item-input">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="text" name="name" placeholder="Name" class="form-control" required validate />
											</div>
										</div>
									</li>
									<li class="item-content col-100 item-input">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="number" name="rollno" placeholder="College Roll No." class="form-control" required validate />
											</div>
										</div>
									</li>
									<li class="item-content col-100 item-input">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="email" name="email" placeholder="E-mail" class="form-control" required validate />
											</div>
										</div>
									</li>
									<li class="item-content item-input">
									<div class="item-inner">
										<!-- <div class="item-title item-label">Class</div> -->
										
										<div class="item-input-wrap input-dropdown-wrap" >
											<select placeholder="Please choose..." name="class" style="background: #f8f8f8;
    height: 64px;
    padding: 15px 25px;
    border-radius: 8px;
    border: 1px solid;
    border-color: #e9e9e9;
    font-size: 16px;
    color: #000000;
    font-weight: 400;" required validate>
											<?php
										include("db.php");
           								   $query = "SELECT * FROM courses";
              								$query_run = mysqli_query($con, $query);

           								   if (mysqli_num_rows($query_run) > 0) {
            					    foreach ($query_run as $row) {
           								 echo '<option name="class" value="'.$row['course_name'].'">'.$row['course_name'].'</option>' ;}}?>
										</select></div></div>
									</li>
									<li class="item-content item-input">
									<div class="item-inner">
										<!-- <div class="item-title item-label">Semester</div> -->
										<div class="item-input-wrap input-dropdown-wrap">
											<select name="sem" placeholder="Please choose..." required validate style="background: #f8f8f8;
    height: 64px;
    padding: 15px 25px;
    border-radius: 8px;
    border: 1px solid;
    border-color: #e9e9e9;
    font-size: 16px;
    color: #000000;
    font-weight: 400;">
												<option name="sem" value="Semester - I">Semester - I</option>
												<option name="sem" value="Semester - II">Semester - II</option>
												<option name="sem" value="Semester - III">Semester - III</option>
												<option name="sem" value="Semester - IV">Semester - IV</option>
												<option name="sem" value="Semester - V">Semester - V</option>
												<option name="sem" value="Semester - VI">Semester - VI</option>
											</select>
										</div>
									</div>
									</li>
									<li class="item-content item-input">
									<div class="item-inner">
										<!-- <div class="item-title item-label">Session</div> -->
										<div class="item-input-wrap input-dropdown-wrap">
											<select name="session" placeholder="Please choose..." required validate style="background: #f8f8f8;
    height: 64px;
    padding: 15px 25px;
    border-radius: 8px;
    border: 1px solid;
    border-color: #e9e9e9;
    font-size: 16px;
    color: #000000;
    font-weight: 400;">
												<option name="session" value="2020">2020-2021</option>
												<option name="session" value="2021" selected>2021-2022</option>
												<option name="session" value="2022">2022-2023</option>
											</select>
										</div>
									</div>

									</li>
								</ul>
							</div>
							<div class="clearfix">
							<button id="btnSubmit" type="submit" name="submit" class="col button button-large button-round button-fill">SUBMIT</button>

								<p class="form-text">Sign in to your registered account <a href="#tabA1" data-route-tab-id="tabA1" class="tab-link">Login here</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</template>

<script>
	export default (props, {
		$on
	}) => {
		$on('pageInit', () => {
			$('.show-pass').on('click', function() {
				$(this).toggleClass('active');
				var passInput = $(this).parent().find('input');
				var inputType = passInput.attr('type');
				if (inputType == 'password') {
					passInput.attr('type', 'text');
				} else if (inputType == 'text') {
					passInput.attr('type', 'password');
				}
			});
		});
		return $render;
	}
</script>
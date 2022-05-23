<?php

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
} 

debug_to_console("Student Sign-in");
					
					require('db.php');
					session_start();
					debug_to_console("Student Sign-in");
					// When form submitted, check and create user session.
					if(isset($_POST['username']) and isset($_POST['password'])) {
						// $username = stripslashes($_REQUEST['username']);    // removes backslashes
						// $username = mysqli_real_escape_string($con, $username);
						// $password = stripslashes($_REQUEST['password']);
						// $password = mysqli_real_escape_string($con, $password);
				
						$username = $_POST['username'];
						$password = $_POST['password'];
				
						debug_to_console("Check");
						// Check user is exist in the database
						$query    = "SELECT * FROM `users` WHERE username='$username'
									 AND password='" . md5($password) . "'";
						$result = mysqli_query($con, $query) or die(mysql_error());
						$rows = mysqli_num_rows($result);
						if ($rows == 1) {
							$_SESSION['username'] = $username;
							debug_to_console("1Check");
							// Redirect to user dashboard page
							header("Location: /home/");
						} else {
							echo '
                            
                            <div class="form">
								  <h3>Incorrect Username/password.</h3><br/>
								  <p class="link">Click here to <a href="login.php">Login</a> again.</p>
								  </div>
                                  ';
						}
					}
				?>

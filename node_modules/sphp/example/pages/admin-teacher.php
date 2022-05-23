<div class="page">
<?php
//include auth_session.php file on all user panel pages
include("db.php");
include("auth_session_admin.php");
?>
  <div class="navbar navbar-style-1">
    <div class="navbar-bg"></div>
    <div class="navbar-inner sliding">
      <div class="left">
        <a href="#" class="link back">
         <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M4.3419 8L10.2222 2.22222L8 2.73828e-07L1.22201e-06 8L8 16L10.2222 13.7778L4.3419 8Z" fill="#122261"/>
			</svg>
          <span class="if-not-md">Back</span>
        </a>
      </div>
      <div class="title">Teachers</div>
    </div>
  </div>
  <div class="page-content content-area pt-90 pt-0">
  <div class="container">
    <div class="block-title">Edit Teacher Details</div>

    <div class="data-table">
        <table border="1px">
          <thead>
            <tr>
              <th class="label-cell">Sr</th>
              <th class="numeric-cell">Teacher Name</th>
              <th class="numeric-cell">Username</th>
              <th class="numeric-cell">Designation</th>
              <th colspan = "2" class="numeric-cell" text-align="center">Actions</th>
             
            </tr>
          </thead>
          <tbody>
          <?php
              
              $query = "SELECT * FROM teacher";
              $query_run = mysqli_query($con, $query);
              if ($query_run->num_rows > 0) 
              {
                // OUTPUT DATA OF EACH ROW
                while($row = $query_run->fetch_assoc())
                {
            echo '<tr>
              <td class="label-cell">'.$row['teacher_id'].'</td>
              <td class="numeric-cell">'.$row['teacher_fname'].'</td>
              <td class="numeric-cell">'.$row['teacher_desig'].'</td>
              <td class="numeric-cell">'.$row['teacher_username'].'</td>
              <td class="numeric-cell"><a href="/edit/?id='.$row["teacher_id"].'" ><font color="BLUE">EDIT</font></a></td>
              <td class="numeric-cell"><a href="/delete/?id='.$row["teacher_id"].'" onclick="location.reload()"><font color="red">DELETE</font></a></td>
            </tr>'; } }
           else {
              echo "No Record Found";
          } ?>
            
          </tbody>
        </table>
      </div>
      <p align="center">All the teachers are displayed here. All the credintials regaeding to a teacher can be edited here with PASSWORD RESET.
</p>

</div>
  </div>
</div>

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
      <div class="title">Courses</div>
    </div>
  </div>
  <div class="page-content content-area pt-90 pt-0">
  <div class="container">
  <form method="post" action="pages/addcourses.php">
    <div class="block-title">Add a New Course</div>
    
    <div class="list inline-labels no-hairlines-md">
      <ul>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon"  style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-label">Name of the Course</div>
            <div class="item-input-wrap">
            <input type="text" name="course_name" placeholder="Course Name" required validate>
            </div>
          </div>
        </li>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon"  style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-label">Duration of the Course(yrs)</div>
            <div class="item-input-wrap input-dropdown-wrap">
            <select name="course_duration" placeholder="Course Duration" >
                <option name="course_duration"  value="1">1</option>
                <option name="course_duration"  value="2">2</option>
                <option name="course_duration" selected value="3">3</option>
                <option name="course_duration"  value="4">4</option>
              </select>
            </div>
            </div>
          </div>
        </li>
        
      </ul>
      <center><button name="submit" value="submit" style="width:70%;" class="col button button-fill">ADD</button></center>
    </div>



    </form>

    <div class="card data-table">
        <table>
          <thead>
            <tr>
              <th class="label-cell">Sr</th>
              <th class="numeric-cell">Course Name</th>
              <th class="numeric-cell">Course Duration(yrs)</th>
              <th class="numeric-cell">Action</th>
             
            </tr>
          </thead>
          <tbody>
          <?php
              
              $query = "SELECT * FROM courses";
              $query_run = mysqli_query($con, $query);

              if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
            echo '<tr>
              <td class="label-cell">'.$row['id'].'</td>
              <td class="numeric-cell">'.$row['course_name'].'</td>
              <td class="numeric-cell">'.$row['course_duration'].' years</td>
              <td class="numeric-cell"><a href="/delete/?id='.$row["id"].'" onclick="location.reload()"><font color="red">DELETE</font></a></td>
            </tr>'; } }
           else {
              echo "No Record Found";
          } ?>
            
          </tbody>
        </table>
      </div>
</div>
  </div>
</div>

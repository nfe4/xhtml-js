<div class="page">
<?php
//include auth_session.php file on all user panel pages
include("db.php");
include("auth_session_teacher.php");
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
      <div class="title">Add New Lecture
      </div>
    </div>
  </div>
  <div class="page-content">
  <div class="container">
    <div class="block-title">Fill New Lecture's Details</div>
<form method="post" action="pages/new-subject-add.php">
    <!-- <div class="block-title">Floating Labels</div> -->
    <div class="list no-hairlines-md">
      <ul>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon" style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-floating-label">Name of the Lecture</div>
            <div class="item-input-wrap">
              <input type="text" name="ltc_name" placeholder="Lecture's name"  required validate>
              <span class="input-clear-button"></span>
            </div>
          </div>
        </li>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon" style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-label">Lecture's Type</div>
            <div class="item-input-wrap input-dropdown-wrap">
              <select name="ltc_type" placeholder="Please choose...">
                <option  name="ltc_type"  value="Theory">Theory</option>
                <option  name="ltc_type"  value="Practical">Practical</option>
              </select>
            </div>
          </div>
        </li>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon" style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-label">Class</div>
            <div class="item-input-wrap input-dropdown-wrap">
              <select name="class" placeholder="Please choose...">
                <?php $query = "SELECT * FROM courses";
				              $result = mysqli_query($con, $query); 
                      if ($result->num_rows > 0) 
			{
				// OUTPUT DATA OF EACH ROW
				while($row = $result->fetch_assoc())
				{
	       echo '<option name="class" value="'.$row['course_name'].'">'.$row['course_name'].'</option>';}} ?>
              </select>
            </div>
          </div>
        </li>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon" style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-label">Semester</div>
            <div class="item-input-wrap input-dropdown-wrap">
              <select name="sem" placeholder="Please choose...">
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
          <div class="item-media">
            <i class="icon demo-list-icon" style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-floating-label">Subject Code</div>
            <div class="item-input-wrap">
              <input type="text" name="sub_code" placeholder="Subject Code"  required validate>
              <span class="input-clear-button"></span>
            </div>
          </div>
        </li>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon" style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-floating-label">Lecture Incharge</div>
            <div class="item-input-wrap">
              <input type="text" name="ltc_incharge" placeholder="Lecture Incharge" value="<?php echo $_SESSION['fname'], $_SESSION['lname']; ?>"  required validate>
              <span class="input-clear-button"></span>
            </div>
          </div>
        </li>

      </ul>
    </div>

 

          
          
    


<div style="height:70px;" class="space"></div>


    <div class="bottom-layer"><div class="toolbar toolbar-bottom container footer-button padding">
		<!-- <a href="#" class="button button-fill sheet-open button-large button" >Add</a> -->
    <button name="submit" value="submit" class="col button button button-fill sheet-open button-large">ADD</button>
  </div></div>
</div>
</form>
  </div>
</div>

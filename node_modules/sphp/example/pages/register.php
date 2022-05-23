<div class="page">
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
      <div class="title">Attendance Register</div>
    </div>
  </div>
  <div class="page-content content-area pt-90 pt-0">
  <div class="container">
    <div class="block-title">Select the attendance register</div>
    <div class="list inline-labels no-hairlines-md">
      <ul>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon"  style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-label">Session</div>
            <div class="item-input-wrap input-dropdown-wrap">
              <select placeholder="Please choose...">
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
              </select>
            </div>
          </div>
        </li>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon"  style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-label">Class</div>
            <div class="item-input-wrap input-dropdown-wrap">
              <select placeholder="Please choose...">
                <option value="Male">B.Voc - SD - I</option>
                <option value="Female">BCA - I</option>
              </select>
            </div>
          </div>
        </li>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon"  style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-label">Semester</div>
            <div class="item-input-wrap input-dropdown-wrap">
              <select placeholder="Please choose...">
                <option value="Male">Semester - I</option>
                <option value="Female">Semester - II</option>
                <option value="Female">Semester - III</option>
                <option value="Female">Semester - IV</option>
                <option value="Female">Semester - V</option>
                <option value="Female">Semester - VI</option>
              </select>
            </div>
          </div>
        </li>
        <li class="item-content item-input">
          <div class="item-media">
            <i class="icon demo-list-icon"  style="background-color: var(--f7-theme-color);"></i>
          </div>
          <div class="item-inner">
            <div class="item-title item-label">Subject</div>
            <div class="item-input-wrap input-dropdown-wrap">
              <select placeholder="Please choose...">
                <option value="Male">OS - I</option>
                <option value="Female">Web Designing</option>
                <option value="Female">PHP</option>
                <option value="Female">Web Designing</option>
              </select>
            </div>
          </div>
        </li>
        
      </ul>
    </div>

    <center><button style="width:70%;" class="col button button-fill">SELECT</button><center>


    <div class="card data-table">
        <table>
          <thead>
            <tr>
              <th class="label-cell">Sr</th>
              <th class="numeric-cell">Name</th>
              <th class="numeric-cell">Roll No.</th>
              <th class="numeric-cell">Status</th>
              <!-- <th class="numeric-cell"></th> -->
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="label-cell">1</td>
              <td class="numeric-cell">Yash</td>
              <td class="numeric-cell">1211673042022</td>
              <?php $a = 'present'; ?><td class="numeric-cell"><?php if($a == 'present'){echo '<mark style=" background-color:#4cd964; color: white;">Present</mark>';} else {echo'<font color="red">Absent</font>';} ?></td>
              <!-- <td class="numeric-cell">4.0</td> -->
            </tr>
            <tr>
            <td class="label-cell">2</td>
              <td class="numeric-cell">Parth</td>
              <td class="numeric-cell">1211673042003</td>
              <?php $a = 'present'; ?><td class="numeric-cell"><?php if($a == 'present'){echo '<mark style=" background-color:#4cd964; color: white;">Present</mark>';} else {echo'<font color="red">Absent</font>';} ?></td>
              
            </tr>
            <tr>
            <td class="label-cell">3</td>
              <td class="numeric-cell">Sahil</td>
              <td class="numeric-cell">1211673042004</td>
              <?php $a = 'prest'; ?><td class="numeric-cell"><?php if($a == 'present'){echo '<mark style=" background-color:#4cd964; color: white;">Present</mark>';} else {echo'<font color="red">Absent</font>';} ?></td>
              
            </tr>
            <tr>
              <td class="label-cell">4</td>
              <td class="numeric-cell">Dhruv</td>
              <td class="numeric-cell">1211673042004</td>
              <?php $a = 'prest'; ?><td class="numeric-cell"><?php if($a == 'present'){echo '<mark style=" background-color:#4cd964; color: white;">Present</mark>';} else {echo'<font color="red">Absent</font>';} ?></td>
              
            </tr>
          </tbody>
        </table>
      </div>
</div>
  </div>
</div>

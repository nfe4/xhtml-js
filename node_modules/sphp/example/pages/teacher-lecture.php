<template>
  <div class="page inner-details job-details">
  <?php 
include("db.php");
include("auth_session_teacher.php");
    ?>
    <div class="navbar navbar-style-1 navbar-transparent">
      <div class="navbar-inner">
        <div class="left">
          <a href="/home-teacher/">
            <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3419 8L10.2222 2.22222L8 2.73828e-07L1.22201e-06 8L8 16L10.2222 13.7778L4.3419 8Z" fill="#122261" />
            </svg>
          </a>
        </div>
        <div class="right">
          <a href="#" class="link panel-open" data-panel="left">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.6995 11.6977V0.674578C12.6995 0.299813 12.3997 0 12.0249 0C11.6501 0 11.3503 0.299813 11.3503 0.674578V11.6977C9.78631 12.0125 8.60205 13.3966 8.60205 15.0556C8.60205 16.7146 9.78631 18.0987 11.3503 18.4135V23.3204C11.3503 23.6952 11.6501 23.995 12.0249 23.995C12.3997 23.995 12.6995 23.6952 12.6995 23.3204V18.4135C14.2635 18.0987 15.4478 16.7146 15.4478 15.0556C15.4478 13.4016 14.2685 12.0125 12.6995 11.6977ZM12.0249 17.1293C10.8806 17.1293 9.95121 16.1999 9.95121 15.0556C9.95121 13.9113 10.8806 12.9819 12.0249 12.9819C13.1692 12.9819 14.0986 13.9113 14.0986 15.0556C14.0986 16.1999 13.1692 17.1293 12.0249 17.1293Z" fill="#12224F" />
              <path d="M4.43972 6.04122V0.674578C4.43972 0.299813 4.13991 0 3.76515 0C3.39038 0 3.09057 0.299813 3.09057 0.674578V6.04122C1.52655 6.35603 0.342285 7.74016 0.342285 9.39913C0.342285 11.0581 1.52655 12.4422 3.09057 12.757V23.3204C3.09057 23.6952 3.39038 23.995 3.76515 23.995C4.13991 23.995 4.43972 23.6952 4.43972 23.3204V12.752C6.00375 12.4372 7.18801 11.0531 7.18801 9.39413C7.18801 7.73517 6.00375 6.35603 4.43972 6.04122ZM3.76515 11.4728C2.62086 11.4728 1.69144 10.5434 1.69144 9.39913C1.69144 8.25484 2.62086 7.32542 3.76515 7.32542C4.90943 7.32542 5.83885 8.25484 5.83885 9.39913C5.83885 10.5434 4.90443 11.4728 3.76515 11.4728Z" fill="#12224F" />
              <path d="M20.9095 6.04122V0.674578C20.9095 0.299813 20.6096 0 20.2349 0C19.8601 0 19.5603 0.299813 19.5603 0.674578V6.04122C17.9963 6.35603 16.812 7.74016 16.812 9.39913C16.812 11.0581 17.9963 12.4422 19.5603 12.757V23.3254C19.5603 23.7002 19.8601 24 20.2349 24C20.6096 24 20.9095 23.7002 20.9095 23.3254V12.752C22.4735 12.4372 23.6577 11.0531 23.6577 9.39413C23.6577 7.73517 22.4785 6.35603 20.9095 6.04122ZM20.2349 11.4728C19.0906 11.4728 18.1612 10.5434 18.1612 9.39913C18.1612 8.25484 19.0906 7.32542 20.2349 7.32542C21.3792 7.32542 22.3086 8.25484 22.3086 9.39913C22.3086 10.5434 21.3792 11.4728 20.2349 11.4728Z" fill="#12224F" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <?php
    $id=$_GET['ltc_id'];
    $query = "SELECT * FROM `subject` WHERE ltc_id=$id ";
$result = mysqli_query($con, $query);
$_SESSION['sub_code']="";
				// OUTPUT DATA OF EACH ROW
				while($row = mysqli_fetch_assoc($result))
				{
          $query = "SELECT * FROM `subject` WHERE ltc_id=$id ";
          mysqli_query($con, $query);
					$_SESSION['ltc_name']= $row['ltc_name'];
					$_SESSION['ltc_type']= $row['ltc_type'];
					$_SESSION['class']= $row['class'];
					$_SESSION['sem']= $row['sem'];
				  $_SESSION['sub_code']= $row['sub_code'];
				  $id = $row['ltc_id'];

           echo'
           <div class="page-content content-area pt-0 bottom-sp100">
             <div class="head-details">
               <div class="dz-media " style=" background-color: var(--f7-theme-color-tint);">
                 <i style="font-size: 52px; margin-top: 20; color: white;" class="fa fa-graduation-cap"></i>
               </div>
               <h3 class="title">'.$_SESSION['ltc_name'].'</h3>
               <p class="mb-0 fs-20 mt-5">'.$_SESSION['sub_code'].'</p>
             </div>
       
             <div class="container">
               <div class="row align-items-center mb-30 mt-10">
                 <div class="col-60">
                   <h4 class="mt-0 mb-10">'.$_SESSION['class'].'</h4>
                   <p class="ma-0">'.$_SESSION['ltc_type'].'</p>
                 </div>
                 <div class="col-40">
                   <div class="clearfix text-align-right">
       
       
                     <label class="toggle toggle-init">
                       <input type="checkbox" />
                       <span class="toggle-icon"></span>
                     </label>
                     <p class="mb-0 fs-12 mt-15">Attendance</p>
                   </div>
                 </div>
               </div>';
        }
        
        ?>

        <?php
        include('auth_subject.php');
        $code=$_SESSION['sub_code'];
        $sqlcount="SELECT * FROM `attendence` WHERE sub_code=$code";
if ($result_count = mysqli_query($con, $sqlcount)) {
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result_count );
        ?>
      
        <div class="block-title" style="border-bottom:solid 1px lightgrey;">Today's Attendance</div>
        <!-- Info List -->
        <ul class="info-list mb-30">
          <li>
            <p class="title">Total</p>
            <h5 class="text-primary ma-0"><?php echo $rowcount;} ?></h5>
          </li>
          <li>
            <p class="title">Present</p>
            <h5 class="text-primary ma-0"><?php $sqlp="SELECT * FROM `attendence` WHERE (attend='present' or attend='Present') ";
if ($result_p = mysqli_query($con, $sqlp)) {

    // Return the number of rows in result set
    $countp = mysqli_num_rows( $result_p );
    echo $countp;}?></h5>
          </li>
          <li>
            <p class="title">Absent</p>
            <h5 class="text-primary ma-0"><?php $sqla="SELECT * FROM `attendence` WHERE attend='absent' or attend='Absent'";
if ($result_a = mysqli_query($con, $sqla)) {

    // Return the number of rows in result set
    $counta = mysqli_num_rows( $result_a );
    echo $counta;}?></h5>
          </li>
          <li>
            <p class="title">Precentage</p>
            <h5 class="text-primary ma-0"><?php echo ($countp/$rowcount)*100;?>%</h5>
          </li>
        </ul>

        <div class="custom-file mb-20">
          <a href="/syllabus/">
            <div class="custom-text">
              <h5 class="custom-file-label text-primary">Syllabus</h5>
              <i class="icon-bx svg-primary" style="font-size: 30px; color: var(--f7-theme-color);" class="fa fa-copy"></i>
            </div>
          </a>
        </div>

        <!-- Attendance table -->

        <div class="block-title">Attendance Table</div>

        <iframe style=" border:0px; margin-left:-31px; width:395px; height:400px;" src="/pages/attendtable.php"></iframe>

        <div class="custom-file mb-20">
          <a href="/syllabus/">
            <div class="custom-text">
              <h5 class="custom-file-label text-primary">Delete Lecture</h5>
              <i class="icon-bx svg-primary" style="font-size: 30px; color: var(--f7-theme-color);" class="fa fa-trash"></i>
            </div>
          </a>
        </div>

        <!-- attendance table end -->

      </div>
    </div>
    <div class="bottom-layer"></div>
    <div class="toolbar toolbar-bottom container footer-button padding">
      <a href="/register/" class="button button-fill sheet-open button-large button" data-sheet=".demo-sheet-swipe-to-close">Attendance Register</a>
    </div>

    



  </div>
</template>
<script type="text/javascript">
                            function pageRedirect() {
                                window.location.replace("/#!/attendregister.php/");
                            }      
                            setTimeout("pageRedirect()", 100);
                        </script>
<script>
  export default (props, {
    $f7,
    $on
  }) => {
    const photos = [{
        url: 'img/gallery/pic1.jpg',
        caption: 'Principal UI Designer'
      },
      {
        url: 'img/gallery/pic2.jpg',
        caption: 'Senior Frontend Programmer'
      },
      {
        url: 'img/gallery/pic3.jpg',
        caption: 'Software Engineer'
      }
    ];

    let calendarModal;
    let sheetSwipeToClose;
    let popup;
    let page;

    const openPopup = () => {
      popup.open();
    }
    const openPage = () => {
      page.open();
    }
    $on('pageInit', () => {

      // Custom modal
      calendarModal = $f7.calendar.create({
        inputEl: '#demo-calendar-modal',
        openIn: 'customModal',
        header: true,
        footer: true,
      });

      // Inline with custom toolbar
      var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
        'October', 'November', 'December'
      ];
      calendarInline = $f7.calendar.create({
        containerEl: '#demo-calendar-inline-container',
        value: [new Date()],
        renderToolbar: function() {
          return '<div class="toolbar calendar-custom-toolbar no-shadow">' +
            '<div class="toolbar-inner">' +
            '<div class="left">' +
            '<a href="#" class="link icon-only"><i class="icon las la-long-arrow-alt-left"></i></a>' +
            '</div>' +
            '<div class="center"></div>' +
            '<div class="right">' +
            '<a href="#" class="link icon-only"><i class="icon icon-forward"></i></a>' +
            '</div>' +
            '</div>' +
            '</div>';
        },
        on: {
          init: function(c) {
            $('.calendar-custom-toolbar .center').text(monthNames[c.currentMonth] + ', ' + c.currentYear);
            $('.calendar-custom-toolbar .left .link').on('click', function() {
              calendarInline.prevMonth();
            });
            $('.calendar-custom-toolbar .right .link').on('click', function() {
              calendarInline.nextMonth();
            });
          },
          monthYearChangeStart: function(c) {
            $('.calendar-custom-toolbar .center').text(monthNames[c.currentMonth] + ', ' + c.currentYear);
          }
        }
      });


      // Create PBs when page init
      popup = $f7.photoBrowser.create({
        photos: photos,
        type: 'popup',
      });
      sheetSwipeToClose = $f7.sheet.create({
        el: '.demo-sheet-swipe-to-close',
        swipeToClose: true,
        push: true,
        backdrop: true,
      });
      page = $f7.photoBrowser.create({
        photos: photos,
        type: 'page',
        backLinkText: 'Back',
      });
    });
    $on('pageBeforeRemove', () => {
      // Destroy PBs on page remove
      calendarModal.destroy();
      popup.destroy();
      if (sheetSwipeToClose) sheetSwipeToClose.destroy();
      page.destroy();

    });

    return $render;
  };
</script>
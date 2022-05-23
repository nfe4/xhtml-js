<html lang="en" class="color-theme-orange">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#ff8900">
    <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">

    <meta name="description" content="Attender - Electronic Attendance System" />
    <meta property="og:title" content="EAS - Attender" />
    <meta property="og:description" content="Attender - Electronic Attendance System" />
    <meta property="og:image" content="img/fac.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Title -->
    <title>Attender - Electronic Attendance System</title>

    <!-- Framework7 css -->
    <link rel="stylesheet" href="/css/framework7-bundle.css">
    <link rel="stylesheet" href="/css/app.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/css/line-awesome/css/line-awesome.min.css">

    <!-- Style css -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="img/fac.png">
    <link rel="icon" href="img/fac.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Extras -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>

<body>
    <style>
        #loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
        }

        #loader {
            display: block;
            position: relative;
            margin: 0 auto;
            top: 0;
            width: 75vh;
            height: 75vh;
            overflow: hidden;
            z-index: 999999;
        }

        #loader .image {
            /* padding: 15px; */
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }


        #loader-wrapper .loader-section {
            position: fixed;
            top: 0;
            width: 51%;
            height: 100%;
            background: #ffffff;
            z-index: 1000;
            -webkit-transform: translateX(0);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateX(0);
            /* IE 9 */
            transform: translateX(0);
            /* Firefox 16+, IE 10+, Opera */
        }

        #loader-wrapper .loader-section.section-left {
            left: 0;
        }

        #loader-wrapper .loader-section.section-right {
            right: 0;
        }

        /* Loaded */

        .loaded #loader-wrapper .loader-section.section-left {
            -webkit-transform: translateX(-100%);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateX(-100%);
            /* IE 9 */
            transform: translateX(-100%);
            /* Firefox 16+, IE 10+, Opera */
            -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
            transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
        }

        .loaded #loader-wrapper .loader-section.section-right {
            -webkit-transform: translateX(100%);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateX(100%);
            /* IE 9 */
            transform: translateX(100%);
            /* Firefox 16+, IE 10+, Opera */
            -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
            transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
        }

        .loaded #loader {
            opacity: 0;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .loaded #loader-wrapper {
            visibility: hidden;
            -webkit-transform: translateY(-100%);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateY(-100%);
            /* IE 9 */
            transform: translateY(-100%);
            /* Firefox 16+, IE 10+, Opera */
            -webkit-transition: all 0.3s 1s ease-out;
            transition: all 0.3s 1s ease-out;
        }

        /* JavaScript Turned Off */

        .no-js #loader-wrapper {
            display: none;
        }

        .no-js h1 {
            color: #222222;
        }

        #content {
            margin: 0 auto;
            padding-bottom: 50px;
            width: 80%;
            max-width: 978px;
        }
    </style>

    <!-- Demo content -->
    <div id="demo-content">


        <div id="loader-wrapper">
            <!-- preloader -->
            <div id="loader">
                <div class="image">
                    <style>
                        .circle,
                        .circle:before,
                        .circle:after {
                            border-radius: 50%;
                        }

                        .circle {
                            color: #ff8900;
                            font-size: 11px;
                            text-indent: -99999em;
                            margin: 55px auto;
                            position: relative;
                            width: 10em;
                            height: 10em;
                            box-shadow: inset 0 0 0 1em;
                            -webkit-transform: translateZ(0);
                            -ms-transform: translateZ(0);
                            transform: translateZ(0);
                        }

                        .circle:before,
                        .circle:after {
                            position: absolute;
                            content: '';
                        }

                        .circle:before {
                            width: 5.2em;
                            height: 10.2em;
                            background: #ffffff;
                            border-radius: 10.2em 0 0 10.2em;
                            top: -0.1em;
                            left: -0.1em;
                            -webkit-transform-origin: 5.1em 5.1em;
                            transform-origin: 5.1em 5.1em;
                            -webkit-animation: load2 2s infinite ease 1.5s;
                            animation: load2 2s infinite ease 1.5s;
                        }

                        .circle:after {
                            width: 5.2em;
                            height: 10.2em;
                            background: #ffffff;
                            border-radius: 0 10.2em 10.2em 0;
                            top: -0.1em;
                            left: 4.9em;
                            -webkit-transform-origin: 0.1em 5.1em;
                            transform-origin: 0.1em 5.1em;
                            -webkit-animation: load2 2s infinite ease;
                            animation: load2 2s infinite ease;
                        }

                        @-webkit-keyframes load2 {
                            0% {
                                -webkit-transform: rotate(0deg);
                                transform: rotate(0deg);
                            }

                            100% {
                                -webkit-transform: rotate(360deg);
                                transform: rotate(360deg);
                            }
                        }

                        @keyframes load2 {
                            0% {
                                -webkit-transform: rotate(0deg);
                                transform: rotate(0deg);
                            }

                            100% {
                                -webkit-transform: rotate(360deg);
                                transform: rotate(360deg);
                            }
                        }
                    </style>
                    <div class="circle">Loading...</div>
                </div>
                <!-- <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div> -->
            </div>
            <!-- preloader animation end -->
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
            <!-- preloader end -->
        </div>

        <div id="content">
            <div class="page-content">
                <div class="container">
                    <form action="" method="get">
                        <div class="list no-hairlines-md">
                            <ul>
                                <li>
                                    <div class="item-content item-input">
                                        <div class="item-inner">
                                            <div class="item-input-wrap">
                                                <input style="float: left; width: 75%;" type="date" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                                                                                                                                echo $_GET['from_date'];
                                                                                                                            } ?>" class="form-control" />
                                                <!-- <input style="float: left; width: 75%;" type="text" value="<?php if (isset($_GET['from_date'])) {
                                                                                                                    echo $_GET['from_date'];
                                                                                                                } ?>"  name="from_date" placeholder="Select date" readonly="readonly" id="demo-calendar-modal" /> -->
                                                <button name="submit" style="float: right; width: 25%;" class="col button button-fill color-theme">GO</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>


                    <?php $a = 'paresent'; ?>


                    <div class="card data-table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="label-cell">Sr.</th>
                                    <th class="numeric-cell">Name</th>
                                    <th class="numeric-cell">Roll No.</th>
                                    <th class="numeric-cell">Status</th>
                                    <th class="numeric-cell">Block</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $con = mysqli_connect("localhost", "root", "", "attender");

                                if (isset($_GET['submit']) /*&& isset($_GET['to_date'])*/) {
                                    $from_date = $_GET['from_date'];
                                    // $to_date = $_GET['to_date'];

                                    $query = "SELECT * FROM users WHERE created_at ='$from_date'";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                ?>
                                            <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['fname']; ?></td>
                                                <td><?= $row['roll']; ?></td>
                                                
                                                <?php $a = 'present'; ?><td class="numeric-cell"><?php if($a == 'present'){echo '<mark style=" background-color:#4cd964; color: white;">Present</mark>';} else {echo'<font color="red">Absent</font>';} ?></td>
              <?php $a = 'blocked'; ?><td class="numeric-cell"><?php if($a == 'blocked'){echo '<mark style=" background-color:red; color: white;">Blocked</mark>';} else {echo'<font color="red">Absent</font>';} ?></td>
            
                                            </tr>
                                <?php
                                        }
                                    } else {
                                        echo "No Record Found";
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Demo content -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')
    </script>
    <script>
        $(document).ready(function() {

            setTimeout(function() {
                $('body').addClass('loaded');
                $('h1').css('color', '#ffffff');
            }, 500);

        });
    </script>
    <!-- script -->
    <script src="/js/framework7-bundle.min.js"></script>
    <script src="/js/routes.js"></script>
    <script src="/js/store.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>
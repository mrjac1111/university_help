<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login, registration forms">
    <meta name="author" content="Seong Lee">

    <title>Help University || Education </title>

    <!-- Stylesheets -->
    <link href="../resources/sign-up-theam-resources/css/bootstrap.css" rel="stylesheet">
    <link href="../resources/sign-up-theam-resources/css/animation.css" rel="stylesheet">
    <link href="../resources/sign-up-theam-resources/css/checkbox/orange.css" rel="stylesheet">
    <link href="../resources/sign-up-theam-resources/css/preview.css" rel="stylesheet">
    <link href="../resources/sign-up-theam-resources/css/authenty.css" rel="stylesheet">
    <link rel="stylesheet" href="../resources/sign-up-theam-resources/ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/smoothness/jquery-ui.css">

    <!-- Font Awesome CDN -->
    <link href="../resources/sign-up-theam-resources/maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include '../lib/offering.php'

?>
<section id="authenty_preview">
    <section id="signin_main" class="authenty signin-main">
        <form action='../lib/login.php' method="post">
            <div class="section-content">
            <div class="wrap">
                <div class="container">
                    <div class="form-wrap">
                        <div class="row">
                            <div class="title" data-animation="fadeInDown" data-animation-delay=".8s">
                                <!--<h1>HELP University</h1>-->
                                <a href="../index.php">
                                    <img src="../resources/event-them-resources/img/hu_logo.png" alt="Education Template" />
                                </a>
                                <h5> <a href="../index.php">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                                            Back To Home
                                        </button>

                                    </a>
                                </h5>
                            </div>
                            <p class="text-danger" style="margin-left:40px" > <?php if (isset($_GET['login_err'])){
                                    echo $_GET['login_err'];
                                }?></p>

                            <div id="form_1" data-animation="bounceIn">
                                <div class="form-header">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="form-main">
                                    <div class="form-group">
                                       <!-- <p class="text-danger" style="margin-left:40px" > <?php /*if (isset($_GET['login_err'])){
                                                echo $_GET['login_err'];
                                            }*/?></p>
                                       --> <input name="user_id" type="text" id="un_1" class="form-control" placeholder="User ID" required="required">
                                        <input name="password" type="password" id="pw_1" class="form-control" placeholder="Password" required="required">
                                    </div>
                                    <button  type="submit" class="btn btn-block signin">Sign In</button>
                                </div>
                                <div class="form-footer">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <i class="fa fa-user"></i>
                                            <a href="#signup_student" id="signup_from_2">Student Sign Up</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <i class="fa fa-user"></i>
                                            <a href="#signup_lecturer" id="signup_from_1"> Lecturer Sign Up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>



    <section id="signup_lecturer" class="authenty signup-window">

        <form action='../lib/signup.php' method="post">
        <div class="section-content">
            <div class="wrap">
                <div class="container">
                    <div class="row form-wrap" data-animation="bounceIn">
                        <i class="fa fa-times-circle"></i>
                        <div class="title">
                            <h3> Lecturer Sign Up</h3>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1 student-signin">
                            <div class="sns-signin">
                                <a class="btn btn-primary" href="../index.php">
                                    Sign In For Lecturer</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-2 col-sm-1">
                            <div class="horizontal-divider"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="normal-signup">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required="required">
                                        <input type="text" class="form-control" name="lecturer_id" placeholder="Lecturer ID" required="required">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <input type="hidden" class="form-control" name="roll_id" value="2">
                                        <input type="hidden" id="d_id" class="form-control" name="department_id" value="">
                                        <div class="dropdown" >
                                            <button class="btn btn-primary dropdown-toggle" style="float: right ;margin-bottom: 20px;width: 100%;" type="button" data-toggle="dropdown">Select  Department
                                                <span class="caret"></span></button>
                                            <ul class="dropdown-menu" name="">
                                                <?php
                                                $offer = new offering();
                                                $courses = $offer->departments();
                                                ?>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-6">
                                            <a href="#password_recovery" id="forgot_from_3">need help?</a>
                                        </div> -->
                                        <div class="col-md-5 col-md-offset-7">
                                            <button type="submit" class="btn btn-block signup">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </form>
    </section>



    <section id="signup_student" class="authenty signup-window">
        <form action='../lib/signup.php' method="post">
            <div class="section-content">
            <div class="wrap">
                <div class="container">
                    <div class="row form-wrap" data-animation="bounceIn">
                        <i class="fa fa-times-circle"></i>
                        <div class="title">
                            <h3> Student Sign Up</h3>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1 student-signin">
                            <div class="sns-signin">
                                <a class="btn btn-primary"  href="../index.php">
                                    Sign In For Student</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-2 col-sm-1">
                            <div class="horizontal-divider"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="normal-signup">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required="required">
                                        <input type="text" class="form-control" name="student_id" placeholder="Student ID" required="required">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <input type="hidden" class="form-control" name="roll_id" value="1">
                                        <input type="hidden" id="c_id" class="form-control" name="course_id" value="">
                                        <div class="dropdown" >
                                            <button class="btn btn-primary dropdown-toggle" style="float: right;margin-bottom: 20px;width: 100%;" type="button" data-toggle="dropdown">Select Any Course
                                                <span class="caret"></span></button>
                                            <ul class="dropdown-menu" >
                                                <?php
                                                $offer = new offering();
                                                $courses = $offer->courses();
                                                ?>

                                            </ul>
                                        </div>
                                   </div>
                                    <div class="row">
                                        <!-- <div class="col-md-6">
                                            <a href="#password_recovery" id="forgot_from_3">need help?</a>
                                        </div> -->
                                        <div class="col-md-5 col-md-offset-7">
                                            <button type="submit" class="btn btn-block signup">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </form>
    </section>




    <!-- js library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="../resources/sign-up-theam-resources/ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="../resources/sign-up-theam-resources/ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
    <script src="../resources/sign-up-theam-resources/js/bootstrap.min.js"></script>
    <script src="../resources/sign-up-theam-resources/js/jquery.icheck.min.js"></script>
    <script src="../resources/sign-up-theam-resources/js/waypoints.min.js"></script>



    <!-- authenty js -->
    <script src="../resources/sign-up-theam-resources/js/authenty.js"></script>

    <!-- preview scripts -->
    <script src="../resources/sign-up-theam-resources/js/preview/jquery.malihu.PageScroll2id.js"></script>
    <script src="../resources/sign-up-theam-resources/js/preview/jquery.address-1.6.min.js"></script>
    <script src="../resources/sign-up-theam-resources/js/preview/scrollTo.min.js"></script>
    <script src="../resources/sign-up-theam-resources/js/preview/init.js"></script>


    <!-- preview scripts -->
    <script>
        (function($) {

            // get full window size
            $(window).on('load resize', function(){
                var w = $(window).width();
                var h = $(window).height();

                $('section').height(h);
            });

            // scrollTo plugin
            $('#signup_from_1').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
            $('#forgot_from_1').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
            $('#signup_from_2').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
            $('#forgot_from_2').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
            $('#forgot_from_3').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });


            // set focus on input
            var firstInput = $('section').find('input[type=text], input[type=email]').filter(':visible:first');

            if (firstInput != null) {
                firstInput.focus();
            }

            $('section').waypoint(function (direction) {
                var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
                target.focus();
            }, {
                offset: 300
            }).waypoint(function (direction) {
                var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
                target.focus();
            }, {
                offset: -400
            });


            // animation handler
            $('[data-animation-delay]').each(function () {
                var animationDelay = $(this).data("animation-delay");
                $(this).css({
                    "-webkit-animation-delay": animationDelay,
                    "-moz-animation-delay": animationDelay,
                    "-o-animation-delay": animationDelay,
                    "-ms-animation-delay": animationDelay,
                    "animation-delay": animationDelay
                });
            });

            $('[data-animation]').waypoint(function (direction) {
                if (direction == "down") {
                    $(this).addClass("animated " + $(this).data("animation"));
                }
            }, {
                offset: '90%'
            }).waypoint(function (direction) {
                if (direction == "up") {
                    $(this).removeClass("animated " + $(this).data("animation"));
                }
            }, {
                offset: '100%'
            });

        })(jQuery);
    </script>
    <script>
        function department_id(d_id) {
            document.getElementById("d_id").value = d_id;

        }
        function course_id(c_id) {
            document.getElementById("c_id").value = c_id;

        }
    </script>
</body>


</html>

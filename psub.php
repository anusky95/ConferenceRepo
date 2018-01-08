
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Conference Repository</title>
    <link rel="icon" href="images/DocumentIcon.png" type="image">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- templatemo 410 circle -->
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->


    <div class="bg-overlay"></div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">

                    <div class="logo-wrapper">
                        <h1 class="logo">
                            Admin Site

                        </h1>
                    </div> <!-- /.logo-wrapper -->

                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li><a href="mainpage.html">Home</a></li>
                            <li><a class="show-1" href="#">Manage Users</a></li>
                            <li><a class="show-3" href="#">Set Deadline</a></li>
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->

                    <!--Arrow Navigation-->

                </div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-12">

                <div id="menu-container">

                   <div id="menu-1" class="about content">
                        <div class="row">
                            <div class="toggle-content text-center" id="tab1">
                                    <h3>Paper Repository</h3>
                                    <font color="black">
                                        <form method="POST" action="managepeople.php">

<input type="submit" value="Author Details" name="role1"/>


<input type="submit" value="Program Committee Chair" name="role2"/>


<input type="submit" value="Program Committee Members" name="role3"/>

</form>

                                   </font>
                                </div>

                        </div> <!-- /.row -->

                        </div> <!-- /.about -->


                    <div class="col-md-8 col-sm-12">

                <div id="menu-container">
 <!-- /.about -->


                                        <div id="menu-3" class="services content">
                        <div class="row">
                                <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab4">

                                    <h4>Deadline</h4><br>
                                    <form method="post" action="deadlines.php">
                                    <font size="4" >
                                        <!--<input type="Date" name="pnames" size="40">-->
                                        <input type="date" name="psub"><br>
                                        <input id="button" type="submit" name="searchs" value="Notify">
                                    </font>
                                        </form>

                                    
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                            </div>
                    </div> <!-- /.services -->
                </div> <!-- /#menu-container -->
            </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->


    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">

			jQuery(function ($) {

                $.supersized({

                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        {
                            image: 'images/Theme.jpg'
                        }
                    ]

                });
            });

    </script>

<!--
Circle Template
http://www.templatemo.com/preview/templatemo_410_circle
-->
</body>
</html>

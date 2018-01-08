<!DOCTYPE html>

<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Conference Repository</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="images/DocumentIcon.png" type="image">

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
                            Portal

                        </h1>
                    </div> <!-- /.logo-wrapper -->

                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li><a href="mainpage.html">Home</a></li>
                            <li><a href="mainpage.html">SignOut</a></li>
                            <li><a href="allproj.php">Submission</a></li>
                            <li><a href="seedeaddate.php">Deadlines</a></li>
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->

                </div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-12">

                <div id="menu-container">


                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-7 col-sm-7">
                                    
                                </li>

                            </ul> <!-- /.tabs -->

                            <div class="col-md-12 col-sm-12">
                                <font color="white">
                                <div class="toggle-content text-center" id="tab4" style=background:transparent;>

                    <form method="POST" action="submits.php"enctype="multipart/form-data">
                    Paper Title<br><input type="text" name="Title" size="40"><br>
                    Main Author <br><input type="text" name="mname" size="40"><br>
                    Main Author's email <br><input type="text" name="memail" size="40"><br>
                    Name1<br><input type="text" name="Name1" size="40"><br>
                    Name2<br><input type="text" name="Name2" size="40"><br>
                    Name3<br><input type="text" name="Name3" size="40"><br>
                    Name4<br><input type="text" name="Name4" size="40"><br>
                    Revision<br><input type="text" name="revision" size="40"><br>
                    Format<br><input type="text" name="format" size="40"><br>
                    <input type="file" name="uploaded_file"><br>
                    <input id="button" type="submit" name="submit" value="Submit">
                  </form>

                              </font>
                         </div>   <!-- /.col-md-12 -->
                        </div> <!-- /.row

                </div> <! /#menu-container -->

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
                    slide_interval: 300000, // Length between transitions
                    transition: 6, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
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

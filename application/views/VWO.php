<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VWO</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/Eduflux/usersite/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="http://localhost/Eduflux/usersite/css/simple-sidebar.css" rel="stylesheet">
    <link href="http://localhost/Eduflux/font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
	<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/Eduflux">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost/Eduflux/index.php/home/VMBO">VMBO</a>
                    </li>
                    <li><a href="http://localhost/Eduflux/index.php/home/HAVO">HAVO</a>
                    </li>
                    <li><a href="http://localhost/Eduflux/index.php/home/VWO">VWO</a>
                    </li>
                    </li>
                    <li><a href="http://localhost/Eduflux/index.php/home/about">OverOns</a>
                    </li>
                    </li>
                    <li><a href="http://localhost/Eduflux/index.php/home/extra">Extra</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            	<li class="sidebar-brand"><a "http://localhost/Eduflux/index.php/home/VWO">VWO</a>
                </li>
                <li><a href="#">Wiskunde</a>
                </li>
                <li><a href="#">Natuurkunde</a>
                </li>
                <li><a href="#">Scheikunde</a>
                </li>
                <li><a href="#">Nederlands</a>
                </li>
                <li><a href="#">Engels</a>
                </li>
                </li>
                <li><a href="#">Latijn</a>
                </li>
            	</li>
                <li><a href="#">Frans</a>
                </li>
            	</li>
                <li><a href="#">Duits</a>
                </li>
            	</li>
                <li><a href="#">Maatschappijwetenschappen</a>
                </li>
                </li>
                <li><a href="#">Geschiedenis</a>
                </li>
                </li>
                <li><a href="#">CKV</a>
                </li>
                </li>
                <li><a href="#">KCV</a>
                </li>

            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="content-header">
                <h1>
                    <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
                    Simple Sidebar
                </h1>
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">This simple sidebar template has a hint of JavaScript to make the template responsive. It also includes Font Awesome icon fonts.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="well">The template still uses the default Bootstrap rows and columns.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="well">But the full-width layout means that you wont be using containers.</p>
                    </div>
                    <div class="col-md-4">
                        <p class="well">Three Column Example</p>
                    </div>
                    <div class="col-md-4">
                        <p class="well">Three Column Example</p>
                    </div>
                    <div class="col-md-4">
                        <p class="well">You get the idea! Do whatever you want in the page content area!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
</body>

</html>

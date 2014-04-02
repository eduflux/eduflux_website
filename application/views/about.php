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

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/Eduflux/usersite/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="http://localhost/Eduflux/usersite/css/simple-sidebaroud.css" rel="stylesheet">
    <link href="http://localhost/Eduflux/font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="http://localhost/Eduflux">Home</a>
                </li>
                <li><a href="http://localhost/Eduflux/index.php/home/VMBO">VMBO</a>
                </li>
                <li><a href="http://localhost/Eduflux/index.php/home/HAVO">HAVO</a>
                </li>
                <li><a href="http://localhost/Eduflux/index.php/home/VWO">VWO</a>
                </li>
                <li><a href="http://localhost/Eduflux/index.php/home/about">Over ons</a>
                </li>
                <li><a href="http://localhost/Eduflux/index.php/home/contact">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="content-header">
                <h1>
                    <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
                    Over ons
                </h1>
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">Wat zijn wij en wat doen we?</p>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript -->
    <script src="http://localhost/Eduflux/usersite/js/jquery-1.10.2.js"></script>
    <script src="http://localhost/Eduflux/usersite/js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
</body>

</html>

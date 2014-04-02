
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

    <title>Over Ons</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php">Eduflux</a>
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
                    <li><a href="http://localhost/Eduflux/index.php/home/contact">Contact</a>
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
                <li class="sidebar-brand"><a href="index.php">Home</a>
                </li>
                <li><a href="VMBO.php">VMBO</a>
                </li>
                <li><a href="HAVO.php">HAVO</a>
                </li>
                <li><a href="VWO.php">VWO</a>
                </li>
                <li><a href="about.php">Over ons</a>
                </li>
                <li><a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>


        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="content-header">
                <h1>
                    <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
                    Wie zijn wij?
                </h1>
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">This simple sidebar template has a hint of JavaScript to make the template responsive. It also includes Font Awesome icon fonts.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="well">
                            <b>EduFlux</b>
                            EduFlux richt zich op het toegankelijk maken van lesstof. We proberen voor leerlingen een goede uitleg van lesstof te verschaffen. Dit doen wij doormiddel van het doorlinken naar andere websites. Door het delen van links en videos hopen wij een zo compleet mogelijk beeld te geven van de lesstof. </br>

                            Onze website is ingedeeld naar de verschillende lagen van het middelbare onderwijs. Jij als leerling kan zelf ook content aan onze site toevoegen. Op deze manier help je niet alleen jezelf maar ook alle andere leerlingen.

                            Ons doel is om de drempel voor onderwijs toegankelijk te maken voor iedereen. Wat we zien is dat leerlingen niet de ruimte krijgen om zichzelf te ontwikkelen. 
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="well">
                            <h2>FlexApp</h2>
                            Binnenkort komt de mobiele app van eduflux beschikbaar. Dit komt omdat wij baas zijn. Fuck yeah.
                        </p>
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
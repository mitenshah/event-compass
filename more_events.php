<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EVENT COMPASS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li>
                        <img src="image/myimage.jpg" width="60px" height="60px"> 
                </li>
                </ul>               
                
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#download">Post an event</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">UserName</a>
                    </li>
                </ul>  
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">User Settings</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>           
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hi, Username
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Get to know about surrounding events of your interests.</p>
            </div>
        </div>
        <div id="wrapper">

        
        <!-- Events Row -->

        {for event in events}
            <div class="col-lg-12">
                <h2 class="page-header">Category - 1</h2>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>{Event.name}
                    <small>{Event.type}</small>
                </h3>
                <p>Short description</p>
            </div>
        {endfor}
            
            
           
            
            
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

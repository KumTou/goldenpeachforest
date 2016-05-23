<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sabrina Lam's Website</title>
    <!-- Icon -->
    <!-- for FF, Chrome, Opera -->
	<link rel="icon" type="image/png" href="img/icon.png" sizes="16x16">
	<link rel="icon" type="image/png" href="img/icon.png" sizes="32x32">
    <!-- Personal Stylesheets/Fonts -->
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<script> 
$(document).ready(function(){
	$("#button").click(function(){
		$("menu").hide()
		$("#nav").show()
	});
});
</script>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button id = "button" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <h4> Menu </h4>
                </button>
                <a class="navbar-brand" href="index.php"><img src = "img/logo2.png" alt = "logo" style = "width:150px; height: 140px; position: absolute; margin-left: 40%; top:-120px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id = "nav"class="nav navbar-nav">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="resume.html">Resume</a>
                    </li>
					<li>
                        <a href="projects.html">Projects</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
 	<div id = "wrapper">
        <div class="row">
            <div class="col-lg-12 text-center">
            	<h1>Welcome to the Forest</h1>
            	<h1>This page is still under construction, but feel free to take a look</h1>
                
            </div>
        </div>
        <!-- /.row -->
	</div>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
</body>

</html>

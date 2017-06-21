<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
  ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project NIRMALA</title>

   <!-- Bootstrap Core CSS -->
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-image: url('images/healthcare-mechanism.jpg'); background-size:100%">
<?php
require_once("navbar.html");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <a href="login.php"><center><h1 style="color:green">Project NIRMALA</h1></center></a>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
						<h3 class="panel-title"><strong>Enter Type Of Account :-</strong></h3>
                        
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
							<!--
                                <div class="form-group">
                                    <input class="form-control" placeholder="NAME" name="NAME" type="name" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="">
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Re-Enter the Password" name="password" type="password" value="">
                                </div>
								<div class="form-group">
							Type Of Account :-
							<select>
							<option value="Type">Select</option>
							<option value="Patient">Patient</option>
							<option value="Doctor">Doctor</option>
							<option value="Pharmacist">Pharmacist</option>
							</select>
							</div>                    -->
							
							
                                <!--div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div-->
                                <!-- Change this to a button or input when using this as a form -->
								<br><br>
                                <a href="doclogin.php" class="btn btn-lg btn-success btn-block">Doctor</a><br><br><br><br>
								<a href="patientlogin.php" class="btn btn-lg btn-success btn-block">Patient</a><br><br><br><br>
								<a href="pharmalogin.php" class="btn btn-lg btn-success btn-block">Pharmacy</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>

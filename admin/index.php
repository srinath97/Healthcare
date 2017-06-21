<!DOCTYPE html>
<html lang="en">
<?php
session_start();
    if(isset($_SESSION['admin']))
    {
      header("refresh:0,url=admin.php");
    }
    else
    {
        ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project NIRMALA</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

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
	<style>
	.click-me
			{
				color:#008000;
				}
	</style>			

</head>

<body style="background-image: url('images/healthcare-mechanism.jpg'); background-size:100%">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <center><p id="incor" style="color:red" class="error"></p></center>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Username" required name="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" required type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="submit">Submit</button>
                            </fieldset>
                        </form>
                        <?php
                            if(isset($_POST['submit']))
                            {
                                $f=1;
                                require_once("db.php");
                                if(isset($_POST['username'])) 
                                    $username=mysqli_real_escape_string($stat,$_POST['username']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Username cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['password'])) 
                                    $password=mysqli_real_escape_string($stat,$_POST['password']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Password cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                $query3="SELECT * FROM admin where username='$username';";
                                $result3=mysqli_query($stat,$query3);
                                if(mysqli_num_rows($result3)==1 && $r=mysqli_fetch_array($result3))
                                {
                                    if(crypt($password,$r['password'])==$r['password'])
                                    { 
                                        $_SESSION['admin']=$r['username'];
                                        echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin.php\">";
                                    }
                                    else
                                    {
                                        $f=0;
                                        ?>
                                        <script>
                                            var msg="Username or Password is incorrect !! ";
                                        </script>
                                        <?php
                                    }
                                }
                                else
                                {
                                    $f=0;
                                    ?>
                                    <script>
                                        var msg="Username or Password is incorrect !! ";
                                    </script>
                                    <?php
                                }
                                if($f==0)
                                {?>
                                    <script>
                                    document.getElementById("incor").innerHTML="ERROR : "+msg ;
                                    </script>
                                    <?php
                                }
                            }
                            
                        ?>
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
<?php
}
?>
</html>

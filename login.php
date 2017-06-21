<!DOCTYPE html>
<html lang="en">
<?php
session_start();
    if(isset($_SESSION['patient']))
    {
      header("refresh:0,url=index.php");
    }   
    else if(isset($_SESSION['doctor']))
    {
      header("refresh:0,url=docinterface.php");
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
    
    <!-- MetisMenu CSS -->
    <link href="assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">

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
<?php
require_once("navbar.html");
?>
<br><br><br><br>
    <div class="container" style="db2_field_display_size(:, column)">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
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
									<h5><strong>Dont have an account yet?</strong></h5>
									<a class="click-me" href="signup.php"><strong>Sign up</strong></a><br>
                                </div>
								
                                <!-- Change this to a button or input when using this as a form -->
								<button class="btn btn-lg btn-success btn-block" name="patient">Login as Patient</button>
                                <button class="btn btn-lg btn-success btn-block" name="doctor">Login as Doctor</button>
                            </fieldset>
                        </form>
                        <?php
                            if(isset($_POST['doctor']))
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
                                $query3="SELECT * FROM doctor where username='$username';";
                                $result3=mysqli_query($stat,$query3);
                                if(mysqli_num_rows($result3)==1 && $r=mysqli_fetch_array($result3))
                                {
                                    if(crypt($password,$r['password'])==$r['password'])
                                    {
                                        if($r['register']==true)
                                        { 
                                            $_SESSION['doctor']=$r['username'];
                                            echo "<meta http-equiv=\"refresh\" content=\"0;URL=docinterface.php\">";
                                        }
                                        else
                                        {
                                            $f=0;
                                            ?>
                                            <script>
                                                var msg="Your Account is not activated !! ";
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
                            else if(isset($_POST['patient']))
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
                                $query3="SELECT * FROM patient where username='$username';";
                                $result3=mysqli_query($stat,$query3);
                                if(mysqli_num_rows($result3)==1 && $r=mysqli_fetch_array($result3))
                                {
                                    if(crypt($password,$r['password'])==$r['password'])
                                    { 
                                        $_SESSION['patient']=$r['username'];
                                        echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
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
</body>
<?php
}
?>
</html>

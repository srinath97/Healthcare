<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    function succ()
    {
        echo"
            <script type='text/javascript'>
            document.getElementById('cor').innerHTML='Account Registered succesfully ! ' ;
            </script>"
            ;
}
    if(isset($_POST['username'])) 
        $username=$_POST['username'];
    else
        $username="";
    if(isset($_POST['name'])) 
        $name=$_POST['name'];
    else
        $name="";
    if(isset($_POST['aadhar'])) 
        $aadhar=$_POST['aadhar'];
    else
        $aadhar="";
    if(isset($_POST['gender'])) 
        $gender=$_POST['gender'];
    else
        $gender=""; 
    if(isset($_POST['email'])) 
        $email=$_POST['email'];
    else
        $email="";
    if(isset($_POST['contact'])) 
        $contact=$_POST['contact'];
    else
        $contact="";
    if(isset($_POST['bldgrp'])) 
        $bldgrp=$_POST['bldgrp'];
    else
        $bldgrp="";
    if(isset($_POST['econtact'])) 
        $econtact=$_POST['econtact'];
    else
        $econtact="";
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

<body style="background-image: url('images/healthcare-mechanism.jpg'); background-size:100%;background-attachment: fixed;">
<?php
require_once("navbar.html");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <a href="login.php"><center><h1 style="color:green">Project NIRMALA</h1></center></a>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
						<h3 class="panel-title"><strong>Patient Registration</strong></h3>
                        
                    </div>
                    <div class="panel-body">
                        <form role="form" enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <fieldset>
                                <center><div id="incor" style="color:red;" class="error"></p></center>
                                <center><div id="cor" style="color:green;"></p></center>
							    <div class="form-group">
								    <input class="form-control" placeholder="Enter Username" name="username" required autofocus value="<?php echo $username; ?>">
                                </div>
								
								<div class="form-group">
                                    <input class="form-control" placeholder="Enter Password" name="password1" type="Password" required autofocus>
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="password2" type="Password" required autofocus>
                                </div>
                                <div class="form-group">
								    <input class="form-control" placeholder="Name" name="name" autofocus required value="<?php echo $name; ?>">
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Aadhar Number" name="aadhar" type="Aadhar Number" value="<?php echo $aadhar; ?>" required autofocus>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="gender" required>
                                        <option selected disabled>Select your gender</option>
                                        <?php
                                        if($gender=="Male")
                                        {
                                            ?>
                                            <option selected value="Male">Male</option>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <option value="Male">Male</option>
                                            <?php
                                        }
                                        if($gender=="Female")
                                        {
                                            ?>
                                            <option selected value="Female">Female</option>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <option value="Female">Female</option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <b>Profile Picture:-</b>
                                <div class="form-group">
                                    <input class="form-control" type="file" name="file" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Blood Group" name="bldgrp" autofocus required value="<?php echo $bldgrp; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php echo $email; ?>" required>
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Enter Contact Number" name="contact" type="Contact Number" value="<?php echo $contact; ?>" autofocus>
                                </div>
								<strong><u><h4>Emergency Details :- </h4></u></strong>
								<div class="form-group">
                                    <input class="form-control" placeholder="Enter Emergency Contact Number" name="econtact" autofocus value="<?php echo $econtact; ?>">
                                </div>
                                <!--div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div-->
                                <!-- Change this to a button or input when using this as a form -->
                                <button name="submit" class="btn btn-lg btn-success btn-block">Sign up</button>
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
                                if(isset($_POST['password1'])) 
                                    $password=mysqli_real_escape_string($stat,$_POST['password1']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Password cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['password2'])) 
                                    $password1=mysqli_real_escape_string($stat,$_POST['password2']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Confirm password cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['name'])) 
                                    $name=mysqli_real_escape_string($stat,$_POST['name']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Name cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['aadhar'])) 
                                    $aadhar=mysqli_real_escape_string($stat,$_POST['aadhar']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Aadhar Number cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['gender'])) 
                                    $gender=mysqli_real_escape_string($stat,$_POST['gender']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Gender cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['bldgrp'])) 
                                    $bldgrp=mysqli_real_escape_string($stat,$_POST['bldgrp']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Blood Group cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['gender'])) 
                                    $gender=mysqli_real_escape_string($stat,$_POST['gender']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Gender cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['email'])) 
                                    $email=mysqli_real_escape_string($stat,$_POST['email']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="E-mail cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['contact'])) 
                                    $contact=mysqli_real_escape_string($stat,$_POST['contact']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Contact Number cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['econtact'])) 
                                    $econtact=mysqli_real_escape_string($stat,$_POST['econtact']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Emergency Contact Number cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(($_FILES['file']['name'])!="")
                                {
                                    define('GW_UPLOADPATH','images/patient/');
                                    $name1=$file=$_FILES['file']['name'];
                                    $file1=substr($name1,strrpos($name1, '.')+1);
                                    $target=GW_UPLOADPATH.time().'.'.$file1;
                                    $name1=time().'.'.$file1; 
                                    $imgchoose=true;
                                    if(($file1=="jpg"||$file1=="jpeg"||$file1=="png"||$file1=="bmp"||$file1=="JPG"||$file1=="JPEG"||$file1=="PNG"||$file1=="BMP"))
                                    {
                                        
                                    }
                                    else
                                    {
                                        $f=0;
                                        ?>
                                        <script>
                                            var msg="Image Format invalid!!";
                                        </script>
                                        <?php
                                    }
                                }
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Image cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if($f==1)
                                {
                                    if($password!=$password1)
                                    {
                                        $f=0;
                                        ?>  
                                        <script>
                                            var msg="Password and Confirm Password are different!!";
                                        </script>
                                        <?php                                    
                                    }
                                    else
                                    {
                                        require_once("db.php");
                                        $q="SELECT * from patient WHERE username='$username';";
                                        $r=mysqli_query($stat,$q);
                                        if(mysqli_num_rows($r)==0)
                                        {
                                            if($_FILES['file']['name']!=""&&move_uploaded_file($_FILES['file']['tmp_name'],$target))
                                            {
                                                $blowfish_salt=bin2hex(openssl_random_pseudo_bytes(22));
                                                $hash=crypt($password,"$2a$12$".$blowfish_salt);
                                                $q="INSERT INTO patient(id,name,username,password,aadhar,gender,image,email,contact,econtact) VALUES(NULL,'$name','$username','$hash','$aadhar','$gender','$name1','$email','$contact','$econtact')";
                                                $r=mysqli_query($stat,$q);
                                                succ();
                                            }
                                        }
                                        else
                                        {
                                            $f=0;
                                            ?>  
                                            <script>
                                                var msg="Username already present. Choose another username!!";
                                            </script>
                                            <?php
                                        }
                                    }
                                }
                                if($f==0)
                                {?>
                                    <script>
                                    document.getElementById("incor").innerHTML="ERROR : "+msg+"\n" ;
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
  
</html>

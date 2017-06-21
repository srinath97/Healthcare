
<html lang="en">
<?php
    session_start();
    function succ()
    {
        echo"
            <script type='text/javascript'>
            document.getElementById('cor').innerHTML='Profile Updated succesfully ! ' ;
            </script>"
            ;
    }
    if(!isset($_SESSION['patient']))
    {
      header("refresh:0,url=login.php");
    }
    else
    {
        $username=$_SESSION['patient'];
        require_once("db.php");
        $query="SELECT * FROM patient where username='$username';";
        $result=mysqli_query($stat,$query);
        if($result=mysqli_fetch_array($result))
        {
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project NIRMALA </title>
   
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
   
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<style>
	.dropdown-menu {
      background-color: #525252;
    }
	</style>
	
	<style>
	.FloatingWidget {position:fixed; left:0px; top:50%;transition: .5s ease;
    top: 400px;
    left: 1260px;
    right: -420px;
    bottom: -19	px;}


.button {
  margin: 0 10px;
}

.button {
  display: inline-block;
  vertical-align: top;
  position: relative;
  overflow: hidden;
  min-width: 96px;
  line-height: 46px;
  padding: 0 24px;
  font-size: 14px;
  color: white;
  text-align: center;
  text-decoration: none;
  text-shadow: 0 1px #154c86;
  background-color: #247edd;
  background-clip: padding-box;
  border: 1px solid;
  border-color: #1c65b2 #18589c #18589c;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.4), 0 1px 2px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.4), 0 1px 2px rgba(0, 0, 0, 0.2);
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.12) 51%, rgba(0, 0, 0, 0.04));
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.12) 51%, rgba(0, 0, 0, 0.04));
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.12) 51%, rgba(0, 0, 0, 0.04));
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.12) 51%, rgba(0, 0, 0, 0.04));
}
.button:before {
  content: '';
  position: absolute;
  top: -25%;
  bottom: -25%;
  left: -20%;
  right: -20%;
  border-radius: 50%;
  background: transparent;
  -webkit-box-shadow: inset 0 0 38px rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 0 38px rgba(255, 255, 255, 0.5);
}
.button:hover {
  background-color: #1a74d3;
}
.button:active {
  color: rgba(255, 255, 255, 0.9);
  text-shadow: 0 -1px #154c86;
  background: #1f71c8;
  border-color: #113f70 #154c86 #1c65b2;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, 0.4);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, 0.4);
  background-image: -webkit-linear-gradient(top, #1a5da5, #3a8be0);
  background-image: -moz-linear-gradient(top, #1a5da5, #3a8be0);
  background-image: -o-linear-gradient(top, #1a5da5, #3a8be0);
  background-image: linear-gradient(to bottom, #1a5da5, #3a8be0);
}
.button:active:before {
  top: -50%;
  bottom: -125%;
  left: -15%;
  right: -15%;
  -webkit-box-shadow: inset 0 0 96px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0 96px rgba(0, 0, 0, 0.2);
}

.button-green {
  text-shadow: 0 1px #0d4d09;
  background-color: #1ca913;
  border-color: #147b0e #11640b #11640b;
}
.button-green:hover {
  background-color: #159b0d;
}
.button-green:active {
  text-shadow: 0 -1px #0d4d09;
  background: #189210;
  border-color: #093606 #0d4d09 #147b0e;
  background-image: -webkit-linear-gradient(top, #126d0c, #20c016);
  background-image: -moz-linear-gradient(top, #126d0c, #20c016);
  background-image: -o-linear-gradient(top, #126d0c, #20c016);
  background-image: linear-gradient(to bottom, #126d0c, #20c016);
}

.button-red {
  text-shadow: 0 1px #72100d;
  background-color: #cd1d18;
  border-color: #9f1713 #891310 #891310;
}
.button-red:hover {
  background-color: #c01511;
}
.button-red:active {
  text-shadow: 0 -1px #72100d;
  background: #b61a15;
  border-color: #5b0d0b #72100d #9f1713;
  background-image: -webkit-linear-gradient(top, #921511, #e4201b);
  background-image: -moz-linear-gradient(top, #921511, #e4201b);
  background-image: -o-linear-gradient(top, #921511, #e4201b);
  background-image: linear-gradient(to bottom, #921511, #e4201b);
}

</style>

<style>
img.resize{
   width:20%;
   height:50%;
}
</style>


<style>
.contact{font-size: 20px;}
</style>


</head>
<body>
    
    <?php
    require_once("patientnavbar.php");
    ?>
		



<br><br><br><br><br><br>
   
  <div class="contact" >	
  <div class="row"  style="margin-left:30px">
    <div class="col-sm-8">
          <section class="panel">
          <center><div id="incor" style="color:red;" class="error"></div></center>
          <center><div id="cor" style="color:green;"></div></center>
          <form role="form" enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
             <table class="table table-hover" style="">
                <tr>
                   <td style="width:30%"><b>Name:</b></td>
                   <td><input class="form-control" placeholder="Name" name="name" type="name" autofocus required value="<?php echo $result['name']?>"></td>
                </tr>
            	  <tr>
                  <td><b>Aadhar Card:</b></td>
                  <td><input class="form-control" placeholder="Aadhar Number" name="aadhar" autofocus required value="<?php echo $result['aadhar']?>"></td>
                </tr>
                <tr>
                  <td><b>Gender:</b></td>
                  <td><select class="form-control" name="gender" required>
                        <option selected disabled>Select your gender</option>
                        <?php
                            $gender=$result['gender'];
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
                    </select></td>
                </tr>
          	    <tr>
                  <td><b>Profile Picture:</b></td>
                  <td><img style="width:20%" src="images/patient/<?php echo $result['image']; ?>"><input class="form-control" type="file" name="file"></td>
                </tr>
                <tr>
                  <td><b>E-Mail:</b></td>
                  <td><input class="form-control" placeholder="E-mail" name="email" type="email" required value="<?php echo $result['email'];?>"></td>
                </tr>
                
            	  <tr>
                  <td><b>Contact:</b></td>
                  <td><input class="form-control" placeholder="Enter Contact Number" name="contact" required autofocus value="<?php echo $result['contact'];?>"></td>
                </tr>
            	  <tr>
                  <td><b>Emergency Contact:</b></td>
                  <td><input class="form-control" placeholder="Enter Emergency Contact" required name="econtact" autofocus value="<?php echo $result['econtact']; ?>"></td>
                </tr>
                
             </table>
             <center><button name="submit" class="btn btn-lg btn-success btn-block" style="width:10%">EDIT</button></center>
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                $f=1;
                require_once("db.php");
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
                        if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
                        {
                            unlink("images/patient/".$result['image']);  
                        }
                        else
                        {
                            $f=0;
                            ?>
                            <script>
                                var msg="Image not uploaded!!";
                            </script>
                            <?php
                        }
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
                   $name1=$result['image'];
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
                if($f==1)
                {
                    require_once("db.php");
                    $q="UPDATE `patient` SET  `name`='$name',`aadhar`='$aadhar',`gender`='$gender',`image`='$name1',`email`='$email',`contact`='$contact', `econtact`='$econtact' WHERE username='$username';";
                    $r=mysqli_query($stat,$q);
                    ?>
                    <script type='text/javascript'>
                        document.getElementById('cor').innerHTML='Profile Updated succesfully ! ' ;
                    </script>
                    <?php
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=patienteditprofile.php\">";
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
    </section>
 </div>
 
 
</div>
	
    <!--End Contact Section -->
    <!--footer Section -->

    <?php
    require_once("patientfooter.php");
    ?>
    <!--End footer Section -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
	
	<?php
}
}?>

</body>
</html>

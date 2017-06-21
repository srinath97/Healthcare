<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    .error
    {
       color: red;
    }
</style>
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
    function succ1()
    {
        echo"
            <script type='text/javascript'>
            document.getElementById('cor').innerHTML='Account Registered succesfully ! Your Account will be verified and activated soon...' ;
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
    if(isset($_POST['degree'])) 
        $degree=$_POST['degree'];
    else
        $degree="";
    if(isset($_POST['experience'])) 
        $experience=$_POST['experience'];
    else
        $experience="";
    if(isset($_POST['fees'])) 
        $fees=$_POST['fees'];
    else
        $fees="";
    if(isset($_POST['gender'])) 
        $gender=$_POST['gender'];
    else
        $gender="";
    if(isset($_POST['type'])) 
        $doctortype=$_POST['type'];
    else
        $doctortype="";
    if(isset($_POST['regid'])) 
        $regid=$_POST['regid'];
    else
        $regid="";
    if(isset($_POST['email'])) 
        $email=$_POST['email'];
    else
        $email="";
    if(isset($_POST['contact'])) 
        $contact=$_POST['contact'];
    else
        $contact="";
    if(isset($_POST['Monday'])) 
        $mon=true;
    else
        $mon=false;
    if(isset($_POST['Tuesday'])) 
        $tue=true;
    else
        $tue=false;
    if(isset($_POST['Wednesday'])) 
        $wed=true;
    else
        $wed=false;
    if(isset($_POST['Thursday'])) 
        $thurs=true;
    else
        $thurs=false;
    if(isset($_POST['Friday'])) 
        $fri=true;
    else
        $fri=false;
    if(isset($_POST['Saturday'])) 
        $sat=true;
    else
        $sat=false;
    if(isset($_POST['Sunday'])) 
        $sun=true;
    else
        $sun=false;
    if(isset($_POST['fromh'])) 
        $fromh=$_POST['fromh'];
    else
        $fromh="";
    if(isset($_POST['fromm'])) 
        $fromm=$_POST['fromm'];
    else
        $fromm="";
    if(isset($_POST['toh'])) 
        $toh=$_POST['toh'];
    else
        $toh="";
    if(isset($_POST['tom'])) 
        $tom=$_POST['tom'];
    else
        $tom="";       
    if(isset($_POST['fromh1'])) 
        $fromh1=$_POST['fromh1'];
    else
        $fromh1="";
    if(isset($_POST['fromm1'])) 
        $fromm1=$_POST['fromm1'];
    else
        $fromm1="";
    if(isset($_POST['toh1'])) 
        $toh1=$_POST['toh1'];
    else
        $toh1="";
    if(isset($_POST['tom1'])) 
        $tom1=$_POST['tom1'];
    else
        $tom1="";       
    if(isset($_POST['clinic_name'])) 
        $clininc=$_POST['clinic_name'];
    else
        $clininc="";
    if(isset($_POST['clinic_address'])) 
        $clinincadd=$_POST['clinic_address'];
    else
        $clinincadd="";
    if(isset($_POST['pin'])) 
        $clinicpin=$_POST['pin'];
    else
        $clinicpin="";        
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


</head>

<body style="background-image: url('images/healthcare-mechanism.jpg'); background-size:100%;background-attachment: fixed;">

<?php
require_once("navbar.html");
?>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
						<h2 class="panel-title"><strong>Doctor Registration</strong></h2>
                    </div>
                    <div class="panel-body">
                        <form role="form" enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <center><p id="incor" class="error"></p></center>
							    </div>
                                <div class="form-group">
                                    <center><p id="cor" style="color:green;"></p></center>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Username" name="username" required value="<?php echo $username?>" autofocus>
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Enter Password" name="password" type="password" minlength="6" required autofocus>
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="password1" type="password" minlength="6" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="name" autofocus required value="<?php echo $name?>">
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Aadhar Number" name="aadhar" autofocus required value="<?php echo $aadhar?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Degree" name="degree" autofocus required value="<?php echo $degree?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Experience (in years)" type="number" name="experience" autofocus required value="<?php echo $experience?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Fees (in Rs)" name="fees" type="number" autofocus required value="<?php echo $fees?>">
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
                                <div class="form-group">
                                <select class="form-control" name="type" required="true">  
                                      <option selected disabled>Select Doctor Type</option>
                                      <?php
                                            require_once("db.php");
                                            $qu="SELECT * FROM doctortype ORDER BY type;";
                                            $re=mysqli_query($stat,$qu);
                                            while($ro=mysqli_fetch_array($re))
                                            {
                                                if($ro['type']==$doctortype)
                                                {?>
                                                    <option selected value="<?php echo $ro['type'] ?>" ><?php echo $ro['type'] ?></option>
                                                    <?php
                                                }
                                                else
                                                {?>
                                                    <option value="<?php echo $ro['type'] ?>" ><?php echo $ro['type'] ?></option>
                                                    <?php
                                                }
                                            }
                                      ?>
                                </select> 
                                </div>
                                <b>Profile Picture:-</b>
                                <div class="form-group">
                                    <input class="form-control btn btn-info" type="file" name="file" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Doctor Registration ID" name="regid" required autofocus value="<?php echo $regid?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required value="<?php echo $email?>">
                                </div>
								<div class="form-group">
								    <input class="form-control" placeholder="Enter Contact Number" name="contact" required autofocus value="<?php echo $contact?>">
                                </div>
                                <div class="form-group">
                                <div class="week">
								<strong><u><h4>Schedule Details :- </h4></u></strong>
								<b>Working Days :-</b><br>
                                <div class="btn-row">
                                  <div class="btn-group" data-toggle="buttons">
    								 
                                     <?php
                                        if($mon==true)
                                        {
                                            ?><label class="btn btn-info active" style="margin:3px">
                                            <input class="day1" name="Monday" type="checkbox" checked value="Monday"> Monday
                                            </label>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <label class="btn btn-info" style="margin:3px">
                                            <input class="day1" name="Monday" type="checkbox" value="Monday"> Monday
                                            </label>
                                        <?php
                                        }
                                        ?>
    								</label>
                                    
								    
                                     <?php
                                        if($tue==true)
                                        {
                                            ?><label class="btn btn-info active" style="margin:3px">
                                            <input class="day2" name="Tuesday" type="checkbox" checked value="Tuesday"> Tuesday
                                            </label>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <label class="btn btn-info" style="margin:3px">
                                            <input class="day2" name="Tuesday" type="checkbox" value="Tuesday"> Tuesday
                                            </label>
                                        <?php
                                        }
                                        ?>
                                    </label>
                                    
                                    
                                     <?php
                                        if($wed==true)
                                        {
                                            ?><label class="btn btn-info active" style="margin:3px">
                                            <input class="day3" name="Wednesday" type="checkbox" checked value="Wednesday"> Wednesday
                                            </label>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <label class="btn btn-info" style="margin:3px">
                                            <input class="day3" name="Wednesday" type="checkbox" value="Wednesday"> Wednesday
                                            </label>
                                        <?php
                                        }
                                        ?>
                                    </label>
                                    
                                    
                                     <?php
                                        if($thurs==true)
                                        {
                                            ?><label class="btn btn-info active" style="margin:3px">
                                            <input class="day4" name="Thursday" type="checkbox" checked value="Thursday"> Thursday
                                            </label>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <label class="btn btn-info" style="margin:3px">
                                            <input class="day4" name="Thursday" type="checkbox" value="Thursday"> Thursday
                                            </label>
                                        <?php
                                        }
                                        ?>
                                    </label>
                                    
                                    
                                     <?php
                                        if($fri==true)
                                        {
                                            ?><label class="btn btn-info active" style="margin:3px">
                                            <input class="day5" name="Friday" type="checkbox" checked value="Friday"> Friday
                                            </label>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <label class="btn btn-info" style="margin:3px">
                                            <input class="day5" name="Friday" type="checkbox" value="Friday"> Friday
                                            </label>
                                        <?php
                                        }
                                        ?>
                                    </label>
                                    
                                    
                                     <?php
                                        if($sat==true)
                                        {
                                            ?><label class="btn btn-info active" style="margin:3px">
                                            <input class="end1" name="Saturday" type="checkbox" checked value="Saturday"> Saturday
                                            </label>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <label class="btn btn-info" style="margin:3px">
                                            <input class="end1" name="Saturday" type="checkbox" value="Saturday"> Saturday
                                            </label>
                                        <?php
                                        }
                                        ?>
                                    </label>
                                    
                                    
                                     <?php
                                        if($sun==true)
                                        {
                                            ?><label class="btn btn-info active" style="margin:3px">
                                            <input class="end2" name="Sunday" type="checkbox" checked value="Sunday"> Sunday
                                            </label>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <label class="btn btn-info" style="margin:3px">
                                            <input class="end2" name="Sunday" type="checkbox" value="Sunday"> Sunday
                                            </label>
                                        <?php
                                        }
                                        ?>
                                    </label>
                                    </div>
                                    </div>
                                    </div>
									<div id="weekday" class="form-group" hidden="true">
									<strong>Week-Day Timings :-</strong> 
									<div style="margin:10px">From :-
                                    <select name="fromh">
                                    <option selected disabled value="">Hrs</option>
                                    <?php
                                        for($k=0;$k<=23;$k++)
                                        {
                                            if($k==0)
                                                $k="00";
                                            if($k==$fromh)
                                            {
                                                ?>
                                                <option selected value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <option value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                        </select>
                                         : 
                                        <select name="fromm">
                                        <option selected disabled value="">Min</option>
                                    <?php
                                        for($k=0;$k<=59 ;$k=$k+10)
                                        {
                                            if($k==0)
                                                $k="00";
                                            if($k==$fromm)
                                            {
                                                ?>
                                                <option selected value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <option value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                        </select>
    									<!--<input type="time" name="from_time" required value="<?php // echo $from; ?>"> -->
    								</div>
									
									<div style="margin:10px">To :-
									    <select name="toh" style="margin-left:18px">
                                            <option selected disabled value="">Hrs</option>
                                            <?php
                                                for($k=0;$k<=23;$k++)
                                                {
                                                    if($k==0)
                                                        $k="00";
                                                    if($k==$toh)
                                                    {
                                                        ?>
                                                        <option selected value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <option value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                         : 
                                        <select name="tom">
                                            <option selected disabled value="">Min</option>
                                            <?php
                                            for($k=0;$k<=59 ;$k=$k+10)
                                            {
                                                if($k==0)
                                                    $k="00";
                                                if($k==$tom)
                                                {
                                                    ?>
                                                    <option selected value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <option value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
									</div>
								</div>
                                <div id="weekend" class="form-group" hidden="true">
                                    <strong>Week-End Timings :-</strong> 
                                    <div style="margin:10px">From :-
                                    <select name="fromh1">
                                    <option selected disabled value="">Hrs</option>
                                    <?php
                                        for($k=0;$k<=23;$k++)
                                        {
                                            if($k==0)
                                                $k="00";
                                            if($k==$fromh1)
                                            {
                                                ?>
                                                <option selected value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <option value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                        </select>
                                         : 
                                        <select name="fromm1">
                                        <option selected disabled value="">Min</option>
                                    <?php
                                        for($k=0;$k<=59 ;$k=$k+10)
                                        {
                                            if($k==0)
                                                $k="00";
                                            if($k==$fromm1)
                                            {
                                                ?>
                                                <option selected value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <option value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                        </select>
                                        <!--<input type="time" name="from_time" required value="<?php // echo $from; ?>"> -->
                                    </div>
                                    
                                    <div style="margin:10px">To :-
                                        <select name="toh1" style="margin-left:18px">
                                            <option selected disabled value="">Hrs</option>
                                            <?php
                                                for($k=0;$k<=23;$k++)
                                                {
                                                    if($k==0)
                                                        $k="00";
                                                    if($k==$toh1)
                                                    {
                                                        ?>
                                                        <option selected value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <option value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                         : 
                                        <select name="tom1">
                                            <option selected disabled value="">Min</option>
                                            <?php
                                            for($k=0;$k<=59 ;$k=$k+10)
                                            {
                                                if($k==0)
                                                    $k="00";
                                                if($k==$tom1)
                                                {
                                                    ?>
                                                    <option selected value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <option value="<?php echo $k ;?>"><?php echo $k ;?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								<strong><u><h4>Clinic Details :- </h4></u></strong>
								<div class="form-group">
                                    <input class="form-control" placeholder="Enter Clinic Name"  required name="clinic_name" type="clinic_name" autofocus value="<?php echo $clininc; ?>">
                                </div>
								<div class="form-group">
                                    <textarea class="form-control" style="height:100px;resize:none" placeholder="Enter Clinic Address"  required name="clinic_address" autofocus><?php echo $clinincadd; ?></textarea>
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Enter PIN code"  required name="pin"  autofocus value="<?php echo $clinicpin; ?>">
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
                                if(isset($_POST['password1'])) 
                                    $password1=mysqli_real_escape_string($stat,$_POST['password1']);
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
                                if(isset($_POST['degree'])) 
                                    $degree=mysqli_real_escape_string($stat,$_POST['degree']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Degree cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['experience'])) 
                                    $experience=mysqli_real_escape_string($stat,$_POST['experience']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Experience cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['fees'])) 
                                    $fees=mysqli_real_escape_string($stat,$_POST['fees']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Fees cannot be empty!!";
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
                                if(isset($_POST['type'])) 
                                    $type=mysqli_real_escape_string($stat,$_POST['type']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Doctoe type cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(($_FILES['file']['name'])!="")
                                {
                                    define('GW_UPLOADPATH','images/doctor/');
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
                                if(isset($_POST['regid'])) 
                                    $regid=mysqli_real_escape_string($stat,$_POST['regid']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Registration ID cannot be empty!!";
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
                                if(isset($_POST['Monday'])) 
                                    $mon=true;
                                if(isset($_POST['Tuesday'])) 
                                    $tue=true;
                                if(isset($_POST['Wednesday'])) 
                                    $wed=true;
                                if(isset($_POST['Thursday'])) 
                                    $thurs=true;
                                if(isset($_POST['Friday'])) 
                                    $fri=true;
                                if(isset($_POST['Saturday'])) 
                                    $sat=true;
                                if(isset($_POST['Sunday'])) 
                                    $sun=true;
                                $flag=0;
                                if($mon==true||$tue==true||$thurs==true||$wed==true||$fri==true)
                                {
                                    $flag=1;
                                    if(isset($_POST['fromm'])&&isset($_POST['fromh'])&&isset($_POST['tom'])&&isset($_POST['toh']))
                                    { 
                                        $from=mysqli_real_escape_string($stat,$_POST['fromh']).":".mysqli_real_escape_string($stat,$_POST['fromm']);
                                        $to=mysqli_real_escape_string($stat,$_POST['toh']).":".mysqli_real_escape_string($stat,$_POST['tom']);
                                    }
                                    else
                                    {
                                        $f=0;
                                        ?>  
                                        <script>
                                            var msg="Timings cannot be empty!!";
                                        </script>
                                        <?php
                                    }
                                }
                                else
                                {
                                    $from="";
                                    $to="";
                                }
                                if($sat==true||$sun==true)
                                {
                                    $flag=1;
                                    if(isset($_POST['fromm1'])&&isset($_POST['fromh1'])&&isset($_POST['tom1'])&&isset($_POST['toh1']))
                                    { 
                                        $from1=mysqli_real_escape_string($stat,$_POST['fromh1']).":".mysqli_real_escape_string($stat,$_POST['fromm1']);
                                        $to1=mysqli_real_escape_string($stat,$_POST['toh1']).":".mysqli_real_escape_string($stat,$_POST['tom1']);
                                    }
                                    else
                                    {
                                        $f=0;
                                        ?>  
                                        <script>
                                            var msg="Timings cannot be empty!!";
                                        </script>
                                        <?php
                                    }
                                }
                                else
                                {
                                    $from1="";
                                    $to1="";
                                }
                                if($f!=0&&$flag==0)
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Select atleast 1 day!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['clinic_name'])) 
                                    $clininc=mysqli_real_escape_string($stat,$_POST['clinic_name']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Clinic Name cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['clinic_address'])) 
                                    $clinincadd=mysqli_real_escape_string($stat,$_POST['clinic_address']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Clininc Address cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                if(isset($_POST['pin'])) 
                                    $clinicpin=mysqli_real_escape_string($stat,$_POST['pin']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Clininc PIN cannot be empty!!";
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
                                        $q="SELECT * from doctor WHERE regid='$regid';";
                                        $r=mysqli_query($stat,$q);
                                        if(mysqli_num_rows($r)==1)
                                        {
                                            $register=true;
                                        }
                                        else
                                        {
                                            $register=false;
                                        }
                                        $re=mysqli_fetch_array($r);
                                        if($register==false||$re['username']=="")
                                        {
                                            $q="SELECT * from doctor WHERE username='$username';";
                                            $r=mysqli_query($stat,$q);
                                            if(mysqli_num_rows($r)==0)
                                            {
                                                if($_FILES['file']['name']!=""&&move_uploaded_file($_FILES['file']['tmp_name'],$target))
                                                {
                                                    $blowfish_salt=bin2hex(openssl_random_pseudo_bytes(22));
                                                    $hash=crypt($password,"$2a$12$".$blowfish_salt);
                                                    if($register==false)
                                                    {
                                                        $q="INSERT INTO `doctor` (`id`, `name`, `username`, `password`, `aadhar`, `gender`, `type`, `image`, `regid`, `email`, `contact`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`, `fromtime`, `totime`,`fromtime1`, `totime1`, `clinicname`, `clinicaddress`, `pincode`, `register`,`degree`,`experience`,`fees`) VALUES (NULL,'$name','$username','$hash','$aadhar','$gender','$type','$name1','$regid','$email','$contact','$mon','$tue','$wed','$thurs','$fri','$sat','$sun','$from','$to','$from1','$to1','$clininc','$clinincadd','$clinicpin','$register','$degree','$experience','$fees');";
                                                        $r=mysqli_query($stat,$q);
                                                        succ1();
                                                    }
                                                    else
                                                    {
                                                        $q="UPDATE `doctor` SET  `name`='$name',`username`='$username',`password`='$hash',`aadhar`='$aadhar',`gender`='$gender',`type`='$type',`image`='$name1',`email`='$email',`contact`='$contact',`day1`='$mon',`day2`='$tue',`day3`='$wed',`day4`='$thurs',`day5`='$fri',`day6`='$sat',`day7`='$sun',`fromtime`='$from',`totime`='$to',`fromtime1`='$from1',`totime1`='$to1',`clinicname`='$clininc',`clinicaddress`='$clinincadd',`pincode`='$clinicpin',`register`='$register', `degree`='$degree',`experience`='$experience',`fees`='$fees' WHERE regid='$regid';";
                                                        $r=mysqli_query($stat,$q);   
                                                        succ();
                                                    }
                                                    
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
                                        else
                                        {
                                            $f=0;
                                            ?>  
                                            <script>
                                                var msg="Doctor Registration ID is already registered!!";
                                            </script>
                                            <?php
                                        }
                                    }
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
    <script src="jquery-1.12.0.min.js"></script>
    <script src="jquery-migrate-1.2.1.min.js"></script>
    <script src="time.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <!--custome script for all page-->
    

</body>
</html>

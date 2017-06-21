
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
    if(!isset($_SESSION['doctor']))
    {
      header("refresh:0,url=login.php");
    }
    else
    {
        $username=$_SESSION['doctor'];
        require_once("db.php");
        $query="SELECT * FROM doctor where username='$username';";
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
   <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
   <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
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
    require_once("docnavbar.php");
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
                  <td style="width:30%"><b>Type:</b></td>
                  <td><select class="form-control" name="type" required="true">  
                    <option selected disabled>Select Doctor Type</option>
                    <?php
                          require_once("db.php");
                          $qu="SELECT * FROM doctortype ORDER BY type;";
                          $re=mysqli_query($stat,$qu);
                          while($ro=mysqli_fetch_array($re))
                          {
                              if($ro['type']==$result['type'])
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
                  </td>
                </tr>
            	  <tr>
                  <td><b>Aadhar Card:</b></td>
                  <td><input class="form-control" placeholder="Aadhar Number" name="aadhar" autofocus required value="<?php echo $result['aadhar']?>"></td>
                </tr>
                <tr>
                  <td><b>Degree:</b></td>
                  <td><input class="form-control" placeholder="Degree" name="degree" autofocus required value="<?php echo $result['degree']?>"></td>
                </tr>
                <tr>
                  <td><b>Experience:</b></td>
                  <td><input class="form-control" placeholder="Experience (in Yrs)" name="experience" autofocus required value="<?php echo $result['experience']?>"></td>
                </tr>
                <tr>
                  <td><b>Fees:</b></td>
                  <td><input class="form-control" placeholder="Fees (in Rs)" name="fees" autofocus required value="<?php echo $result['fees']?>"></td>
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
                  <td><img style="width:20%" src="images/doctor/<?php echo $result['image']; ?>"><input class="form-control" type="file" name="file"></td>
                </tr>
                <tr>
                  <td><b>E-Mail:</b></td>
                  <td><input class="form-control" placeholder="E-mail" name="email" type="email" required value="<?php echo $result['email'];?>"></td>
                </tr>
                <tr>
                  <td><b>Working Days:</b></td>
                  <td>
                  <?php 
                      $day=array("1"=>"Monday","2"=>"Tuesday","3"=>"Wednesday","4"=>"Thursday","5"=>"Friday","6"=>"Saturday","7"=>"Sunday");
                      $f=1;
                      ?>
                      <div class="form-group">
                          <div class="week">  
                            <strong><u><h4>Schedule Details :- </h4></u></strong>
                            <b>Working Days :-</b><br>
                                <div class="btn-row">
                                  <div class="btn-group" data-toggle="buttons">
                                  <?php
                                        if($result['day1']==true)
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
                                        if($result['day2']==true)
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
                                        if($result['day3']==true)
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
                                        if($result['day4']==true)
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
                                        if($result['day5']==true)
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
                                        if($result['day6']==true)
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
                                        if($result['day6']==true)
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
                                  
                      
                    </div>
                    </div>
                    </div>
                    </div>
                    </td>
                </tr>
                <tr id="weekday" class="form-group">
                  <td><b>Week-Day Timings:</b></td>
                  <td><div style="margin:10px">From :-
                    <?php 
                        $from=$result['fromtime'];
                        $to=$result['totime'];
                        $x=strpos($from, ':');
                        $fromh=substr($from, 0,$x);
                        $fromm=substr($from, $x+1,strlen($from));
                        $y=strpos($to, ':');
                        $toh=substr($to, 0,$y);
                        $tom=substr($to, $y+1,strlen($to));
                    ?>
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
                  </div>  </div>
                  </td>
                </tr>
                <tr id="weekend" class="form-group">
                  <td><b>Week-End Timings:</b></td>
                  <td><div style="margin:10px">From :-
                    <?php 
                        $from1=$result['fromtime1'];
                        $to1=$result['totime1'];
                        $x=strpos($from1, ':');
                        $fromh1=substr($from1, 0,$x);
                        $fromm1=substr($from1, $x+1,strlen($from1));
                        $y=strpos($to1, ':');
                        $toh1=substr($to1, 0,$y);
                        $tom1=substr($to1, $y+1,strlen($to1));
                    ?>
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
                  </td>
                </tr>
                
            	  <tr>
                  <td><b>Contact:</b></td>
                  <td><input class="form-control" placeholder="Enter Contact Number" name="contact" required autofocus value="<?php echo $result['contact'];?>"></td>
                </tr>
            	  <tr>
                  <td><b>Clinic Name:</b></td>
                  <td><input class="form-control" placeholder="Enter Clinic Name"  required name="clinic_name" type="clinic_name" autofocus value="<?php echo $result['clinicname']; ?>"></td>
                </tr>
                <tr>
                  <td><b>Clinic Address:</b></td>
                  <td><textarea class="form-control" style="height:100px;resize:none" placeholder="Enter Clinic Address"  required name="clinic_address" autofocus><?php echo $result['clinicaddress']; ?></textarea></td>
                </tr>
                <tr>
                  <td><b>Clinic Pincode:</b></td>
                  <td><input class="form-control" placeholder="Enter PIN code"  required name="pin"  autofocus value="<?php echo $result['pincode']; ?>"></td>
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
                if(isset($_POST['type'])) 
                    $type=mysqli_real_escape_string($stat,$_POST['type']);
                else
                {
                    $f=0;
                    ?>  
                    <script>
                        var msg="Doctor Type cannot be empty!!";
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
                    define('GW_UPLOADPATH','images/doctor/');
                    $name1=$file=$_FILES['file']['name'];
                    $file1=substr($name1,strrpos($name1, '.')+1);
                    $target=GW_UPLOADPATH.time().'.'.$file1;
                    $name1=time().'.'.$file1; 
                    $imgchoose=true;
                    if(($file1=="jpg"||$file1=="jpeg"||$file1=="png"||$file1=="bmp"||$file1=="JPG"||$file1=="JPEG"||$file1=="PNG"||$file1=="BMP"))
                    {
                        if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
                        {
                            unlink("images/doctor/".$result['image']);  
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
                    require_once("db.php");
                    $regid=$result['regid'];
                    $q="UPDATE `doctor` SET  `name`='$name',`type`='$type',`aadhar`='$aadhar',`gender`='$gender',`image`='$name1',`email`='$email',`contact`='$contact',`day1`='$mon',`day2`='$tue',`day3`='$wed',`day4`='$thurs',`day5`='$fri',`day6`='$sat',`day7`='$sun',`fromtime`='$from',`totime`='$to',`fromtime1`='$from1',`totime1`='$to1',`clinicname`='$clininc',`clinicaddress`='$clinincadd',`pincode`='$clinicpin', `degree`='$degree',`experience`='$experience',`fees`='$fees' WHERE regid='$regid';";
                    $r=mysqli_query($stat,$q);
                    ?>
                    <script type='text/javascript'>
                        document.getElementById('cor').innerHTML='Profile Updated succesfully ! ' ;
                    </script>
                    <?php
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=doceditprofile.php\">";
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
    require_once("docfooter.php");
    ?>
    
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
    
	<?php
}
}?>

</body>
</html>

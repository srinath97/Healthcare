<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
      header("refresh:0,url=index.php");
    }
    else
    {
        require_once("dir.php");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""><meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Project NIRMALA</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
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
  .FloatingWidget {position:fixed; left:0px; top:50%;transition: .5s ease;
    top: 420px;
    left: 1240px;
    right: -420px;
    bottom: -19 px;}


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
  .dropdown-menu {
      background-color: #525252;
    }
  </style>
  <style>
  .butons
  {
    position:relative;
    bottom:350px;
    margin-left:850px;
  }
  </style>
</head>
<body>
    <?php
    require_once("adminnavbar.php");
    ?>
<br><br><br><br><br>

  <div class="container" id="home">
        <div class="row">
            <div class="col-sm-4">
            <br><br><br><br><br>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Add Doctor</h2>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <fieldset>
                                <div class="alert alert-block alert-danger fade in" id="err" style="visibility:hidden;padding:0px">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                                  <strong id="error"></strong><small id="incor"></small>
                                </div>
                                <center><div id="cor" style="color:green" ></div></center>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Doctor Registration ID" required name="regid" autofocus>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="admin">Add Doctor</button>
                            </fieldset>
                        </form>
                        <?php
                            if(isset($_POST['admin']))
                            {
                                $f=1;
                                require_once("db.php");
                                if(isset($_POST['regid'])) 
                                    $regid=mysqli_real_escape_string($stat,$_POST['regid']);
                                else
                                {
                                    $f=0;
                                    ?>  
                                    <script>
                                        var msg="Doctor Registration ID cannot be empty!!";
                                    </script>
                                    <?php
                                }
                                $query3="SELECT * FROM doctor where regid='$regid';";
                                $result3=mysqli_query($stat,$query3);
                                if(mysqli_num_rows($result3)==0)
                                {
                                    $query3="INSERT INTO doctor(regid,register) VALUES('$regid',true);";
                                    $result3=mysqli_query($stat,$query3);
                                    ?>  
                                    <script>
                                        var msg="Doctor Registration ID succesfully inserted!!";
                                    </script>
                                    <?php
                                }
                                else
                                {
                                  $f=0;
                                  ?>
                                    <script>
                                    var msg="Registration ID already exist!!";
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
                                else
                                {?>
                                    <script>
                                    document.getElementById("cor").innerHTML=msg ;
                                    </script>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
                </div>
                <br><br>
                <div class="col-sm-7" style="margin-left:90px">
                  <center><h1 style="margin:-30px;font-size:40px">List of Doctors</h1></center>
                  <br><br>
                    <div class="alert alert-block alert-danger fade in" id="asd" style="visibility:hidden;padding:0px">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        <strong id="error1"></strong><small id="incor1"></small>
                    </div>
                    <div class="alert alert-success fade in" id="succ" style="visibility:hidden;padding:0px">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                              <i class="icon-remove"></i>
                          </button>
                          <strong id="success1"></strong> <small id="cor1"></small>
                      </div>      
                    <section class="panel">   
                    <form role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <fieldset>
                                <center><div id="incor1" style="color:red" class="error"></div></center>
                                <center><div id="cor1" style="color:green" ></div></center>
                      <table class="table table-bordered table-hover table-striped">
                          <th>
                             <td><b>Doctor ID</b></td>
                             <td><b>Name</b></td>
                             <td><b>Type</b></td>
                             <td><b>Username</b></td>
                          </th>
                              <?php
                              require_once("db.php");
                              $q="SELECT * FROM doctor WHERE register=true;";
                              $r=mysqli_query($stat,$q);
                              while($row=mysqli_fetch_array($r))
                              {
                                ?>
                                <tr>
                                  <td><input id="checkbox[]" name="checkbox[]" style="width:15px;height:15px" type="checkbox" value="<?php echo $row['id']; ?>" ></td>
                                  <td> <?php echo $row['regid']?></td>
                                  <?php 
                                  if($row['name']!="")
                                  {?>
                                      <td> <?php echo $row['name']?></td>
                                      <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <td style="color:red"> Not Registered</td>
                                    <?php
                                  }
                                  if($row['type']!="")
                                  {?>
                                      <td> <?php echo $row['type']?></td>
                                      <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <td style="color:red"> Not Registered</td>
                                    <?php
                                  }
                                  if($row['username']!="")
                                  {?>
                                      <td> <?php echo $row['username']?></td>
                                      <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <td style="color:red"> Not Registered</td>
                                    <?php
                                  }?>
                                  
                                </tr>

                              <?php
                            }
                            ?>
                           </table>
                           <button name="delete" class="btn btn-lg btn-danger btn-block" style="width:43%;float:left;margin-left:27%">Delete</button>
                          </fieldset>
                          </form>
                          <?php
                            if(isset($_POST['delete']))
                            {
                                if(@$checkbox = $_POST['checkbox'])
                                {
                                  $x=true;
                                  for($i=0;$i<count($checkbox);$i++)
                                  {
                                    $del_id = $checkbox[$i];
                                    $sql1 = "SELECT * FROM doctor WHERE id='$del_id'";
                                    $result1 = mysqli_query($stat,$sql1);
                                    $result1=mysqli_fetch_array($result1);
                                    $img=$result1['image'];
                                    $sql = "DELETE FROM doctor WHERE id='$del_id'";
                                    $result = mysqli_query($stat,$sql);
                                    if($img!="")
                                    {
                                      unlink($dir."/images/doctor/".$img);
                                    }
                                  }
                                  ?>
                                    <script type='text/javascript'>
                                        document.getElementById("success1").innerHTML="SUCCESS: " ;
                                        document.getElementById("succ").style.visibility="visible" ;
                                        document.getElementById("succ").style.padding="10px" ;
                                        document.getElementById("cor1").innerHTML=<?php echo $i ?>+" Account deleted successfully !!" ;
                                    </script>
                                  <?php
                                  echo "<meta http-equiv=\"refresh\" content=\"0;URL=doctors.php\">";
                                }
                                else
                                {
                                  ?>
                                  <script type='text/javascript'>
                                        document.getElementById("incor1").innerHTML="Please select atleast 1 checkbox." ;
                                        document.getElementById("error1").innerHTML="ERROR: " ;
                                        document.getElementById("asd").style.visibility="visible" ;
                                        document.getElementById("asd").style.padding="10px" ;
                                    </script>
                                    <?php
                                }
                            }
                            ?>
                       </div>
                   </section>
               </div>
         </div>
                 
          </div>
          </div>
<br><br>
  <h4 align="centre" style="margin-left:30px">"Good doctor's comforting and reassuring words are sometimes more powerful than medicines"-Brainstormers</h4>
    <!--End Header section  -->


    <!--About Section-->
  
    <!--End About Section-->

    <!-- Services Section-->
    
     <!--End Services Section-->

    <!-- Free Section -->
    
    <!--End Free Section -->

    <!-- Contact Section -->
    
    <!--End Contact Section -->
    <!--footer Section -->
    <?php
    require_once("adminfooter.php");
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
?>
</body>
</html>

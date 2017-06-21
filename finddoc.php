<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<?php
    session_start();
    if(!isset($_SESSION['patient']))
    {
      echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";
    }
    else
    {  
        require_once("db.php");
        if(isset($_GET['name']))
          $dname=$_GET['name'];
        else
          $dname='';
        if(isset($_GET['pin']))
          $pin=$_GET['pin'];
        else
          $pin='';
        if(isset($_GET['type']))
          $dtype=$_GET['type'];
        else
          $dtype='';
  ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Project NIRMALA </title>
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
  .dropdown-menu {
      background-color: #525252;
    }
  .maps
      {
        width:10000px;
        }
  </style>
  
  <style>
  .FloatingWidget {position:fixed; left:0px; top:50%;transition: .5s ease;
    top: 300px;
    left: 1257px;
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
3
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
.details
{
  margin:2px;
}
.detail
{
  font-size:17px;
  font-family:ARIAL;
}

</style>


</head>
<body>
    <?php require_once("patientnavbar.php"); ?>
    <!--End Navigation -->

    <!--Header section  -->
    
    <!--End Header section  -->


    <!--About Section-->
  <br><br><br>
    <section class="for-full-back color-white" id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Find Doctor</h1>
                </div>
            </div>
            <form role="form" enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
              <div class="row">
                  <div class="col-md-3 col-sm-3" style="margin-left:-130px;position:fixed">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Enter Doctor Name" name="name" value="<?php echo $dname; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter PINCODE" name="pin" value="<?php echo $pin; ?>">
                    </div>
                    <div class="form-group">
                          <select class="form-control" name="type">  
                          <option selected value="">Select Doctor Type</option>
                          <?php
                              require_once("db.php");
                              $qu="SELECT * FROM doctortype ORDER BY type;";
                              $re=mysqli_query($stat,$qu);
                              $f=1;
                              while($ro=mysqli_fetch_array($re))
                              {
                                  $f=0;
                                  if($ro['type']==$dtype)
                                  {
                                    ?>
                                    <option selected value="<?php echo $ro['type'] ?>" ><?php echo $ro['type'] ?></option>
                                    <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <option value="<?php echo $ro['type'] ?>" ><?php echo $ro['type'] ?></option>
                                    <?php
                                  }

                              }
                          ?>        
                        </select>
                  </div>
                  <button name="submit" class="btn btn-lg btn-success btn-block">Find Doctor</button>
              </div>
              <div class="col-md-9 col-sm-9 col-md-offset-3" style="margin-top:-30px;">
                  <table class="table table-bordered table-hover table-striped" style="font-size:16px;font-family:Century">
                    
                        <?php
                        require_once("db.php");
                        $q="SELECT * FROM doctor WHERE register=true AND username!=''";//"ORDER BY rating DESC;";
                        if($dname!='')
                          $q=$q." AND name LIKE '%$dname%' ";
                        if($pin!='')
                          $q=$q." AND pincode='$pin' ";
                        if($dtype!='')
                          $q=$q." AND type='$dtype' ";
                        $q=$q."ORDER BY rating DESC;";
                        $r=mysqli_query($stat,$q);
                        //echo $q;
                        $f=1;
                        while($row=mysqli_fetch_array($r))
                        {
                          $f=0;
                          ?>
                          <tr>
                            <td rowspan=5> <center><img src="images/doctor/<?php echo $row['image']?>" style="width:150px;height:150px"><br><br><!--<a href="bookdoctor.php?id=<?php echo $row['id']?>">--><div class="btn btn-lg btn-primary">Book Appointment </div></a></center></td>
                             <td><div class="details"><b>Name</b></div></td><td colspan=3><div class="detail"><?php echo $row['name']?><small><b><?php echo ' ( '. $row['degree'].' ) ' ?></b></small></b></div></td>
                             </tr>
                             <tr><td><div class="details"><b>Type</b></div></td><td><div class="detail"><?php echo $row['type']?></b></div></td>
                             <td><div class="details"><b>Experience</b></div></td><td><div class="detail"><?php echo $row['experience'].' Yrs'?></b></div></td>
                             </tr>
                             <tr><td><div class="details"><b>Address</b></div></td><td colspan=3><div class="detail"><?php echo $row['clinicaddress']." ".$row['pincode']?></b></div></td>
                             </tr>
                             <tr><td><div class="details"><b>Contact</b></div></td><td><div class="detail"><?php echo $row['contact']?></b></div></td><td><div class="details"><b>E-Mail</b></div></td><td><div class="detail"><?php echo $row['email']?></b></div></td>
                             </tr>
                             <tr><td><div class="details"><b>Ratings</b></div></td><td><div class="detail"><?php echo $row['rating']?></b></div></td>
                             <td><div class="details"><b>Fees</b></div></td><td><div class="detail"><?php echo $row['fees'].' Rs'?></b></div></td>
                             </tr>
                             <tr><td colspan=5 style="background-color:#ddd"></td>
                          </tr>
                        <?php
                      }?>
                      <p style="color:red;font-size:18px;">
                      <?php
                      if($f==1)
                      {
                        ?>
                        <br>
                        <?php
                        echo "No Doctors Found!!";
                        ?>
                        <br><br><br><br><br>
                        <?php
                      }
                      ?>
                      </p>
                  </table>
              </div>
          </div>
          </form>
          
          
     <br><br><br><br><br><br>
      <!--
      <div class="maps">   
          <div class ="maps-1" style='overflow:hidden; style="width:500px;height:180px;" position:relative top:-100px; left:250px'> 
            <div id='gmap_canvas' style='height:300px;width:1000px;'></div>

            <style>
            #gmap_canvas img
            {
              max-width:none!important;
              background:none!important
            }
            </style>
          </div>
          <script type='text/javascript'>
              function init_map()
              {
                var myOptions = {zoom:16,center:new google.maps.LatLng(12.9715987,77.59456269999998),mapTypeId: google.maps.MapTypeId.ROADMAP};
                map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.9715987,77.59456269999998)});
                infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>bangalore,India<br>'});
                google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
                infowindow.open(map,marker);
              }
              google.maps.event.addDomListener(window, 'load', init_map);
          </script>
      </div>    -->        
            </div>
        </div>
      
      </section>
            <?php require_once("patientfooter.php"); ?>
    <!--End About Section-->

    <!-- Services Section-->
    
     <!--End Services Section-->

    <!-- Free Section -->
    
    <!--End Free Section -->

    <!-- Contact Section -->
    

    <!--End Contact Section -->
    <!--footer Section -->
    <!--End footer Section -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
<?php
}
?>
</html>

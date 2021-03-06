
<html lang="en">
<?php
    session_start();
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
    require_once("docnavbar.php");
    ?>
		



<br><br><br><br><br><br>
   <img class="resize" src="images/doctor/<?php echo $result['image']; ?>"  alt="default profile" align="right">
  <div class="contact" >	
  <div class="row"  style="margin-left:30px">
              <div class="col-sm-8">
                    <section class="panel">
          
	<table class="table table-hover" style="">
      <tr>
         <td><b>Name</b></td>
         <td><b><?php echo $result['name']?></b></td>
      </tr>
      <tr>
        <td><b>Type</b></td>
        <td><b> <?php echo $result['type']?></b></td>
      </tr>
      <tr>
        <td><b>Username</b></td>
        <td><b> <?php echo $result['username']?></b></td>
      </tr>
  	  <tr>
        <td><b>Aadhar Card</b></td>
        <td><b> <?php echo $result['aadhar']?></b></td>
      </tr>
      <tr>
        <td><b>Degree</b></td>
        <td><b> <?php echo $result['degree']?></b></td>
      </tr>
      <tr>
        <td><b>Experience</b></td>
        <td><b> <?php echo $result['experience'].' Yrs'?></b></td>
      </tr>
      <tr>
        <td><b>Fees</b></td>
        <td><b> <?php echo $result['fees'].' Rs'?></b></td>
      </tr>
      <tr>
        <td><b>Gender</b></td>
        <td><b><?php echo $result['gender']?></b></td>
      </tr>
	    <tr>
        <td><b>Registration ID</b></td>
        <td><b> <?php echo $result['regid']?></b></td>
      </tr>
  	  <tr>
        <td><b>E-Mail</b></td>
        <td><b> <?php echo $result['email']?></b></td>
      </tr>
      <tr>
        <td><b>Rating</b></td>
        <td><b><?php echo $result['rating']?></b></td>
      </tr>
      <tr>
        <td><b>Working Days</b></td>
        <td><b><?php 
            $day=array("1"=>"Monday","2"=>"Tueday","3"=>"Wednesday","4"=>"Thursday","5"=>"Friday","6"=>"Saturday","7"=>"Sunday");
            $f=1;
            for($i=1;$i<=7;$i++)
            {
                if($result['day'.$i]==true)
                {
                    if($f==0)
                      echo ", ";
                    else
                      $f=0;
                    echo $day[$i];
                }
            }
            ?></b>
            </td>
      </tr>
      <?php
      if($result['fromtime']!="")
      {?>
        <tr>
          <td><b>Week-Day Timings</b></td>
          <td><b><?php 
              echo "From  ".$result['fromtime']." To ".$result['totime'];
              ?></b>
          </td>
        </tr>
      <?php
      }
      if($result['fromtime1']!="")
      {?>
        <tr>
          <td><b>Week-End Timings</b></td>
          <td><b><?php 
              echo "From  ".$result['fromtime1']." To ".$result['totime1'];
              ?></b>
          </td>
        </tr>
      <?php
      }
      ?>
  	  <tr>
        <td><b>Contact</b></td>
        <td><b><?php echo $result['contact']?></b></td></tr>
  	  <tr>
        <td><b>Clinic Name</b></td>
        <td><b> <?php echo $result['clinicname']; ?></b></td>
      </tr>
      <tr>
        <td><b>Clinic Address</b></td>
        <td><b> <?php echo $result['clinicaddress']; ?></b></td>
      </tr>
      <tr>
        <td><b>Clinic Pincode</b></td>
        <td><b> <?php echo $result['pincode']; ?></b></td>
      </tr>
   </table>
 </div>
 </section>
 </div>
 
 
</div>
	
    <!--End Contact Section -->
    <!--footer Section -->

    <?php
    require_once("docfooter.php");
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

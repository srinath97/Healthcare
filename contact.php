<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<?php
    session_start();
    if(!(isset($_SESSION['doctor'])||isset($_SESSION['patient'])))
    {
      echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";
    }
    else
    {
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB4zs3DVPbX6DvZEeTAI9EanzAIU3lTAQ8'></script> 
	<style>
	.dropdown-menu {
      background-color: #525252;
    }
	</style>
   
   
   <style>
	.FloatingWidget {position:fixed; left:0px; top:50%;transition: .5s ease;
    top: 300px;
    left: 1240px;
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
</head>
<body>
<?php
    if(isset($_SESSION['patient']))
        require_once("patientnavbar.php");
    else if(isset($_SESSION['doctor']))
        require_once("docnavbar.php");
    
    ?>

	<br><br><br>
    <section class="for-full-back color-white " id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-md-offset-0">
                    <h1>Contact us</h1>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 contact-cls">
                    <h3>OUR LOCATION </h3>
                    <div>
                        <span><i class="fa fa-home"></i>&nbsp; Address: 1st Floor, 25 Grace Mansion, Infantry Road, Bangalore</span>
                        <br />
                        <span><i class="fa fa-phone"></i>&nbsp;Phone: +91-9739049849</span>
                        <br />
                        <span><i class="fa fa-envelope-o"></i>&nbsp;E-Mail: support@icst.com</span>
                        <br />
                        <span><i class="fa fa-phone"></i>&nbsp;Call: 1800-8437-100</span>
                        <br />
                        <span><i class="fa fa-globe"></i>&nbsp;Web: www.indiancst.com</span>
                        <br /> <br />
                        
                    </div>
                  
                </div>
                <div class="col-md-8">
                <div class="maps">   
          <div class ="maps-1" style="overflow:hidden;width:100%;height:100%;"> 
            <div id='gmap_canvas' style="height:400px;width:750px;"></div>

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
      </div>
                <!--
                <div class="col-md-7">
                    <h2>We would love to hear from you :)</h2>
                    <p>
                        Our customers have always been our source of improvement. Feel free with communicate to us. 
						Queries,suggestions and complaints are all welcome.
                    </p>
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            -->
            </div>
        </div>
        </div>
    </section>
	        <?php
    if(isset($_SESSION['patient']))
        require_once("patientfooter.php");
    else if(isset($_SESSION['doctor']))
        require_once("docfooter.php");
    
  }
    ?>

    <!--End footer Section -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>

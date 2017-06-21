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
    else if(!isset($_GET['id']))
    {  
      echo "<meta http-equiv=\"refresh\" content=\"0;URL=finddoc.php\">"; 
    }
    else
    {
      require_once("db.php");
      $docid=$_GET['id'];
      $q="SELECT * FROM doctor where id='$docid' AND register=true AND username!=''";
      $r=mysqli_query($stat,$q);
      if(mysqli_num_rows($r)>0)
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
    <!-- bootstrap theme -->
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="assets/css/style-responsive.css" rel="stylesheet" />

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
   .choosetime{
   position:absolute;left:592px;top:380px;}
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
    
    <!-- Navigation -->
    <?php
        require_once("patientnavbar.php");
        ?>
    <!--Header section  -->
	
    
    <!--End Header section  -->


    <!--About Section-->
	
    <!--End About Section-->

    <!-- Services Section-->
    
     <!--End Services Section-->

    <!-- Free Section -->
    
    <!--End Free Section -->

    <!-- Contact Section -->
	<br><br><br>
    <section class="for-full-back color-white " id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Book Appointment</h1>
                </div>

            </div>
            <br>
            <div class="row">
                  
              <div class="col-md-12 col-sm-12" style="margin-top:-30px;">
                  <section class="panel">
                          <header class="panel-heading tab-bg-primary ">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#home">Home</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#about">About</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#profile">Profile</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#contact">Contact</a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="home" class="tab-pane active">
                                      Home
                                  </div>
                                  <div id="about" class="tab-pane">About</div>
                                  <div id="profile" class="tab-pane">Profile</div>
                                  <div id="contact" class="tab-pane">Contact</div>
                              </div>
                          </div>
                      </section>
                    
                        <?php
                        require_once("db.php");
                        $q="SELECT * FROM doctor WHERE id='$docid' ";//"ORDER BY rating DESC;";
                        $q=$q."ORDER BY rating DESC;";
                        $r=mysqli_query($stat,$q);
                        //echo $q;
                        $f=1;
                        if($row=mysqli_fetch_array($r))
                        {
                          $f=0;
                          ?>
                          
                            <img src="images/doctor/<?php echo $row['image']?>" style="width:150px;height:150px">
                             <div class="details"><b>Name</b></div><td colspan=3><div class="detail"><?php echo $row['name']?></b></div>
                             <div class="details"><b>Type</b></div><td colspan=3><div class="detail"><?php echo $row['type']?></b></div>
                             <div class="details"><b>Address</b></div><td colspan=3><div class="detail"><?php echo $row['clinicaddress']." ".$row['pincode']?></b></div>
                             <div class="details"><b>Contact</b></div><div class="detail"><?php echo $row['contact']?></b></div><div class="details"><b>E-Mail</b></div><div class="detail"><?php echo $row['email']?></b></div>
                             <div class="details"><b>Ratings</b></div><td colspan=3><div class="detail"><?php echo $row['rating']?></b></div>
                             
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
                  
              </div>
          </div>
            <div class="row">
                <div class="col-md-5 contact-cls">
                    <h3>OUR LOCATION </h3>
                    <div>
                        <span><i class="fa fa-home"></i>&nbsp; Address: New Your City</span>
                        <br />
                        <span><i class="fa fa-phone"></i>&nbsp;Phone: 82-230-567-899</span>
                        <br />
                        <span><i class="fa fa-envelope-o"></i>&nbsp;E-Mail: indo@yourdomain.com</span>
                        <br />
                        <span><i class="fa fa-phone"></i>&nbsp;Call: +50-987-009-0</span>
                        <br />
                        <span><i class="fa fa-globe"></i>&nbsp;Web: www.yourdomain.com</span>
                        <br /> <br />
                        <button style="position:absolute;left:530px;top:320px; type="submit" class="btn btn-primary" onclick="myFunction()">Book Appointment</button>
                    </div>
                  <script>
function myFunction() {
    alert("Appointment Booked");
	window.location = 'index.html';
}
</script>	
                </div>
                <div class="col-md-7">
                    <!-- this script got from www.htmlbestcodes.com-Coded by: Krishna Eydat -->

<script language="javascript">

var fontFace="verdana";
var fontSize=9;

var titleWidth=90;
var titleMode=1;
var dayWidth=12;
var dayDigits=1;

var titleColor="#cccccc";
var daysColor="#cccccc";
var bodyColor="#ffffff";
var dayColor="#ffffff";
var currentDayColor="#333333";
var footColor="#cccccc";
var borderColor="#333333";

var titleFontColor = "#333333";
var daysFontColor = "#333333";
var dayFontColor = "#333333";
var currentDayFontColor = "#ffffff";
var footFontColor = "#333333";

var calFormat = "yyyy/mm/dd";

var weekDay = 0;

// ------

// codes
var calWidth=200, calHeight=200, calOffsetX=-200, calOffsetY=16;
var calWin=null;
var winX=0, winY=0;
var cal="cal";
var cals=new Array();
var currentCal=null;

var yxMonths=new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
var yxDays=new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
var yxLinks=new Array("[close]", "[clear]");

var nav=navigator.userAgent.toLowerCase();;
var isOpera=(nav.indexOf("opera")!=-1)?true:false;
var isOpera5=(nav.indexOf("opera 5")!=-1 || nav.indexOf("opera/5")!=-1)?true:false;
var isOpera6=(isOpera && parseInt(navigator.appVersion)>=6)?true:false;
var isN6=(nav.indexOf("gecko")!=-1);
var isN4=(document.layers)?true:false;
var isMac=(nav.indexOf("mac")!=-1);
var isIE=(document.all && !isOpera && (!isMac || navigator.appVersion.indexOf("MSIE 4")==-1))?true:false;

if (isN4) {
  fontSize+=2;
}

var span2="</span>";

function span1(tag) {
  return "<span class='"+tag+"'>";
}
function spanx(tag, color) {
  return "."+tag+" { font-family:"+fontFace+"; font-size:"+fontSize+"px; color:"+color+"; }\n";
}

function a1(tag) {
  return "<a class='"+tag+"' href=";
}

function ax(tag, color) {
  return "."+tag+" { text-decoration:none; color:"+color+"; }\n";
}

function calOBJ(name, title, field, form) {
  this.name = name;
  this.title = title;
  this.field = field;
  this.formName = form;
  this.form = null
}

function setFont(font, size) {
  if (font != "") {
    fontFace=font;
  }
  if (size > 0) {
    fontSize=size;

    if (isN4) {
      fontSize+=2;
    }
  }
}

function setWidth(tWidth, tMode, dWidth, dDigits) {
  if (tWidth > 0) {
    titleWidth=tWidth;
  }
  if (tMode == 1 || tMode == 2) {
    titleMode=tMode;
  }
  if (dWidth > 0) {
    dayWidth=dWidth;
  }
  if (dDigits > 0) {
    dayDigits=dDigits;
  }
}

function setColor(tColor, dsColor, bColor, dColor, cdColor, fColor, bdColor) {
  if (tColor != "") {
    titleColor=tColor;
  }
  if (dsColor != "") {
    daysColor=dsColor;
  }
  if (bColor != "") {
    bodyColor=bColor;
  }
  if (dColor != "") {
    dayColor=dColor;
  }
  if (cdColor != "") {
    currentDayColor=cdColor;
  }
  if (fColor != "") {
    footColor=fColor;
  }
  if (bdColor != "") {
    borderColor=bdColor;
  }
}

function setFontColor(tColorFont, dsColorFont, dColorFont, cdColorFont, fColorFont) {
  if (tColorFont != "") {
    titleFontColor=tColorFont;
  }
  if (dsColorFont != "") {
    daysFontColor=dsColorFont;
  }
  if (dColorFont != "") {
    dayFontColor=dColorFont;
  }
  if (cdColorFont != "") {
    currentDayFontColor=cdColorFont;
  }
  if (fColorFont != "") {
    footFontColor=fColorFont;
  }
}

function setFormat(format) {
  calFormat = format;
}

function setSize(width, height, ox, oy) {
  if (width > 0) {
    calWidth=width;
  }
  if (height > 0) {
    calHeight=height;
  }

  calOffsetX=ox;
  calOffsetY=oy;
}

function setWeekDay(wDay) {
  if (wDay == 0 || wDay == 1) {
    weekDay = wDay;
  }
}

function setMonthNames(janName, febName, marName, aprName, mayName, junName, julName, augName, sepName, octName, novName, decName) {
  if (janName != "") {
    yxMonths[0] = janName;
  }
  if (febName != "") {
    yxMonths[1] = febName;
  }
  if (marName != "") {
    yxMonths[2] = marName;
  }
  if (aprName != "") {
    yxMonths[3] = aprName;
  }
  if (mayName != "") {
    yxMonths[4] = mayName;
  }
  if (junName != "") {
    yxMonths[5] = junName;
  }
  if (julName != "") {
    yxMonths[6] = julName;
  }
  if (augName != "") {
    yxMonths[7] = augName;
  }
  if (sepName != "") {
    yxMonths[8] = sepName;
  }
  if (octName != "") {
    yxMonths[9] = octName;
  }
  if (novName != "") {
    yxMonths[10] = novName;
  }
  if (decName != "") {
    yxMonths[11] = decName;
  }
}

function setDayNames(sunName, monName, tueName, wedName, thuName, friName, satName) {
  if (sunName != "") {
    yxDays[0] = sunName;
    yxDays[7] = sunName;
  }
  if (monName != "") {
    yxDays[1] = monName;
  }
  if (tueName != "") {
    yxDays[2] = tueName;
  }
  if (wedName != "") {
    yxDays[3] = wedName;
  }
  if (thuName != "") {
    yxDays[4] = thuName;
  }
  if (friName != "") {
    yxDays[5] = friName;
  }
  if (satName != "") {
    yxDays[6] = satName;
  }
}

function setLinkNames(closeLink, clearLink) {
  if (closeLink != "") {
    yxLinks[0] = closeLink;
  }
  if (clearLink != "") {
    yxLinks[1] = clearLink;
  }
}

function addCalendar(name, title, field, form) {
  cals[cals.length] = new calOBJ(name, title, field, form);
}

function findCalendar(name) {
  for (var i = 0; i < cals.length; i++) {
    if (cals[i].name == name) {
      if (cals[i].form == null) {
        if (cals[i].formName == "") {
          if (document.forms[0]) {
            cals[i].form = document.forms[0];
          }
        }
        else if (document.forms[cals[i].formName]) {
          cals[i].form = document.forms[cals[i].formName];
        }
      }

      return cals[i];
    }
  }

  return null;
}

function getDayName(y,m,d) {
  var wd=new Date(y,m,d);
  return yxDays[wd.getDay()].substring(0,3);
}

function getMonthFromName(m3) {
  for (var i = 0; i < yxMonths.length; i++) {
    if (yxMonths[i].toLowerCase().substring(0,3) == m3.toLowerCase()) {
      return i;
    }
  }

  return 0;
}

function getFormat() {
  var calF = calFormat;

  calF = calF.replace(/\\/g, '\\\\');
  calF = calF.replace(/\//g, '\\\/');
  calF = calF.replace(/\[/g, '\\\[');
  calF = calF.replace(/\]/g, '\\\]');
  calF = calF.replace(/\(/g, '\\\(');
  calF = calF.replace(/\)/g, '\\\)');
  calF = calF.replace(/\{/g, '\\\{');
  calF = calF.replace(/\}/g, '\\\}');
  calF = calF.replace(/\</g, '\\\<');
  calF = calF.replace(/\>/g, '\\\>');
  calF = calF.replace(/\|/g, '\\\|');
  calF = calF.replace(/\*/g, '\\\*');
  calF = calF.replace(/\?/g, '\\\?');
  calF = calF.replace(/\+/g, '\\\+');
  calF = calF.replace(/\^/g, '\\\^');
  calF = calF.replace(/\$/g, '\\\$');

  calF = calF.replace(/dd/i, '\\d\\d');
  calF = calF.replace(/mm/i, '\\d\\d');
  calF = calF.replace(/yyyy/i, '\\d\\d\\d\\d');
  calF = calF.replace(/day/i, '\\w\\w\\w');
  calF = calF.replace(/mon/i, '\\w\\w\\w');

  return new RegExp(calF);
}

function getDateNumbers(date) {
  var y, m, d;

  var yIdx = calFormat.search(/yyyy/i);
  var mIdx = calFormat.search(/mm/i);
  var m3Idx = calFormat.search(/mon/i);
  var dIdx = calFormat.search(/dd/i);

  y=date.substring(yIdx,yIdx+4)-0;
  if (mIdx != -1) {
    m=date.substring(mIdx,mIdx+2)-1;
  }
  else {
    var m = getMonthFromName(date.substring(m3Idx,m3Idx+3));
  }
  d=date.substring(dIdx,dIdx+2)-0;

  return new Array(y,m,d);
}

function hideCal() {
  calWin.close();
  calWin = null;
  window.status = "";
}

function getLeftIE(x,m) {
  var dx=0;
  if (x.tagName=="TD"){
    dx=x.offsetLeft;
  }
  else if (x.tagName=="TABLE") {
    dx=x.offsetLeft;
    if (m) { dx+=(x.cellPadding!=""?parseInt(x.cellPadding):2); m=false; }
  }
  return dx+(x.parentElement.tagName=="BODY"?0:getLeftIE(x.parentElement,m));
}
function getTopIE(x,m) {
  var dy=0;
  if (x.tagName=="TR"){
    dy=x.offsetTop;
  }
  else if (x.tagName=="TABLE") {
    dy=x.offsetTop;
    if (m) { dy+=(x.cellPadding!=""?parseInt(x.cellPadding):2); m=false; }
  }
  return dy+(x.parentElement.tagName=="BODY"?0:getTopIE(x.parentElement,m));
}

function getLeftN4(l) { return l.pageX; }
function getTopN4(l) { return l.pageY; }

function getLeftN6(l) { return l.offsetLeft; }
function getTopN6(l) { return l.offsetTop; }

function lastDay(d) {
  var yy=d.getFullYear(), mm=d.getMonth();
  for (var i=31; i>=28; i--) {
    var nd=new Date(yy,mm,i);
    if (mm == nd.getMonth()) {
      return i;
    }
  }
}

function firstDay(d) {
  var yy=d.getFullYear(), mm=d.getMonth();
  var fd=new Date(yy,mm,1);
  return fd.getDay();
}

function dayDisplay(i) {
  if (dayDigits == 0) {
    return yxDays[i];
  }
  else {
    return yxDays[i].substring(0,dayDigits);
  }
}

function calTitle(d) {
  var yy=d.getFullYear(), mm=yxMonths[d.getMonth()];
  var s;

  if (titleMode == 2) {
    s="<tr align='center' bgcolor='"+titleColor+"'><td colspan='7'>\n<table cellpadding='0' cellspacing='0' border='0'><tr align='center' valign='middle'><td align='right'>"+span1("title")+"<b>"+a1("titlea")+"'javascript:if(window.opener && !window.opener.closed && window.opener.moveYear) window.opener.moveYear(-10)'>&nbsp;&#171;</a>&nbsp;"+a1("titlea")+"'javascript:if(window.opener && !window.opener.closed && window.opener.moveYear) window.opener.moveYear(-1)'>&#139;&nbsp;</a></b>"+span2+"</td><td width='"+titleWidth+"'><b>"+span1("title")+yy+span2+"</b></td><td align='left'>"+span1("title")+"<b>"+a1("titlea")+"'javascript:if (window.opener && !window.opener.closed && window.opener.moveYear) window.opener.moveYear(1)'>&nbsp;&#155;</a>&nbsp;"+a1("titlea")+"'javascript:if (window.opener && !window.opener.closed && window.opener.moveYear) window.opener.moveYear(10)'>&#187;&nbsp;</a></b>"+span2+"</td></tr><tr align='center' valign='middle'><td align='right'>"+span1("title")+"<b>"+a1("titlea")+"'javascript:if (window.opener && !window.opener.closed && window.opener.prepMonth) window.opener.prepMonth("+d.getMonth()+")'>&nbsp;&#139;&nbsp;</a></b>"+span2+"</td><td width='"+titleWidth+"'><b>"+span1("title")+mm+span2+"</b></td><td align='left'>"+span1("title")+"<b>"+a1("titlea")+"'javascript:if (window.opener && !window.opener.closed && window.opener.nextMonth) window.opener.nextMonth("+d.getMonth()+")'>&nbsp;&#155;&nbsp;</a></b>"+span2+"</td></tr></table>\n</td></tr><tr align='center' bgcolor='"+daysColor+"'>";
  }
  else {
    s="<tr align='center' bgcolor='"+titleColor+"'><td colspan='7'>\n<table cellpadding='0' cellspacing='0' border='0'><tr align='center' valign='middle'><td>"+span1("title")+"<b>"+a1("titlea")+"'javascript:if(window.opener && !window.opener.closed && window.opener.moveYear) window.opener.moveYear(-1)'>&nbsp;&#171;</a>&nbsp;"+a1("titlea")+"'javascript:if (window.opener && !window.opener.closed && window.opener.prepMonth) window.opener.prepMonth("+d.getMonth()+")'>&#139;&nbsp;</a></b>"+span2+"</td><td width='"+titleWidth+"'><nobr><b>"+span1("title")+mm+" "+yy+span2+"</b></nobr></td><td>"+span1("title")+"<b>"+a1("titlea")+"'javascript:if (window.opener && !window.opener.closed && window.opener.nextMonth) window.opener.nextMonth("+d.getMonth()+")'>&nbsp;&#155;</a>&nbsp;"+a1("titlea")+"'javascript:if(window.opener && !window.opener.closed && window.opener.moveYear) window.opener.moveYear(1)'>&#187;&nbsp;</a></b>"+span2+"</td></tr></table>\n</td></tr><tr align='center' bgcolor='"+daysColor+"'>";
  }

  for (var i=weekDay; i<weekDay+7; i++) {
    s+="<td width='"+dayWidth+"'>"+span1("days")+dayDisplay(i)+span2+"</td>";
  }

  s+="</tr>";

  return s;
}

function calHeader() {
  return "<head>\n<title>"+currentCal.title+"</title>\n<style type='text/css'>\n"+spanx("title",titleFontColor)+spanx("days",daysFontColor)+spanx("foot",footColor)+spanx("day",dayFontColor)+spanx("currentDay",currentDayFontColor)+ax("titlea",titleFontColor)+ax("daya",dayFontColor)+ax("currenta",currentDayFontColor)+ax("foota",footFontColor)+"</style>\n</head>\n<body>\n<table align='center' border='0' bgcolor='"+borderColor+"' cellspacing='0' cellpadding='1'><tr><td>\n<table cellspacing='1' cellpadding='3' border='0'>";
}

function calFooter() {
  return "<tr bgcolor='"+footColor+"'><td colspan='7' align='center'>"+span1("foot")+"<b>"+a1("foota")+"'javascript:if (window.opener && !window.opener.closed && window.opener.hideCal) window.opener.hideCal()'>"+yxLinks[0]+"</a>&nbsp;&nbsp;"+a1("foota")+"'javascript:if (window.opener && !window.opener.closed && window.opener.clearDate) window.opener.clearDate()'>"+yxLinks[1]+"</a></b>"+span2+"</td></tr></table>\n</td></tr></table>\n</body>";
}

function calBody(d,day) {
  var s="", dayCount=1, fd=firstDay(d), ld=lastDay(d);

  if (weekDay > 0 && fd == 0) {
    fd = 7;
  }

  for (var i=0; i<6; i++) {
    s+="<tr align='center' bgcolor='"+bodyColor+"'>";
    for (var j=weekDay; j<weekDay+7; j++) {
      if (i*7+j<fd || dayCount>ld) {
        s+="<td>"+span1("day")+"&nbsp;"+span2+"</td>";
      }
      else {
        var bgColor=dayColor;
        var fgTag="day";
        var fgTagA="daya";
        if (dayCount==day) { 
          bgColor=currentDayColor; 
          fgTag="currentDay";
          fgTagA="currenta";
        }
        
        s+="<td bgcolor='"+bgColor+"'>"+span1(fgTag)+a1(fgTagA)+"'javascript: if (window.opener && !window.opener.closed && window.opener.pickDate) window.opener.pickDate("+dayCount+")'>"+(dayCount++)+"</a>"+span2+"</td>";
      }
    }
    s+="</tr>";
  }

  return s;
}

function moveYear(dy) {
  cY+=dy;
  var nd=new Date(cY,cM,1);
  changeCal(nd);
}

function prepMonth(m) {
  cM=m-1;
  if (cM<0) { cM=11; cY--; }
  var nd=new Date(cY,cM,1);
  changeCal(nd);
}

function nextMonth(m) {
  cM=m+1;
  if (cM>11) { cM=0; cY++;}
  var nd=new Date(cY,cM,1);
  changeCal(nd);
}

function changeCal(d) {
  var dd = 0;

  if (currentCal != null) {
    var calRE = getFormat();

    if (currentCal.form[currentCal.field].value!="" && calRE.test(currentCal.form[currentCal.field].value)) {
      var cd = getDateNumbers(currentCal.form[currentCal.field].value);
      if (cd[0] == d.getFullYear() && cd[1] == d.getMonth()) {
        dd=cd[2];
      }
    }
    else {
      var cd = new Date();
      if (cd.getFullYear() == d.getFullYear() && cd.getMonth() == d.getMonth()) {
        dd=cd.getDate();
      }
    }
  }

  var calendar=calHeader()+calTitle(d)+calBody(d,dd)+calFooter();

  calWin.document.open();
  calWin.document.write(calendar);
  calWin.document.close();
}

function markClick(e) {
  if (isIE || isOpera6) {
    winX=event.screenX;
    winY=event.screenY;
  }
  else if (isN4 || isN6) {
    winX=e.screenX;
    winY=e.screenY;

    document.routeEvent(e);
  }

  if (isN4 || isN6) { 
    document.routeEvent(e); 
  } 
  else { 
    event.cancelBubble=false; 
  } 

  return true;
}

function showCal(name) {
  var lastCal=currentCal;
  var d=new Date(), hasCal=false;

  currentCal = findCalendar(name);

  if (currentCal != null && currentCal.form != null && currentCal.form[currentCal.field]) {
    var calRE = getFormat();

    if (currentCal.form[currentCal.field].value!="" && calRE.test(currentCal.form[currentCal.field].value)) {
      var cd = getDateNumbers(currentCal.form[currentCal.field].value);
      d=new Date(cd[0],cd[1],cd[2]);

      cY=cd[0];
      cM=cd[1];
      dd=cd[2];
    }
    else {
      cY=d.getFullYear();
      cM=d.getMonth();
      dd=d.getDate();
    }

    var calendar=calHeader()+calTitle(d)+calBody(d,dd)+calFooter();

    if (calWin != null && typeof(calWin.closed)!="undefined" && !calWin.closed) {
      hasCal=true;
      calWin.moveTo(winX+calOffsetX,winY+calOffsetY);
    }

    if (!hasCal) {
      if (isIE || isOpera6) {
        calWin=window.open("","cal","toolbar=0,width="+calWidth+",height="+calHeight+",left="+(winX+calOffsetX)+",top="+(winY+calOffsetY));
      }
      else {
        calWin=window.open("","cal","toolbar=0,width="+calWidth+",height="+calHeight+",screenx="+(winX+calOffsetX)+",screeny="+(winY+calOffsetY));
      }
    }

    calWin.document.open();
    calWin.document.write(calendar);
    calWin.document.close();

    calWin.focus();
  }
  else {
    if (currentCal == null) {
      window.status = "Calendar ["+name+"] not found.";
    }
    else if (!currentCal.form) {
      window.status = "Form ["+currentCal.formName+"] not found.";
    }
    else if (!currentCal.form[currentCal.field]) {
      window.status = "Form Field ["+currentCal.formName+"."+currentCal.field+"] not found.";
    }

    if (lastCal != null) {
      currentCal = lastCal;
    }
  }
}

function get2Digits(n) {
  return ((n<10)?"0":"")+n;
}

function clearDate() {
  currentCal.form[currentCal.field].value="";
  hideCal();
}

function pickDate(d) {
  hideCal();
  window.focus();

  var date=calFormat;
  date = date.replace(/yyyy/i, cY);
  date = date.replace(/mm/i, get2Digits(cM+1));
  date = date.replace(/MON/, yxMonths[cM].substring(0,3).toUpperCase());
  date = date.replace(/Mon/i, yxMonths[cM].substring(0,3));
  date = date.replace(/dd/i, get2Digits(d));
  date = date.replace(/DAY/, getDayName(cY,cM,d).toUpperCase());
  date = date.replace(/day/i, getDayName(cY,cM,d));

  currentCal.form[currentCal.field].value=date;
  // IE5/Mac needs focus to show the value, weird.
  currentCal.form[currentCal.field].focus();
}
// ------

// user functions
function checkDate(name) {
  var thisCal = findCalendar(name);

  if (thisCal != null && thisCal.form != null && thisCal.form[thisCal.field]) {
    var calRE = getFormat();

    if (calRE.test(thisCal.form[thisCal.field].value)) {
      return 0;
    }
    else {
      return 1;
    }
  }
  else {
    return 2;
  }
}

function getCurrentDate() {
  var date=calFormat, d = new Date();
  date = date.replace(/yyyy/i, d.getFullYear());
  date = date.replace(/mm/i, get2Digits(d.getMonth()+1));
  date = date.replace(/dd/i, get2Digits(d.getDate()));

  return date;
}

function compareDates(date1, date2) {
  var calRE = getFormat();
  var d1, d2;

  if (calRE.test(date1)) {
    d1 = getNumbers(date1);
  }
  else {
    d1 = getNumbers(getCurrentDate());
  }

  if (calRE.test(date2)) {
    d2 = getNumbers(date2);
  }
  else {
    d2 = getNumbers(getCurrentDate());
  }

  var dStr1 = d1[0] + "" + d1[1] + "" + d1[2];
  var dStr2 = d2[0] + "" + d2[1] + "" + d2[2];

  if (dStr1 == dStr2) {
    return 0;
  }
  else if (dStr1 > dStr2) {
    return 1;
  }
  else {
    return -1;
  }
}

function getNumbers(date) {
  var calRE = getFormat();
  var y, m, d;

  if (calRE.test(date)) {
    var yIdx = calFormat.search(/yyyy/i);
    var mIdx = calFormat.search(/mm/i);
    var m3Idx = calFormat.search(/mon/i);
    var dIdx = calFormat.search(/dd/i);

    y=date.substring(yIdx,yIdx+4);
    if (mIdx != -1) {
      m=date.substring(mIdx,mIdx+2);
    }
    else {
      var mm=getMonthFromName(date.substring(m3Idx,m3Idx+3))+1;
      m=(mm<10)?("0"+mm):(""+mm);
    }
    d=date.substring(dIdx,dIdx+2);

    return new Array(y,m,d);
  }
  else {
    return new Array("", "", "");
  }
}
// ------

if (isN4 || isN6) {
  document.captureEvents(Event.CLICK);
}
document.onclick=markClick;
</script>
Date: <br><br>
<script language="javascript">
addCalendar("Calendar1", "Select Date", "firstinput", "sampleform");

setWidth(90, 1, 15, 1);
</script>

<form name="sampleform">
<input type="text" name="firstinput" size=20> <small><a href="javascript:showCal('Calendar1')">Select Date</a></small>
</form>

</body>
</html>
                    </form>
                </div>

            </div>
        </div>
    </section>
	
			
<br>
    <?php require_once("patientfooter.php"); ?>
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
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- gritter -->
   
    <!-- custom gritter script for this page only-->
    <script src="assets/js/gritter.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="assets/js/scripts.js"></script>

</body>
<?php
}
else
{
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=finddoc.php\">";
}
}
?>
</html>

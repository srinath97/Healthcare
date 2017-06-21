<br><br><br>
<?php
if(!isset($_SESSION['patient']))
    {
      header("refresh:0,url=login.php");
    }
    else
    {
        ?><div class="for-full-back " id="footer">
        		2016 www.yourdomain.com | All Right Reserved
         </div>
         <!--
	<div class="FloatingWidget">
	  <div class="container" style="margin-right:30px">
	    <a href="index.html" class="button">Call</a><br>
	    <a href="index.html" class="button button-green">Chat</a><br>
	    <a href="index.html" class="button button-red">SMS</a><br>
  	</div>
  	</div>
  	-->
  <?php
}
?>
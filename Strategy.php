<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Jungle Management System | Animal Detail</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--lightbox-->
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<script src="js/jquery.lightbox.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
<!--lightbox-->
</head>
<body>
<?php include_once('includes/header.php');?>
		<div class="banner-header">
			<div class="container">
				<h2>Strategy</h2>
			</div>

			</div>
	<div class="content">
<img src="images/gt.jpg" height="100%" width="100%">
	<!--gallery-->
			<div class="gallery-section">

					<div class="container">




					<div class="welcome-grid">
				
			<?php 
			if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        // Formula for pagination
        $no_of_records_per_page = 4;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM tblanimal";
$ret1=mysqli_query($con,"select COUNT(*) from  tblanimal");
$total_rows = mysqli_fetch_array($ret1)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
 $query=mysqli_query($con,"select * from tblanimal LIMIT $offset, $no_of_records_per_page");
 while ($row=mysqli_fetch_array($query)) {
 ?>

								<div class="col-md-3 welcome-grid" >
									
									
								<br></div><?php }?>
				
				<div class="clearfix"> </div>
			</div>
	
		</div>
	</div>
<body style="background-color:#FFFFF0;">

<h1><font size="7"><b><center>Strategy</center></b></font><br><br><br><br><br><br><br><br>
<p><font size="4" color="red"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Develop core competence in animal care, </b></font><font size="4"><b>&nbsp;&nbsp;conservation education, research and sustainable management practices.</b></font><br><br>
<p><font size="4" color="red"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strengthen and upgrade</b></font><font size="4"><b>&nbsp;&nbsp;Human Resources.</b></font><br><br>
<p><font size="4" color="red"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strengthen and upgrade</b></font><font size="4"><b>&nbsp;&nbsp;Organizational structure.</b></font><br><br>
<p><font size="4" color="red"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upgrade </b></font><font size="4"><b>&nbsp;&nbsp;infrastructure and services.</b></font><br><br>
<p><font size="4" color="red"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conserve </b></font><font size="4"><b>&nbsp;&nbsp;natural resources.</b></font><br><br>
<p><font size="4" color="red"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Develop and maintain</b></font><font size="4"><b>&nbsp;&nbsp; infrastructure and services that are out source able based on the Contract and/or PPP model.</b></font><br><br><br><br><br><br><br><br><br>

</h1>
</body>
<b><font size="5">Click on the  Image for Forest Location</font><b><br><a href="https://www.google.com/maps/dir//National+Zoological+Park,+Mathura+Road,+Purana+Qila,+Pragati+Maidan,+New+Delhi,+Delhi/@28.6061869,77.2416466,16z/data=!4m9!4m8!1m0!1m5!1m1!1s0x390ce318a027dbb9:0xf12a1c6b59580448!2m2!1d77.2454035!2d28.6067403!3e2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/forest.png" width="400px" height="450"px></a><br><br><br>
<!--gallery-->
<!--specials-->
		<?php include_once('includes/special.php');?>
			</div>
		<?php include_once('includes/footer.php');?>
</body>
</html>
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
				<h2>Human Resources</h2>
			</div>

			</div>
	<div class="content">
<img src="images/hm.jpg" height="100%" width="100%">
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
<h1><font size="7"><b><center>Human Resources</center></b></font></h1><br><br><br><br>
<center><table border="4" style="border-collapse: collapse;" width="30%">
	
	<tr>
		<th>Group A </th>
		<th>Group B </th>
		
	</tr>
	<tr>
		<td>Director</td>
		<td>Administrative Officer</td>
		
</tr>
<tr>
		<td>Joint Director</td>
		<td>Curator (Education)</td>
		
</tr>
<tr>
		<td>Veterinary Officer</td>
		<td>Garden Superintendent</td>
		
</tr>
<tr>
		<td>Assistant Veterinary Officer</td>
		<td>Accountant</td>
		
</tr>
<tr>
		<td></td>
		<td>Office Superintendent</td>
		
</tr>
<tr>
		<td></td>
		<td>Biological Assistant</td>
		
</tr>
<tr>
		<td></td>
		<td>Junior Translator</td>
		
</tr>
</table>
</center>

<center>
<table border="4" style="border-collapse: collapse;" width="30%">
	
	<tr>
		<th>S.NO: </th>
		<th>Section </th>
		<th>Group C</th>
		
	</tr>
	<tr>
		<td>1</td>
		<td>Animals Section</td>
		<td>77</td>
		
</tr>
<tr>
		<td>2</td>
		<td>Veterinary Section</td>
		<td>3</td>
		
</tr>
<tr>
		<td>3</td>
		<td>Garden Section</td>
		<td>22</td>
</tr>
<tr>
		<td>4</td>
		<td>Sanitary Section</td>
		<td>12</td>
</tr>
<tr>
		<td>5</td>
		<td>Maintenance Section</td>
		<td>13</td>
</tr>
<tr>
		<td>6</td>
		<td>Security Section</td>
		<td>20</td>
</tr>
<tr>
		<td>7</td>
		<td>Administrative Section</td>
		<td>26</td>
</tr>
<tr>
		<td>8</td>
		<td>Research Section</td>
		<td>1</td>
</tr>
<tr>
		<td>9</td>
		<td>Commissary Section</td>
		<td>14</td>
</tr>
<tr>
		<td>10</td>
		<td>Education Section</td>
		<td>3</td>
</tr>
<tr>
		<td></td>
		<td><b>Total</b></td>
		<td><b>191</b></td>
</tr>


</table>

</center>



</body>
<br><br><br><br><b><font size="5">Click on the  Image for Forest Location</font><b><br><a href="https://www.google.com/maps/dir//National+Zoological+Park,+Mathura+Road,+Purana+Qila,+Pragati+Maidan,+New+Delhi,+Delhi/@28.6061869,77.2416466,16z/data=!4m9!4m8!1m0!1m5!1m1!1s0x390ce318a027dbb9:0xf12a1c6b59580448!2m2!1d77.2454035!2d28.6067403!3e2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/forest.png" width="400px" height="450"px></a><br><br><br>
<!--gallery-->
<!--specials-->
		<?php include_once('includes/special.php');?>




			</div>
		<?php include_once('includes/footer.php');?>
</body>
</html>
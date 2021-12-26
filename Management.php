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
				<h2>Management</h2>
			</div>

			</div>
	<div class="content">
<img src="images/hu.jpg" height="100%" width="100%">
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
<h1><font size="7"><b><center>Management</center></b></font><br><p><i><font size="2">Central Government was to provide necessary finance and get the project executed through Delhi state Govt. Delhi State, however expressed its inability to undertake the scheme and suggested thatthe park be developed by Central Government, and shall be handed over to them in running condition to the Delhi Government. Since wildlife was managed by the Forest Department, first implementing official was drawn from Forest Service. Shri N.D. Bachkheti, forest officer of Uttar Pradesh was appointed as superintendent on 1st October 1955.</font></i></p><br>
<p><i><font size="2">Major Weinmann, the thenDirector of Ceylon Zoological Garden, Colombo was invited to help draw a detailed plan for development of the Park. He submitted a report alongwith a preliminary plan. As he was not available for continued consultations, it was decided to seek the services of Mr. Carl Hagenbeck, owner of the famous Animal Park at Hamburg, West Germany, who gave the idea of open moat enclosures.</font></i></p><br>
<p><i><font size="2">He presented a preliminary report in March 1956 and provided a general layout plan of waterways, roads & paths, animal enclosures and sewage system. The plan was amended in the light of local conditions and topography. The Government of India approved this amended plan on 31st December, 1956.</font></i></p><br>
<p><i><font size="2">By the end of 1959, construction had sufficiently advanced. The roads, waterways, moats, ponds fences and animal houses had been constructed over the Northern half of the area, lawns laid and plantation done. With the announcement of establishment of a Zoological Park at Delhi, gifts of animals started coming from different State Governments and individuals. They were kept in temporary enclosures around Azimganj Sarai, an enclosed square courtyard built for temporary halt for travellers during the Mughal days. Collection comprising of Tigers, Leopards, Bears, Foxes, Monkeys, Deer, Antelope and many birds were finally transferred to their permanent enclosures. The Park was formally inaugurated on 1st November, 1959 by Mr Punjab Rao Deshmukh, Hon'ble Minister, Government of India. This Park was initially known as Delhi Zoo. In the year 1982 it was given the status of the National Zoological Park with the idea of it being the model zoo of the country.</font></i></p><br>
<p><i><font size="2">Here at the National Zoological Park, birds and animals live in an environment that in many ways resemble their natural habitat. The National Zoological Park not only provides a home for endangered species, but also helps them to breed in captivity. Eventually they may once again thrive in the wild.</font></i></p><br>
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
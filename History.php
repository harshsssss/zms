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
				<h2>History</h2>
			</div>

			</div>
	<div class="content">
<img src="images/forr.jpg" height="100%" width="100%">
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
<h1><font size="7"><b><center>History</center></b></font><br><p><i><font size="2">In India, at the time of independence, there was no zoo in Delhi. The ‘Indian Board of Wildlife (now National Board for Wildlife) which was constituted in 1951 laid stress on establishment of zoos in larger cities of the country in its first meetingin 1952. With more leisure hours of the increasing population, both resident and floating, and increasing in flow of tourist, need of having a zoological Park at the National capital was felt. The objective was to provide a healthy and inexpensive recreation. It was also realized that conservation education can also be parted through zoo.</font></i></p><br>
<p><i><font size="2">Accordingly, an ad-hoc committee of some prominent nature lovers of Delhi, including Smt. Indira Gandhi, was constituted under the Chairmanship of Chief Commissioner, to formulate a proposal for establishment of Zoological Park for Delhi. Mr. E.F. Bowring Welsh, Secretary of the Society for Prevention of Cruelty to Animals was appointed as its Secretary. The committee met on 9th September, 1953 and approved the site between Purana Quila and Humayun's Tomb for the purpose. It also prepared an outline of the project.</font></i></p><br>
<p><i><font size="2">Central Government was to provide necessary finance and get the project executed through Delhi state Govt. Delhi State, however expressed its inability to undertake the scheme and suggested thatthe park be developed by Central Government, and shall be handed over to them in running condition to the Delhi Government. Since wildlife was managed by the Forest Department, first implementing official was drawn from Forest Service. Shri N.D. Bachkheti, forest officer of Uttar Pradesh was appointed as superintendent on 1st October 1955.</font></i></p><br>
<p><i><font size="2">Major Weinmann, the thenDirector of Ceylon Zoological Garden, Colombo was invited to help draw a detailed plan for development of the Park. He submitted a report alongwith a preliminary plan. As he was not available for continued consultations, it was decided to seek the services of Mr. Carl Hagenbeck, owner of the famous Animal Park at Hamburg, West Germany, who gave the idea of open moat enclosures.</font></i></p><br>
<p><i><font size="2">He presented a preliminary report in March 1956 and provided a general layout plan of waterways, roads & paths, animal enclosures and sewage system. The plan was amended in the light of local conditions and topography. The Government of India approved this amended plan on 31st December, 1956.</font></i></p><br>
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
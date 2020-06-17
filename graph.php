<?php 
$servername = "localhost";
$username = "id9391475_aerofy";
$password = "palash12345";
$dbname = "id9391475_mydb";

session_start();
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($conn,$dbname);

$query = "SELECT * FROM user_data";
$result = mysqli_query($conn, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ time:'".$row["data_time"]."', data:'".$row["device_value"]."'}, ";
}
$chart_data = substr($chart_data, 0, -2);
//echo $chart_data;
?>


<!DOCTYPE html>
<html>
 <head>
  <title>AEROFY Chart</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
  <!-- Favicons -->
  <link href="img/smalllogo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
 </head>
 <body>
<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="img/smalllogo.png" class="scrollto">Aerofy</a></h1>
      </div>

      <nav id="nav-menu-container" >
        <ul class="nav-menu">
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
    
  </header><!-- #header -->
  
   <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-text">
        
      <div class="container" style="width:700px;">
        <h2 align="center">Aerofy graphical data</h2>
        <h3 align="center" syle="color:#1DE099;">Aerofy data fetching from the central database</h3>   
      </div>
      
    </div>
    
  </section><!-- #intro -->
  
  <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <br/><br/>
            <div id="chart"></div>

      </div>
    </section><!-- #about -->

    <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>AEROFY-NST</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
            Designed by Innovative Research & Development Technologies, INDIA</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  
 </body>
</html>

<script>
    Morris.Bar({
    element : 'chart',
    data:[<?php echo $chart_data; ?>],
    xkey:'time',
    ykeys:['data'],
    labels:['data'],
    hideHover:true,
    stacked:true,
 barColors:['#5B33FF']
});
</script>
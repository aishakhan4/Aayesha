<?php include("include/connection.php");?>
<?php session_start();
if(!isset($_SESSION["id"]))
{
header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>ds-project</title>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
 
  <link href="css/bootstrap-theme.css" rel="stylesheet">
 
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
   <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
 
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
 
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
   <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>

<body>

<?php
include 'base.php';
?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header" ><i class="fa fa-laptop"></i><b> Dashboard</h3>
            

          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
               <i class="fas fa-user"></i> 
            
              <div class="title">TOTAL EMPLOYEES</div>
              <?php
             $qry="SELECT id FROM emppersonaldetail ORDER BY id";
             $rs=readrecord($qry);
              $row2= mysqli_num_rows($rs);
              echo '<h1 style="color:black; font-size:50px;"> '.$row2.'</h1>';
      ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fas fa-user-tie"></i>
             
              <div class="title">TOTAL INTERNS</div>
              <?php
             $qry="SELECT uid FROM internpersnoldetail ORDER BY uid";
             $rs=readrecord($qry);
              $row1= mysqli_num_rows($rs);
              echo '<h1 style="color:50px; font-size:50px;"> '.$row1.'</h1>';
      ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box orange-bg">
              <i class="icon_documents_alt"></i>
                           <div class="title">TOTAL TRAINEES</div>
                           <?php
             $qry="SELECT Tid FROM tranpersonaldetail ORDER BY Tid";
             $rs=readrecord($qry);
              $row3= mysqli_num_rows($rs);
              echo '<h1 style="color:50px; font-size:50px;"> '.$row3.'</h1>';
      ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
             <i class="fas fa-users"></i>
             
              <div class="title">OVERALL INFORMATION</div>
              <?php
                $read=$row1+$row2+$row3; 
              echo '<h1 style="color:50px; font-size:50px;"> '.$read.'</h1>';
      ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->



<?php 
	include "include/header.php"; 
?>

<div class="container">
<div class='alert alert-danger' style="display: none;"><strong>Error !</strong> Student Roll Missing !</div>
		<div class="card">
			<div class="card-header">
				<h2>
			<?php
			$date=date("y-m-d");
			$status="";
			if(isset($_POST["submit"]))
			{
				extract($_POST);
			
				foreach ($attend as $atn_key => $atn_value) {

				$qry="insert into traine_attendance (Tid,attend,att_time) VALUES('$atn_key','$atn_value','$date')"; 
				$rs=readrecord($qry);
				
				}
      }
      $results_per_page = 6;
			$qry="SELECT * FROM tranpersonaldetail";
			$rs=readrecord($qry);
      $fetch=mysqli_num_rows($rs);
      $number_of_page = ceil ($fetch/ $results_per_page);
			if (!isset ($_GET['page']) ) {  
				$page = 1; 
		 
			} else {  
				$page = $_GET['page'];  
			}
			$page_first_result = ($page-1) * $results_per_page;
			$query = "SELECT * FROM tranpersonaldetail LIMIT " . $page_first_result . ',' . $results_per_page;  
			
			$rs=readrecord($query);

			?>
		
					<a class="btn btn-info float-right" href="trainedate_view.php"><h1>View All</h1></a>
				</h2>
			</div>

			<div class="card-body">
				<div class="card bg-light text-center mb-3">
					<h1 class="m-0 py-3"><strong>Date</strong>:<?php echo $date ;?> </h1>
				</div>
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="25%"><h1>S/L</h1></th>
							<th width="25%"><h1>Trainee Name</h1></th>
							<th width="25%"><h1>Trainee ID</h1></th>
							<th width="25%"><h1>Attendance</h1></th>
						</tr>
						<?php
						$i=1;
						while($row=mysqli_fetch_array($rs))
						{

						?>
						<tr>
						<td><h1><?php echo $i;?></h1></td>
							<td><h1><?php echo $row['name'];?></h1></td>
							<td><h1><?php echo $row['Tid'];?></h1></td>
							<td><h1>
								<input type="radio" name="attend[<?php echo $row['Tid'];?>]" value="present">P
								<input type="radio" name="attend[<?php echo $row['Tid'];?>]" value="absent">A
							</h1></td>
						</tr>
<?php
$i++;
						}
						?>
						<tr>
							<td colspan="4" class="text-center">
								<input type="submit" name="submit" class="btn btn-primary px-5" value="Submit" style="font-size:15px;height:40px;">
							</td>
						</tr>
					</table>
				</form>
        <?php
				 echo '<ul class="pagination">';
				 if($page>=2){   
					echo " <li class='page-item' style='border:none;'> <a  class='page-link' href='taketraineattend.php?page=".($page-1)."'> <h1> Prev </h1></a></li>";   
				}
				for($i = 1; $i<= $number_of_page; $i++) {  
        echo '<li class="page-item"> <a class="page-link" href = "taketraineattend.php?page=' . $i . '"><h1>' . $i . ' </h1></a></li>';  
	}
	
	if($page<$number_of_page){ 
  
		echo "<li class='page-item' style='border:none;'><a  class='page-link' style='border:1px;' href='taketraineattend.php?page=".($page+1)."'> <h1> Next </h1></a></li>";   
	}   
	echo "</ul>"

	?>
			</div>
		</div>
	</div>
        <div class="row">
          
        <!-- Today status end -->



        <!-- statics end -->



                </tbody>
              </table>
            </section>
            <!--Project Activity end-->
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>

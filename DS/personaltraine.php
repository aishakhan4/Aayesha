<?php 
include ("include/connection.php");?>
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
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <a href="index.html" class="logo">DIGITAL <span class="lite">SPIRIT</span></a>

  
      <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">

          <li id="task_notificatoin_bar" class="dropdown">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
        
        </ul>
        
      </div>
    </header>
    
<?php
include 'base.php'
?>    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            

          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="icon_document_alt"></i>
              <div class="mr-5">Last 7 days Joined Trainees</div>
              <?php
              $from_date= date("Y-m-d",strtotime("-7 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM tranpersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by Tid DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h1 style="color:black; font-size:50px;"> '.$row.'</h1>';
         ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
            <i class="icon_documents_alt"></i>
            <div class="mr-5">Last 15 days Joined Trainees</div>
              <?php
              $from_date= date("Y-m-d",strtotime("-15 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM tranpersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by Tid DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h1 style="color:black; font-size:50px;"> '.$row.'</h1>';
         ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="icon_documents_alt"></i>
              <div class="mr-5">Last 30 days Joined Trainees</div>
              <?php
              $from_date= date("Y-m-d",strtotime("-30 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM tranpersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by Tid DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h1 style="color:black; font-size:50px;"> '.$row.'</h1>';
         ?>
            </div>

            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
            <i class="icon_documents_alt"></i>
            <div class="mr-5">Total Trainees</div>
              <?php
             $qry="SELECT Tid FROM tranpersonaldetail ORDER BY Tid";
             $rs=readrecord($qry);
              $row3= mysqli_num_rows($rs);
              echo '<h1 style="color:black; font-size:50px;"> '.$row3.'</h1>';
      ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


        <div class="row">
          
        <!-- Today status end -->



        <!-- statics end -->



                </tbody>
                <div class="container-fluid mt--7" style="padding-top: 100px;">
<div class="row">
<div class="col">
  <div class="card shadow">
    <div class="card-header bg-transparent">
<div >
    
    
    </div>
    <div class="card-body">
     <div class="container">
      <form name="myformcont" class="my-2" action="proffesionaltraine.php" method="POST" enctype="multipart/form-data">
    
<h3 style="text-align: center;font-size: 25px;">Persnol Details</h3>
        <!-- <h2 class="text-center">LIC Form</h2> -->
        <div class="row jumbotron">

          <!-- <div class="col-sm-12 form-group" style="margin-top: -20px;">
            <label for="client_id">Client_id :</label>
            <input type="text" class="form-control" name="client_id" id="name-f" placeholder="Enter your Client_id." required>
          </div> -->
 <div class="col-sm-3 form-group" style="margin-top: -20px;">
          <div class="container">
    <div class="picture-container">
        <div class="picture" style="height: 170px; width: 170px; margin-top: 25px;">
            <canvas id= "canv1" ></canvas>
            <input type="file" multiple="false"  name="file" accept="image/*" id=finput onchange="upload()">
        </div>
         <h6 class="" style="font-size:15px;">Choose Picture</h6>

    </div>
</div>
          </div>
          
          
          <div class="col-sm-9 form-group" style="margin-top: -20px;">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name-f" placeholder=" Full Name." required style="font-size:15px;"><br>
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="name-l" placeholder=" Email" required style="font-size:15px;" >
          </div>
         
          <div class="col-sm-6 form-group">
            <label for="phone_no">Phone No:</label>
            <input type="phone" name="phone" class="form-control" id="Date" placeholder=" Phone No." required style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
            <label for="aadhar card">Adhar no..</label>
            <input type="phone" class="form-control" name="aadhar_no" id="name-f" placeholder=" Adhar Number" required style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
            <label for="pan card"> Pan Card</label>
            <input type="text" class="form-control" name="pan_card" id="cost_center" placeholder=" Pain Card Number" required style="font-size:15px;">
          </div>
    
        <!-- <div class="col-sm-6 form-group">
            <label for="grade">Policy Type</label>
            <input type="text" class="form-control" name="policy_type" id="zip" placeholder="Enter grade " required>
        </div>
      -->
      <div class="col-sm-6 form-group">
        <label for="gender">Gender</label>
        <select input type="text" class="form-control" name="gender" id="name-l" value="Gender" placeholder="Gender" required style="font-size:15px;">
          <option >Female</option>
        <option>Male</option>
        
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="dob">Date Of Birth</label>
        <input type="Date" class="form-control" name="dob" id="name-l" placeholder="DOB" required style="font-size:15px;">
      </div>

      <div class="col-sm-6 form-group">
        <label for="bloodgroup"> Blood Group</label>
        <select input type="text" class="form-control" name="bloodgroup" id="address-1" placeholder=" Blood Group" required style="font-size:15px;">
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        
         </select>
      </div>
      
      
      <div class="col-sm-6 form-group">
        <label for="father name">Father Name</label>
        <input type="text" class="form-control" name="fathername" id="description" placeholder=" Father Name" required style="font-size:15px;">
      </div>
      <div class="col-sm-6 form-group">
        <label for="father_occupation"> Father Occoupation</label>
        <input type="text" class="form-control" name="fatheroccu" id="pan-no" placeholder=" Father Occoupation " required style="font-size:15px;">
      </div>
      <div class="col-sm-6 form-group">
        <label for="father_no">Father Number</label>
        <input type="phone" class="form-control" name="fatherno" id="pan-no" placeholder=" Father Number" required style="font-size:15px;">
      </div>
      
      <div class="col-sm-6 form-group">
        <label for="city">City</label>
        <input type="text" name="city" class="form-control datetimepicker" id="Date" placeholder=" City" required style="font-size:15px;">
      </div>

      <div class="col-sm-6 form-group">
        <label for="state">State</label>
        <input type="text" name="state"  class="form-control datetimepicker" id="Date" placeholder="State " required style="font-size:15px;">
      </div>
      <div class="col-sm-6 form-group">
        <label for="pincode">Pincode</label>
        <input type="phone" name="pincode"  class="form-control datetimepicker" id="Date" placeholder=" Pincode" required style="font-size:15px;">
      </div>
        <div class="col-sm-6 form-group">
        <label for="address">Address</label>
        <input type="text" name="address"  class="form-control datetimepicker" id="Date" placeholder=" Address" required style="font-size:15px;">
      </div>
      <div class="col-sm-6 form-group">
        <label for="join date">Join Date</label>
        <input type="date" name="joindate"  class="form-control datetimepicker" id="Date" placeholder=" Address" required style="font-size:15px;">
      </div>


      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
        </label>
      </div>

      <div class="col-sm-12 form-group mb-0">
       <button class="btn btn-primary float-right" name="btn1" style="font-size:21px;">Next</button>
     </div>
     
   </div>
 </form>
</div> 
</div>
</div>
</div>
</div>

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

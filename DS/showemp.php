<?php include("include/connection.php"); ?>
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

<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<body>
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
            <i class="fas fa-user"></i> 
              <div class="title">Last 7 days hired Employees</div>
              <?php
              $from_date= date("Y-m-d",strtotime("-7 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM emppersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by id DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h1 style="font-size:50px"> '.$row.'</h1>';
         ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
            <i class="fas fa-user"></i> 
              <div class="title">Last 15 days  hired Employees</div>
              <?php
              $from_date= date("Y-m-d",strtotime("-15 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM emppersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by id DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h1 style="font-size:50px"> '.$row.'</h1>';
         ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
            <i class="fas fa-user"></i> 
              <div class="title">Last 30 days  hired Employees</div>
              <?php
              $from_date= date("Y-m-d",strtotime("-30 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM emppersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by id DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h1 style="font-size:50px"> '.$row.'</h1>';
         ?>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
            <i class="fas fa-user"></i> 
              <div class="title">Total Employees</div>
              <?php
             $qry="SELECT id FROM emppersonaldetail ORDER BY id";
             $rs=readrecord($qry);
              $row2= mysqli_num_rows($rs);
              echo '<h1 style="font-size:50px"> '.$row2.'</h1>';
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
               <!-- <form id="frm" name="frm" action="" method="post">
<input type="hidden" id="cid" name="cid" value="/>


<input class="" type="text" id="tsearch" name="tsearch" placeholder="Search for..." style="margin-left:1200px; margin-bottom:15px; margin-top:10px;"/>    
    <input class="" type="submit" value="search" name="btnsearch" id="btnsearch"/>
</form>

  <!-- <input class="" type="text" id="tsearch" name="tsearch" placeholder="Search for..." style="margin-left:1200px;"/>    
    <input class="" type="submit" value="search" name="btnsearch" id="btnsearch"/>-->



<div style="margin-left: 1000px;">                
<form class="example" action="" style="margin:auto;max-width:300px" method="POST">
  <input type="text" placeholder="Search.." name="tsearch">
  <button type="submit" name="btnsearch"><i class="fa fa-search"></i></button>
</form>
</div>  <br><br>
<div class="container">
  <div class="col-sm-12">
    <div class="col-md-6"></div>
    <div class="col-md-6"></div>
  </div>
</div>  
<div class="container">
  <div class="col-md-12">
    <div class="col-md-6"></div>
    <div class="col-md-6"></div>
  </div>
</div>

 
    
      
      
     
          
    <?php
$status="";
$rcrd=1;
$sql="SELECT*
FROM emppersonaldetail,empeducationdetail,skill,companydetail
WHERE
emppersonaldetail.id=empeducationdetail.id
AND
emppersonaldetail.id=skill.id
AND
skill.id=companydetail.id";

if(isset($_POST["btnsearch"]))
{
extract($_POST);
$qry="SELECT id FROM emppersonaldetail WHERE full_name like '%$tsearch%' order by id";
$res=readrecord($qry);

if(mysqli_num_rows($res)>0)
{
 $row=mysqli_fetch_array($res);

 $id=$row['id'];
$sql="SELECT *
FROM emppersonaldetail,empeducationdetail,skill,companydetail
WHERE
emppersonaldetail.id=$id
AND
skill.id=$id
AND
companydetail.id=$id
AND 
empeducationdetail.id=$id";

}
else
{
  $rcrd=0;
}
}
if($rcrd>0)
{
$rs=readrecord($sql);
if(mysqli_num_rows($rs)>0)
{

?>
<BR>
<BR>
                     <table class="table">
    <thead class="thead-light">
      <tr>
        <th><h1>ID<h1></th>
        
        <th><h1>Full Name</h1></th>
       
        <th><h1>E-mail</h1></th>
       
        <th><h1>Contact No</h1></th>
        
        <th><h1>Join Date</h1></th>
       
        
        <th><h1>Position</h1></th>
       <th></th>
        <th ><h1>Action</h1></th>
        <th><h1></h1></th>
       

      </tr>
    </thead>
    <tbody>

<?php
  while($row=mysqli_fetch_array($rs))
  {
    ?>

    <tr>
   
    <td width="10%"><h1> <a href="Details.php?id=<?php echo $row["id"];?>"> <?php echo $row["id"];?></a>
        <td width="20%"><h1> <a href="Details.php?id=<?php echo $row["id"];?>"> <?php echo $row["full_name"];?></a></h1></td>
    
    <td width="20%"><h1><?php echo $row["email"]; ?></h1></td>
    
    <td width="20%"><h1><?php echo $row["mobile_no."]; ?></h1></td>
    
    <td width="20%">  <h1><?php echo $row["Join_date"]; ?></h1></td>
  
    
    <td width="20%"><h1><?php echo $row["position"]; ?></h1></td>
    
    <td></td>
<td>
  
<button onclick="document.getElementById('id01').style.display='block'" id="button_color" style="background-color: blue;color: white; height: 40px; width: 75px; border-radius:25px;"><a href="empedit.php?id=<?php echo $row["id"];?>" style="color:white;"><h1 style="color: white;">update</h1></a></button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal1-content" action="" method="POST">
  
        <div class="col-md-4" style="background-color:white; margin-top: 35px;">
          <h1 style="font-size: 25px;text-align: center;">Update Account</h1>
      <p>Are you sure you want to Update this account?</p>
    
      <div class="clearfix" style="text-align: center;">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color: red;height: 35px;width: 65px;"><h1 style="color: white;">Cancel</h1></button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="updatebtn"style="background-color: purple;height: 35px;width: 65px;><a href="empedit.php?id=<?php echo $row["id"];?>" style="color:black;"><h1 style="color: white;">update<h1></a></button>
      </div>
    </div>
        </div>
        <div class="col-md-2"></div>
      </div>
      
  </form>
</div> 
</td>
<td>      
<button onclick="document.getElementById('id02').style.display='block'" id="button_col" style="background-color: red;border-radius:25px; height: 40px;width: 75px; "><a href="Delete.php?id=<?php echo $row["id"];?>" style="color:white;"><h1 style="color: white;">Delete</h1></a></button>
<div id="id02" class="modal">
 <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal1-content" action="showintern.php">
       <div class="col-md-4"></div>
       <div class="col-md-4" style="background-color: white; margin-top: 55px;">
          <h1 style="font-size: 25px;text-align: center;">Delete Account</h1>
      <p>Are you sure you want to delete this account?</p>
    
      <div class="clearfix" style="text-align: center;">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="height:35px;width: 65px; background-color:blue;"><h1 style="color: white;">Cancel</h1></button>
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="deletebtn" style="height:35px;width: 65px; background-color: red;"><a href="Delete.php?id=<?php echo $row["id"];?>" style="color:black;"><h1 style="color: white;">Delete</h1></a></button>
      </div>
       </div>
       <div class="col-md-4"></div>
     </div>
    </div>
  </form>
</div>      
        </td>
      </tr>


<?php
  }
}
}
else{
  ?>
<h1 style="text-align:center";>Record Not Found</h1>
<?php
}
   ?> 
   </tbody>
            
    















      
      <!-- Area Chart Example-->

    
</table>
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

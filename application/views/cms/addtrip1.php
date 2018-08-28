<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2018 16:29:25 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Mosaddek">
<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<link rel="shortcut icon" href="img/favicon.html">

<title>Blank</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-reset.css" rel="stylesheet">
<!--external css-->
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<!--right slidebar-->
<link href="css/slidebars.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />

<link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet" />
<!-- jscript for dynamic buttons -->
</head>

<body>
<section id="container" class="">
<?php include "header.php";
?>
<section id="main-content"><section class="wrapper">

<div class="row">
<div class="col-lg-12">

<!--tab nav start-->
<section class="panel">
    <header class="panel-heading tab-bg-dark-navy-blue ">
        <ul class="nav nav-tabs">
            <li class="">
                <a href="addtrip.php">Back</a>
            </li>
            <li class="active">
                <a href="#about">Add</a>
            </li>
            
        </ul>
    </header>
    <div class="panel-body">
        <div class="tab-content">
            <div id="home" class="tab-pane ">
                           
<section class="panel">
<header class="panel-heading">
 Schedule Management > Add Trip
<header>
</section>
</div>          

            <div id="about" class="tab-pane active">
              <header class="panel-heading">
 Staff Registration > Add Trip
<header>
            <div class="panel-body">

      <form method="get" action="addtrip.php" >
            
            <div class="panel-body">
<div class="row">

    <div class="col-md-12">
        <div class="input-group"><input type="text" placeholder="Search Here" class="input-sm form-control"> <span class="input-group-btn">
        <button type="button" class="btn btn-sm btn-success"> Go!</button> </span></div>
    </div>
</div>
</div>
<table class="table table-hover p-table">
<thead>
<tr>
    <th>From</th>
    <th>To</th>
    <th>Via</th>
    <th>Custom</th>
</tr>
</thead>
<tbody>
<tr>
    <td>Nilambur</td>
    <td>Thrissur</td>
    <td>Pattambi,Shoranur</td>


    <td>
        <a href="projectdetails.php" class="btn btn-sm btn-success btn-xs"><i class="fa fa-plus"></i>&nbsp Add </a>
    </td>
</tr>
<tr>
    <td>Nilambur</td>
    <td>Thrissur</td>
    <td>Pattambi,Shoranur</td>


    <td>
        <a href="projectdetails.php" class="btn btn-sm btn-success btn-xs"><i class="fa fa-plus"></i>&nbsp Add </a>
    </td>
</tr>
</tbody>
</table>
<b>Selected Routes</b>

       
<section class="panel">
  <table class="table table-hover p-table">
<thead>
<tr>
    <th>From</th>
    <th>To</th>
    <th>Via</th>
    <th>Custom</th>
</tr>
</thead>
<tbody>
<tr>
    <td>Nilambur</td>
    <td>Thrissur</td>
    <td>Pattambi,Shoranur</td>


    <td>
        <a href="projectdetails.php" class="btn btn-danger btn-xs"><i class="fa fa-plus"></i>&nbsp Delete </a>
    </td>
</tr>
</tbody>
</table>
</section>
   <a href="#myModal" data-toggle="modal" class="btn btn-info">
      Verify
  </a>
        </form>

    </div></div>

        </div>
    </div>
</section>
</div>
</div>            
</section>


<?php include "footer.php"; ?>
</section>

          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Verify Routes</h4>
                                          </div>
                                           <div class="modal-body">
                                       <table class="table table-hover p-table">
                                        <thead>
                                        <tr>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Via</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Nilambur</td>
                                            <td>Thrissur</td>
                                            <td>Pattambi,Shoranur</td>


                                            
                                        </tr>
                                        </tbody>
                                        </table>
                                    <div class="form-group"> 
         <button type="submit" name="" class="btn btn-info" >submit</button>
     </div>
                                      </div>
                                    
                                   </div>
                                  </div>

                              </div> 
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/respond.min.js" ></script>

<!--this page plugins-->

<script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>


<!--this page  script only-->
<script src="js/advanced-form-components.js"></script>

<!--bootstrap-switch-->
<script src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>

<!--bootstrap-switch-->
<script src="assets/switchery/switchery.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>


<!-- swithery-->


</body>
</html>

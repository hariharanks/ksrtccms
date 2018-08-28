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

    <link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />
  <!--select 2-->
    <link rel="stylesheet" type="text/css" href="assets/select2/css/select2.min.css"/>

    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />

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
                                  <li class="active">
                                      <a data-toggle="tab" href="#home">View</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#about">Add</a>
                                  </li>
                                  
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="home" class="tab-pane active">
                                                 
          <section class="panel">
                       <section class="panel">
              <header class="panel-heading">
                      Schedule Management > Attach Bus to Route
                      
                  </header>
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
                          <th>Bus No.</th>
                          <th>From</th>
                          
                          <th>To</th>
                          <th>Route No.</th>
                          <th>Custom</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td class="p-name">
                              <a href="projectdetails.php">RSK456</a>
                          </td>
                          <td class="p-team">KL 15 A 3145
                          </td>
                          
                          <td class="p-team">Perinthalmanna
                          </td>
                          <td class="p-team">LS/FP
                          </td>
                          <td>
                              <a href="projectdetails.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                              <a href="#myModal1" data-toggle="modal" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                      </tr>
                      <tr>
                          <td class="p-name">
                              <a href="projectdetails.php">RSK456</a>
                          </td>
                          <td class="p-team">KL 15 A 3145
                          </td>
                          
                          <td class="p-team">Perinthalmanna
                          </td>
                          <td class="p-team">LS/FP
                          </td>
                          <td>
                              <a href="projectdetails.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                              <a href="#myModal1" data-toggle="modal" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                      </tr>
                     
                      </tbody>
                  </table>
              </section>
              </div>
                                  
               
                                  <div id="about" class="tab-pane">
                            <header class="panel-heading">
                            Schedule Management > Attach Bus to Route
                             </header>
                                  <div class="panel-body">

                    <form role="form">
                        <div id="a">
                            <div class="form-group col-md-3">
                                     <b>Select date</b>
                                      <input class="form-control form-control-inline input-medium default-date-picker"  size="8" type="text" value="" />
                                      
                            </div>
                                  <div class="form-group col-md-5">
                                     <b>Bonnet No.</b>
                                      <select class="js-example-basic-single " size="8">
                                          <option value="AL">RSK909</option> 
                                          <option value="AL">RPE409</option> 
                                          <option value="AL">RSE454</option> 
                                          <option value="WY">AT29</option>
                                      </select>
                                  </div> 


                                  <div class="form-group col-md-4">
                                     <b>Bus Type.</b>
                                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                  </div> 
                                </div>

                            <div id="b">
                                   <div class="form-group col-md-6">
                                   <label>Conductor</label>
                                      <select class="js-example-basic-single ">
                                              <option value="0">----Select----</option>
                                              </select>
                                  </div>  
                                   <div class="form-group col-md-6">
                                   <label>Driver</label>
                                      <select class="js-example-basic-single ">
                                              <option value="0">----Select----</option>
                                              </select>
                                  </div> 
                            </div>
                                   <div class="form-group col-md-6">
                                   <label>From</label>
                                      <select class="js-example-basic-single ">
                                              <option value="0">----Select----</option>
                                              </select>
                                  </div> 
                                   <div class="form-group col-md-6">
                                   <label>To</label>
                                      <select class="js-example-basic-single ">
                                              <option value="0">----Select----</option>
                                              </select>
                                  </div> 
              <div class="input-group col-md-12">
                <input type="text" placeholder="Search Here" class="input-sm form-control"> <span class="input-group-btn"> </span></div>
                  <div class="form-group">
                    <table class="table table-hover p-table">
                      <thead>
                      <tr>
                        <th>Select</th>
                          <th>Schedule Code</th>
                          <th>Schedule No.</th>
                          <th>Departure</th>
                          <th>Arraival</th>
                          <th>No. of trips</th>
                          <th>Bus type</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="p-name">
                             <input type="radio" value="1">
                          </td>
                          <td class="p-name">
                             101
                          </td>
                          <td class="p-team">10004
                          </td>
                          <td class="p-team">10:40
                          </td>
                          <td class="p-team">13:10
                          </td>
                          <td class="p-team">2
                          </td>
                          <td class="p-team">LS/FP
                          </td>
                      </tr>
                      
                     
                      </tbody>
                  </table>
                </div>
                <div class="form-group"> 
                               <button type="submit" class="btn btn-info">Submit</button>
                           </div>
                              </form>

                          </div></div>
                                 <!-- <div id="profile" class="tab-pane">
                                  Profile
                                  </div>
                                  <div id="contact" class="tab-pane">Contact</div>-->
                              </div>
                          </div>
                      </section>
                  </div>
              </div>            
          </section>



  <?php include "footer.php";
  ?>
</section>

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
 





 

  <!--select2-->
  <script type="text/javascript" src="assets/select2/js/select2.min.js"></script>

  <!--summernote-->
  <script src="assets/summernote/dist/summernote.min.js"></script>

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

  <script>

      jQuery(document).ready(function(){

          $('.summernote').summernote({
              height: 200,                 // set editor height

              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor

              focus: true                 // set focus to editable area after initializing summernote
          });
      });

  </script>
    <!--select2-->
  <script type="text/javascript">

      $(document).ready(function () {
          $(".js-example-basic-single").select2();

          $(".js-example-basic-multiple").select2();
      });
  </script>

  <!-- swithery-->
  

  </body>
</html>

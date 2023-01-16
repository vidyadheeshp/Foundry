<?php 
  ini_set('display_errors', 1);
 
  if (session_id() == '') {
    session_start();
  $login_id = $_SESSION['s_id'];
  //$dept_id = $_SESSION['dept'];
}

 if(!isset($_SESSION['logged_in'])) {
      header("Location: login.php"); 
 }  
include('pages/required/db_connection.php');
include('pages/required/functions.php');
include('pages/required/tables.php');


  $loggen_in_query = "SELECT 
                  um.*
                FROM 
                  user_master um
                WHERE
                  1=1
                  AND um.SNO=".$login_id;
      $login_query_result = db_one($loggen_in_query);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Foundry | <?php echo 'Welcome';?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Foundry</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $login_query_result['name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $login_query_result['name'];?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $login_query_result['name'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!--form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
       
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <!--span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span-->
          </a>
        </li>
       
        
        <li>
          <a href="my_entries.php">
            <i class="fa fa-calendar"></i> <span>My Entries</span>
            <!--span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span-->
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        
        
     
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
                  $product_defect_query = "SELECT count(*) AS defect_count FROM quality_inspection_master WHERE 1=1 AND status=1";
                  $product_defect_count = db_one($product_defect_query);
                  echo $product_defect_count['defect_count'];
                ?></h3>

              <p>Add Product Defect</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#add_product">Add <i class="fa fa-arrow-circle-right"></i></a>
                    <div class="modal fade" id="add_product" role="dialog">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header bg-purple">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"> <i class="fa fa-plus"></i> Add Defective Casting Information</h4>
                        </div>
                        
                      <span class="help-block">
                        <div class="product_defect_added_notification">
                          <div id="loading_image" style="display:none;"></div>
                        
                      <form method="post" id="product_add" role="form">
                        <div class="modal-body">
                            <div class="form-group col-md-6">
                              <label class="help-block">Product Id : <span class="text-danger">*</span></label>
                              <input type="text" id="product_id" required name="product_id" class="form-control" placeholder="Enter Product Id"/>
                            </div>
                            <div class="form-group col-md-6">
                              <label class="help-block">Casting Weight (Kg's): <span class="text-danger">*</span></label>
                              <input type="text" id="quantity" required name="quantity" class="form-control" placeholder="Enter Quantity"/>
                            </div>
                            <div class="form-group col-md-6">
                              <label class="help-block">Defect <span class="text-danger">*</span></label>
                              <select id="defect" required name="defect" class="form-control res_cat" multiple>
                                
                              <?php 
                                $defect_query = "SELECT sno,defect_name FROM meta_defect_type WHERE 1=1";
                                $defect_result = db_all($defect_query);
                                $dr_str = "";
                                foreach($defect_result AS $dr){
                                  $dr_str .="<option value=".$dr['sno']." class='help-block'>".$dr['defect_name']."</option>";
                                }
                                echo $dr_str;
                              ?>
                              </select>
                            </div>
                           <div class="form-group col-md-6">
                              <label class="help-block">Location </label>
                              <input type="text" id="location" required name="location" class="form-control" placeholder="Enter Location"/>
                            </div>
                            
                        </div>
                          <div class="clearfix"></div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                          <button type="reset" class="btn btn-default btn-flat"></i> Reset</button>
                          <button type="button" class="btn bg-purple btn-flat" id="add_product_defect"><i class="fa fa-plus"></i> Add</button>
                        </div>
                      </form>
                      </div>
                      </span><!--end of help block-->
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
          </div>
        </div><!-- closing the first tile-->
        <!-- Second tile-->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php 
                  $melting_details_query = "SELECT count(*) AS melting_count FROM melting_details_master WHERE 1=1 AND status=1";
                  $melting_details_count = db_one($melting_details_query);
                  echo $melting_details_count['melting_count'];
                ?></h3>

              <p>Add Melting Details</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#add_melting_details">Add <i class="fa fa-arrow-circle-right"></i></a>
                    <div class="modal fade" id="add_melting_details" role="dialog">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header bg-purple">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"> <i class="fa fa-plus"></i> Add Melting Details</h4>
                        </div>
                        
                      <span class="help-block">
                        <div class="melting_details_added_notification">
                          <div id="loading_image" style="display:none;"></div>
                        
                            <form method="post" id="melting_add" role="form">
                              <div class="modal-body">
                                  <div class="form-group col-md-6">
                                    <label class="help-block">Heat No : <span class="text-danger">*</span></label>
                                    <input type="text" id="heat_no" required name="heat_no" class="form-control" placeholder="Enter Heat No"/>
                                  </div>
                                    <div class="form-group col-md-6">
                                    <label class="help-block">Type of Melting <span class="text-danger">*</span></label>
                                    <select id="melting_type" required name="defect" class="form-control ">
                                      <option value="0">Choose One</option>
                                      <option value="1">SG Iron</option>
                                      <option value="2">Cast Iron</option>
                                    </select>
                                  </div>
                                   <div class="form-group col-md-12">
                                     <label class="help-block">Changes Added </label>
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th>Material</th>
                                          <th>Quantity <span class="text-danger">*</span></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>RR</td>
                                          <td><input type="text" id="rr_quantiry" class="form-control" placeholder="in KG's"/></td>
                                        </tr>
                                        <tr>
                                          <td>Pigiran</td>
                                          <td><input type="text" id="Pigiran_quantiry" class="form-control" placeholder="in KG's"/></td>
                                        </tr>
                                        <tr>
                                          <td>CRC Scrap</td>
                                          <td><input type="text" id="crc_Scrap_quantiry" class="form-control" placeholder="in KG's"/></td>
                                        </tr>
                                        <tr>
                                          <td>Rejected Castings</td>
                                          <td><input type="text" id="Rejected_Castings_quantiry" class="form-control" placeholder="in KG's"/></td>
                                        </tr>
                                        <tr>
                                          <td>FerroSilicon</td>
                                          <td><input type="text" id="FerroSilicon_quantiry" class="form-control" placeholder="in KG's"/></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                   
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="help-block">Tapout Temperature: <span class="text-danger">*</span></label>
                                    <input type="text" id="tap_temp" required name="tap_temp" class="form-control" placeholder="Enter Temperature"/>
                                  </div>
                                  <div class="clearfix"></div>
                                  
                              </div>
                                
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                                <button type="reset" class="btn btn-default btn-flat"></i> Reset</button>
                                <button type="button" class="btn bg-purple btn-flat" id="add_melting"><i class="fa fa-plus"></i> Add</button>
                              </div>
                            </form>
                          </div>
                      </span><!--end of help block-->
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
          </div>
        </div><!-- Closing Secong tile-->
        <!-- Third Tile begins -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 
                  $sand_testing_details_query = "SELECT count(*) AS sand_testing_count FROM sand_testing_details_master WHERE 1=1 AND status=1";
                  $sand_testing_details_count = db_one($sand_testing_details_query);
                  echo $sand_testing_details_count['sand_testing_count'];
                ?></h3>

              <p>Sand Testing Lab</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#add_sand_testing">Add <i class="fa fa-arrow-circle-right"></i></a>
                    <div class="modal fade" id="add_sand_testing" role="dialog">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header bg-purple">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"> <i class="fa fa-plus"></i> Add Sand Testing Details</h4>
                        </div>
                        
                      <span class="help-block">
                        <div class="sand_testing_added_notification">
                          <div id="loading_image" style="display:none;"></div>
                        
                            <form method="post" id="product_add" role="form">
                              <div class="modal-body">
                                  <div class="form-group col-md-6">
                                    <label class="help-block">% of moisture : <span class="text-danger">*</span></label>
                                    <input type="text" id="moisture" required name="moisture" class="form-control" placeholder="Enter % moisture"/>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="help-block">% of clay : <span class="text-danger">*</span></label>
                                    <input type="text" id="clay" required name="clay" class="form-control" placeholder="Enter % clay"/>
                                  </div>
                                    <div class="form-group col-md-6">
                                    <label class="help-block">Any Other Additives <span class="text-danger">*</span></label>
                                    <input type="text" id="o_additives" required name="o_additives" class="form-control" placeholder="Enter Other Additives"/>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="help-block">Shear Strength: <span class="text-danger">*</span></label>
                                    <input type="text" id="shear_strength" required name="shear_strength" class="form-control" placeholder="Enter Shear Strength"/>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="help-block">Permiability: <span class="text-danger">*</span></label>
                                    <input type="text" id="Permiability" required name="Permiability" class="form-control" placeholder="Enter Permiability"/>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="help-block">Active Clay: <span class="text-danger">*</span></label>
                                    <input type="text" id="active_clay" required name="active_clay" class="form-control" placeholder="Enter active clay"/>
                                  </div>
                                   <div class="form-group col-md-6">
                                    <label class="help-block">Dead Clay: <span class="text-danger">*</span></label>
                                    <input type="text" id="dead_clay" required name="dead_clay" class="form-control" placeholder="Enter dead clay"/>
                                  </div>
                                   <div class="form-group col-md-6">
                                    <label class="help-block">GFN: <span class="text-danger">*</span></label>
                                    <input type="text" id="gfn" required name="gfn" class="form-control" placeholder="Enter GFN"/>
                                  </div>
                                   <div class="form-group col-md-6">
                                    <label class="help-block">GCS: <span class="text-danger">*</span></label>
                                    <input type="text" id="gcs" required name="gcs" class="form-control" placeholder="Enter GCS"/>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="help-block">Compactability: <span class="text-danger">*</span></label>
                                    <input type="text" id="Compactability" required name="Compactability" class="form-control" placeholder="Enter GCS"/>
                                  </div>
                                   <div class="form-group col-md-6">
                                    <label class="help-block">Mould Hardness: <span class="text-danger">*</span></label>
                                    <input type="text" id="mould_hardness" required name="mould_hardness" class="form-control" placeholder="Enter GCS"/>
                                  </div>

                                  <div class="clearfix"></div>
                                  
                              </div>
                                
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                                <button type="reset" class="btn btn-default btn-flat"></i> Reset</button>
                                <button type="button" class="btn bg-purple btn-flat" id="sand_testing"><i class="fa fa-plus"></i> Add</button>
                              </div>
                            </form>
                      </div>
                      </span><!--end of help block-->
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
          </div>
        </div>
        <!-- Third Tile ends-->
        <!--Fourth Tile Starts-->
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>75</h3>

              <p>Core Shop</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#add_core_shop">Add <i class="fa fa-arrow-circle-right"></i></a>
                    <div class="modal fade" id="add_core_shop" role="dialog">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header bg-purple">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"> <i class="fa fa-plus"></i> Add Core Shop Details</h4>
                        </div>
                        
                      <span class="help-block">
                        <div class="resolution_added_notification">
                          <div id="loading_image" style="display:none;"></div>
                        
                            <form method="post" id="product_add" role="form">
                              <div class="modal-body">
                                  <div class="form-group col-md-6">
                              <label class="help-block">Type of Melting <span class="text-danger">*</span></label>
                              <select id="defect" required name="defect" class="form-control res_cat">
                                <option value="0">Choose One</option>
                              <?php 
                                $core_type_query = "SELECT sno,core_type FROM meta_core_type WHERE 1=1";
                                $core_type_result = db_all($core_type_query);
                                $core_type_str = "";
                                foreach($core_type_result AS $ctr){
                                  $core_type_str .="<option value=".$ctr['sno']." class='help-block'>".$ctr['core_type']."</option>";
                                }
                                echo $core_type_str;
                              ?>
                              </select>
                            </div>

                                  <div class="clearfix"></div>
                                  
                              </div>
                                
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                                <button type="reset" class="btn btn-default btn-flat"></i> Reset</button>
                                <button type="submit" class="btn bg-purple btn-flat" id="add_core_shop"><i class="fa fa-plus"></i> Add</button>
                              </div>
                            </form>
                      </div>
                      </span><!--end of help block-->
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
          </div>
        </div>
        <!-- Fourth Tile Ends-->

      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2023 <a href="#">Foundry | Data Cast</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!--custom jquery files for db transaction -->
<script src="jQuery/add_product_defect.js"></script>
<script src="jQuery/add_melting_details.js"></script>
<script src="jQuery/sand_testing_details.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

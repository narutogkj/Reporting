<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <title></title>
    <!-- DataTables -->
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/icons.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    if (!localStorage.getItem('token') || !localStorage.getItem('userName') || !localStorage.getItem('password')) { window.location.replace(`index.php`) }
    </script>
</head>

<body>
    <!-- Loader --
        <div id="preloader">
            <div id="status"><div class="spinner"></div></div>
        </div>-->



        <?php include 'header.php' ?>

 
        <div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="ion-close"></i></button>
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
            <a href="index.html" class="logo"><img src="assets/images/logo-lg.png" alt="" class="logo-large" /></a>
        </div>
    </div>
    <div class="sidebar-inner niceScrollleft" style="overflow: hidden; outline: currentcolor none medium;" tabindex="5000">
        <div id="sidebar-menu" class="active">
            <li class="list-inline-item hide-phone app-search12">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search Catalogs..." class="form-control" /> <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
  <li><span class="caret caret-margin-top"><span class="h-g">Catalog Root</span></span>
    <ul class="nested">
      <li><span class="caret">Departmental Catalog</span>
        <ul class="nested">
          <li>
          <span class="caret">Departments</span>
             <ul class="nested">
          <li>
          <span class="caret">Fashion</span>
            <ul class="nested">
              <li>Sencha</li>
              <li>Gyokuro</li>
              <li>Matcha</li>
              <li>Pi Lo Chun</li>
            </ul>
          </li>
        <li>
          <span class="caret">Media</span>
            <ul class="nested">
              <li>Sencha</li>
              <li>Gyokuro</li>
              <li>Matcha</li>
              <li>Pi Lo Chun</li>
            </ul>
          </li>
        <li>
          <span class="caret">Music</span>
            <ul class="nested">
              <li>Sencha</li>
              <li>Gyokuro</li>
              <li>Matcha</li>
              <li>Pi Lo Chun</li>
            </ul>
          </li>
        <li>
          <span class="caret">Apps</span>
            <ul class="nested">
              <li>Sencha</li>
              <li>Gyokuro</li>
              <li>Matcha</li>
              <li>Pi Lo Chun</li>
            </ul>
          </li>
        <li>
          <span class="caret">Movies</span>
            <ul class="nested">
              <li>Sencha</li>
              <li>Gyokuro</li>
              <li>Matcha</li>
              <li>Pi Lo Chun</li>
            </ul>
          </li>
        
        </ul>
      
          </li>
        <li>
          <span class="caret">Green Tea</span>
            <ul class="nested">
              <li>Sencha</li>
              <li>Gyokuro</li>
              <li>Matcha</li>
              <li>Pi Lo Chun</li>
            </ul>
          </li>
        <li>
          <span class="caret">Green Tea</span>
            <ul class="nested">
              <li>Sencha</li>
              <li>Gyokuro</li>
              <li>Matcha</li>
              <li>Pi Lo Chun</li>
            </ul>
          </li>
        
        </ul>
      </li>  
    </ul>
  </li>


        
        </div>


    <div class="wrapper contat-left">
        <div class="container-fluid">
        <p>&nbsp;</p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="row"  novalidate="">
                                <div class="form-group mb-0 col-md-3">
                                    <!--<label class="my-2 py-1">Product Name</label>-->
                                    <!-- <div><input type="email" class="form-control" required="" parsley-type="email" placeholder="Enter Product Name" /></div> -->
                                    <h4>Monthly Reports</h4>
                                    <div>
                                        <select class="form-control">
                                            <option>Select Monthly Reports</option>
                                            <option>Commission Recon Summary</option>
                                            <option>Commission Disqualified Summary report</option>
                                            <option>Sales Tax report</option>
                                        </select>
                                    </div>

                                </div>
                               
                                

                                <div class="form-group mb-0 col-md-3">
                                    <div>
                                        <label class="my-2 py-1">Starting Date :</label>
                                        <input type="date" class="form-control" /> 
                                    </div>
                                </div>
                                <div class="form-group mb-0 col-md-3">
                                    <div>
                                        <label class="my-2 py-1">Ending Date :</label>
                                        <input type="date" class="form-control" /> 
                                    </div>
                                </div>
                                <div class="form-group mb-0 col-md-2">
                                    <!--<h6 class="sub-title my-3">Date Range</h6>-->
                                    <div>
                                        <button type="button" class="btn btn-info waves-effect waves-light">Show
                                            Reports</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- end col -->

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                <thead>
                                    <tr>
                                        <th>File Id</th>
                                        <th>File Name</th>
                                        <th>Starting Date</th>
                                        <th>Ending Date</th>
                                        <th>Company</th>
                                        <th>Report Name</th>
                                        <th>Report type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php include './fetch/getmonthlyReport.php' ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->

            </div>
            <!-- end container -->
        </div>
        <!-- end wrapper -->
        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">© 2020</div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <!-- Required datatable js -->
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="js/dataTables.buttons.min.js"></script>
        <script src="js/buttons.bootstrap4.min.js"></script>
        <script src="js/jszip.min.js"></script>
        <script src="js/pdfmake.min.js"></script>
        <script src="js/vfs_fonts.js"></script>
        <script src="js/buttons.html5.min.js"></script>
        <script src="js/buttons.print.min.js"></script>
        <script src="js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="js/dataTables.responsive.min.js"></script>
        <script src="js/responsive.bootstrap4.min.js"></script>
        <!-- Datatable init js -->
        <script src="js/datatables.init.js"></script>
        <!-- App js -->
        <script src="js/app.js"></script>
        
        <script src="fetch/logout.js"></script>
        <script>
            $(document).ready(function () {
                $("#datatable2").DataTable();
            });
        </script>
        <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>






<script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>

</body>

</html>
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
 
      
    <div class="wrapper contat-left">
        <div class="container-fluid">
            
            <p>&nbsp;</p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="row" novalidate="">
                                <div class="form-group mb-0 col-md-4">
                                    <h4>Weekly Reports</h4>
                                    <div class="mt-2">
                                        <select class="form-control">
                                            <option>Select Weekly Reports*</option>
                                            <option>Aged Inventory Report</option>
                                            <option>Sales Trend report</option>
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
                                    <div>
                                        <button type="button"
                                            class="btn btn-info waves-effect waves-light btn-lg mt-3 ml-3">Show
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
                        <div class="card-body ">

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
                                 <?php include './fetch/getweeklyReport.php' ?>
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
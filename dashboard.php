<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
        <title></title>
        <!-- jvectormap -->
        <link href="css/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="css/vanillaCalendar.css" rel="stylesheet" type="text/css" />
        <link href="css/morris/morris.css" rel="stylesheet" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/icons.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
        if (!localStorage.getItem('token') || !localStorage.getItem('userName') || !localStorage.getItem('password')) { window.location.replace(`index.php`) }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
        <script src="js/chart.js"></script>
    </head>
    <body>
        <?php 
            include "header.php";
            // include './fetch/getAllFile.php'; 
        ?>


        <div class="wrapper contat-left">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                            </div>
                            <h4 class="page-title">Sales Trends</h4>
                        </div>
                    </div>
                </div>


                <!-- <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round"><i class="fa fa-eye"></i></div>
                                            </div>
                                            <div class="col-9 align-self-center text-right">
                                                <div class="m-l-10">
                                                    <h5 class="mt-0">
                                                        <?php
                                                            // echo $totalReport;
                                                        ?>
                                                    
                                                    </h5>
                                                    <p class="mb-0 text-muted">
                                                        TOTAL REPORTS 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress mt-3" style="height: 3px;"><div class="progress-bar bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round"><i class="fa fa-user-plus"></i></div>
                                            </div>
                                            <div class="col-9 text-right align-self-center">
                                                <div class="m-l-10">
                                                    <h5 class="mt-0">
                                                        <?php
                                                        //   echo $totalDailyReport
                                                        ?>
                                                    </h5>
                                                    <p class="mb-0 text-muted">DAILY REPORTS</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress mt-3" style="height: 3px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="search-type-arrow"></div>
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round"><i class="fa fa-cart-arrow-down"></i></div>
                                            </div>
                                            <div class="col-9 align-self-center text-right">
                                                <div class="m-l-10">
                                                    <h5 class="mt-0">
                                                        <?php
                                                        //   echo $totalWeeklyReport;
                                                        ?>
                                                    </h5>
                                                    <p class="mb-0 text-muted">WEEKLY REPORTS</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress mt-3" style="height: 3px;"><div class="progress-bar bg-danger" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div></div>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round"><i class="fa fa-user-plus"></i></div>
                                            </div>
                                            <div class="col-9 text-right align-self-center">
                                                <div class="m-l-10">
                                                    <h5 class="mt-0">
                                                    <?php
                                                        // echo $totalMonthlyReport;
                                                    ?>
                                                    </h5>
                                                    <p class="mb-0 text-muted">MONTHLY REPORTS</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress mt-3" style="height: 3px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   
                </div> -->
              


                <div class="row">
                    <div class="col-xl-12"> <!-- chart section-->
                        <div class="card">
                            <canvas id="myChart1" width="100%"></canvas>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <ul class="list-group" id="productlist">

                        </ul>
                    </div>
                    
                    <div class="col-xl-4">
                        <ul class="list-group" id="storelist">

                        </ul>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <label for="vehicle1">From: </label>
                            <input type="date" name="vehicle1"  id="startDate"> <br><br>
                            <label for="vehicle1">To: </label>
                            <input type="date" name="vehicle1"  id="endDate">
                        </div>
                    </div>




                </div>
                <input type="button" class="btn btn-primary" value="submit" onclick="filterButton()">







                <!-- <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body new-user">
                                <h5 class="header-title mb-4 mt-0">My Excel Reports</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">File Id</th>
                                                <th class="border-top-0">Starting Date</th>
                                                <th class="border-top-0">Ending Date</th>
                                                <th class="border-top-0">Title</th>
                                                <th class="border-top-0">Report Name</th>
                                                <th class="border-top-0">Report</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           foreach($data as $d){
                                            echo '
                                            <tr>
                                                <td><a href="report.php?file-id='.$d->file_id.'">'.$d->file_id.'</a></td>
                                                <td class="startingDate">'.$d->starting_date.'</td>
                                                <td class="endingDate">'.$d->ending_date.'</td>
                                                <td>'.$d->title.'</td>
                                                <td>'.$d->report_name.'</td>
                                                <td><a href="'.$d->report_type.'.php">'.$d->report_type.'</td>
                                            </tr>
                                            
                                           ';
                                        }
                                          ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->



            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row"><div class="col-12">© 2020</div></div>
            </div>
        </footer>
        <!-- End Footer --><!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="js/jquery-jvectormap-world-mill-en.js"></script>
        <script src="js/skycons.min.js"></script>
        <script src="js/vanillaCalendar.js"></script>
        <script src="js/raphael-min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/dashborad.js"></script>
        <!-- App js -->
        <script src="js/app.js"></script>
        <script src="fetch/logout.js"></script>
        <script src="fetch/dashboard.js"></script>
        <script>
        
        //Sidebar Navigation
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        var toggler = document.getElementsByClassName("caret");
        for (var i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function () {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
        }

        </script>
    </body>
</html>

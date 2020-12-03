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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
    <script src="js/chart.js"></script>
    <script>
    if (!localStorage.getItem('token') || !localStorage.getItem('userName') || !localStorage.getItem('password')) { window.location.replace(`index.php`) }
    </script>
   <style>
    .download-button {
        padding: 15px;
        margin-top: 112px;
    }
   </style>
    </head>
    <body>
        <?php include "header.php" ?>
 
      
       

        <div class="wrapper contat-left">
            <div class="container-fluid">
                <?php include './fetch/getSingleFileData.php' ?>
                <div class="row">
                  <div class="col-2">
                    <div class="list-group" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Bar Chart</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Doughnut Chart</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Polar Chart</a>
                      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Radar Chart</a>
                    </div>
                      <div class="card button-list download-button">
                        <button type="button" class="btn btn-outline-primary btn-rounded waves-effect waves-light">Download</button>
                        <button type="button" class="btn btn-outline-success btn-rounded waves-effect waves-light">PDF</button>
                        <button type="button" class="btn btn-outline-info btn-rounded waves-effect waves-light">Copy</button>
                      </div>  
                  </div>
                  <div class="col-10 card">
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div>
                          <canvas id="myChart1" width="160"></canvas>
                        </div>
                      </div>

                      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div>
                          <canvas id="myChart2" width="160"></canvas>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div>
                          <canvas id="myChart3" width="160"></canvas>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <div>
                          <canvas id="myChart4" width="160"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>
        <!-- end wrapper --><!-- Footer -->
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


      <script>



      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }

      var toggler = document.getElementsByClassName("caret");
      var i;

       for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
          this.parentElement.querySelector(".nested").classList.toggle("active");
          this.classList.toggle("caret-down");
        });
      }

     
      fileID  = fileID.innerHTML;
      fileID = fileID.replace(/\s/g, '')
      console.log(fileID)
      axios.get(`http://localhost:3000/api/file/${fileID}`).then((res) =>{
        let data = res.data.data.jsonDataForCharting
        if (res.data.data.report_name == 'Credit card Discrepancy report'){
          CreditCardDiscrepancyReportCharting(data);
        }else if(res.data.data.report_name == 'Sales Trend report'){
          SalesTrendreportCharting(data)
        }
      })


      function SalesTrendreportCharting(data){
        let dataArray = [];
        let labelArray =[];
        let valueArray = [];
        data.map((d)=>{
          dataArray.push(Object.values(d))
        })
        dataArray.map((d)=>{
          labelArray.push(d[0])
          valueArray.push(d[1])
        })
        barChart(dataArray,labelArray, valueArray )  
        doughnutChart(dataArray,labelArray, valueArray )
        bubbleChart(dataArray,labelArray, valueArray )
        lineChart(dataArray,labelArray, valueArray )
      }

      function barChart(dataArray,labelArray, valueArray ){
        var ctx = document.getElementById('myChart1').getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: labelArray,
                    datasets: [{
                        label: 'Top 5 Phone Models Sold from 12.01.2018 - 12.09.2018',
                        data: valueArray,
                        backgroundColor: [
                            'rgba(255, 99, 132)',
                            'rgba(54, 162, 235)',
                            'rgba(255, 206, 86)',
                            'rgba(75, 192, 192)',
                            'rgba(153, 102, 255)',
                            'rgba(255, 159, 64)'
                        ]
                    }]
                  },
                  options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                  }
                });
      }
      function doughnutChart(dataArray,labelArray, valueArray ){
        var ctx = document.getElementById('myChart2').getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'doughnut',
                  data: {
                    labels: labelArray,
                    datasets: [{
                        label: 'Top 5 Phone Models Sold from 12.01.2018 - 12.09.2018',
                        data: valueArray,
                        backgroundColor: [
                            'rgba(255, 99, 132)',
                            'rgba(54, 162, 235)',
                            'rgba(255, 206, 86)',
                            'rgba(75, 192, 192)',
                            'rgba(153, 102, 255)',
                            'rgba(255, 159, 64)'
                        ]
                    }]
                  },
                  options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                  }
                });
      }
      function bubbleChart(dataArray,labelArray, valueArray ){
        var ctx = document.getElementById('myChart3').getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'polarArea',
                  data: {
                    labels: labelArray,
                    datasets: [{
                        label: 'Top 5 Phone Models Sold from 12.01.2018 - 12.09.2018',
                        data: valueArray,
                        backgroundColor: [
                            'rgba(255, 99, 132)',
                            'rgba(54, 162, 235)',
                            'rgba(255, 206, 86)',
                            'rgba(75, 192, 192)',
                            'rgba(153, 102, 255)',
                            'rgba(255, 159, 64)'
                        ]
                    }]
                  },
                  options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                  }
                });
      }
      function lineChart(dataArray,labelArray, valueArray ){
        var ctx = document.getElementById('myChart4').getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                    labels: labelArray,
                    datasets: [{
                        label: 'Top 5 Phone Models Sold from 12.01.2018 - 12.09.2018',
                        data: valueArray,
                        backgroundColor: [
                            'rgba(255, 99, 132)',
                            'rgba(54, 162, 235)',
                            'rgba(255, 206, 86)',
                            'rgba(75, 192, 192)',
                            'rgba(153, 102, 255)',
                            'rgba(255, 159, 64)'
                        ]
                    }]
                  },
                  options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                  }
                });
      }
</script>
</body>
</html>

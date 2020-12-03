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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js" ></script>
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

    <div class="wrapper">
      


        <div class="d-flex justify-content-center" style="margin-top: 40px">
          <div class="card">
           <div class="container">
           
           <div style="margin: 30px">
                <h5 class="d-flex justify-content-center">Publish Excel Report</h5>
                <hr>
                <form id="onlyfileUpload">
                    <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4"><h6>Upload Excel File :</h6></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileUploadInputField">
                            <label class="custom-file-label" id="fileUploadInputFielabel" for="customFile">Custom file upload</label>
                        </div>
                    </div>
                    </div>
                </form>
                <br>
                <form id="formUpload">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCompany"><h6>Title of File :</h6></label>
                            <input type="text" class="form-control" id="inputTitle" placeholder="Give the title of Report">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDate"><h6>Date :</h6></label>
                            <input type="date" class="form-control" id="inputDate" >                   
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputreportName"><h6>Report Name :</h6></label>
                            <select id="inputreportName" class="form-control">
                                <option>Cash Discrepancy report</option>
                                <option>Credit card Discrepancy report</option>
                                <option>EPay Discrepancy report</option>
                                <option>GP Report - Sample report</option>
                                <option>Commission Recon Summary</option>
                                <option>Disqualified summary report</option>
                                <option>Sales Tax report</option>
                                <option>Aged Inventory Report</option>
                                <option>Sales Trend report</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputReportType"><h6>Report Type :</h6></label>
                            <select id="inputReportType" class="form-control">
                                <option>Daily</option>
                                <option>Weekly</option>
                                <option>Monthly</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class=" d-flex justify-content-end">
                    <button href="" class="btn btn-outline-primary mr-2">Clear Form</button>
                    <button type="submit" id="submitButton" class="btn btn-primary btn-lg">Upload</button>
                    
                    </div>
                    <p id="warningLine" class="d-flex justify-content-center danger"></p>
                </form>
            </div>
            </div>
            </div>
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



            let filename;    
            const fileUploadInputField = document.querySelector("#fileUploadInputField");
            let formUpload = document.querySelector("#formUpload");
            let inputTitle = document.querySelector("#inputTitle");
            let inputDate = document.querySelector("#inputDate");
            let inputreportName = document.querySelector("#inputreportName");
            let inputReportType = document.querySelector("#inputReportType");
            let fileUploadInputFielabel = document.querySelector("#fileUploadInputFielabel");


            function calculatingEndDate(staringDate){
                if(inputReportType.value == 'Daily'){
                    return new Date(staringDate).getTime()
                }else if(inputReportType.value == 'Weekly'){
                    let date = new Date(staringDate)
                    return date.getTime()+(604800*1000)
                }else{
                    let date = new Date(staringDate)
                    return date.getTime()+(2592000*1000)
                }
            }

            let submitButton = document.querySelector("#submitButton");


            formUpload.addEventListener('submit', (e) => {

                e.preventDefault()
                submitButton.innerHTML = 'Wait...'

                setTimeout(() =>{
                    warningLine.innerHTML = "Your File is too big , Please wait while processing"
                }, 1500);
                
                let uploadObject = {};
                uploadObject.file_name = filename;
                uploadObject.file_source = `http://localhost:3000/files/${filename}`
                uploadObject.title = inputTitle.value
                uploadObject.report_name = inputreportName.value
                uploadObject.report_type = inputReportType.value
                uploadObject.starting_date = new Date(inputDate.value).getTime()
                uploadObject.ending_date = calculatingEndDate(inputDate.value)
                console.log(uploadObject)


                
                axios.post('http://localhost:3000/api/file', uploadObject)
                .then(function (res) {
                    console.log(res);
                    if(res.data.success == 1){
                        window.location.replace(`dashboard.php?success=true`)
                    }
                })
            })


            let progressBar = function (progressEvent) {
                var percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent.total)
                console.log(percentCompleted)
            }


            fileUploadInputField.addEventListener('input', (e) => {
                console.log(fileUploadInputField.files[0])
                fileUploadInputFielabel.innerHTML = fileUploadInputField.files[0].name
                let formData = new FormData();
                formData.append("image", fileUploadInputField.files[0]);
                axios.post('http://localhost:3000/api/image', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                    onUploadProgress: progressBar
                }).then(data => {
                    filename = data.data.filename   
                })
            })


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
        </script>
    </body>
</html>
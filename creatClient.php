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
                <h5 class="d-flex justify-content-center">Create Client Account</h5>
                <hr>
                
                
                <form id="employeeForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCompany"><h6>First Name :</h6></label>
                            <input type="text" class="form-control" id="inputFirstname" placeholder="First name of Client">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDate"><h6>Last Name :</h6></label>
                            <input type="text" class="form-control" id="inputlastname" placeholder="Last name of Client">                   
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCompany"><h6>UserName :</h6></label>
                            <input type="text" class="form-control" id="inputUsername" placeholder="Give the username of Client">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDate"><h6>Company Name :</h6></label>
                            <input type="text" class="form-control" id="inputCompanyname" placeholder="Company name of Client">                   
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCompany"><h6>Password :</h6></label>
                            <input type="text" class="form-control" id="inputPassword" placeholder="Create password for this Account">
                        </div>
                    </div>
                    <br>
                   
                    <hr>
                    <div class=" d-flex justify-content-end">
                        <button type="submit" id="submitButton" class="btn btn-primary btn-lg">Create</button>
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



            let filename;    
            const employeeForm = document.querySelector("#employeeForm");
            const inputFirstname = document.querySelector("#inputFirstname");
            const inputlastname = document.querySelector("#inputlastname");
            const inputUsername = document.querySelector("#inputUsername");
            const inputCompanyname = document.querySelector("#inputCompanyname");
            const inputPassword = document.querySelector("#inputPassword");
            employeeForm.addEventListener('submit', (e) => {

                e.preventDefault()
        
                let formObject = {};
                formObject.firstName = inputFirstname.value
                formObject.lastName = inputlastname.value
                formObject.userName = inputUsername.value
                formObject.companyname = inputCompanyname.value
                formObject.password = inputPassword.value


                console.log(formObject)


                
                axios.post('http://localhost:3000/api/users', formObject)
                .then(function (res) {
                    if(res.data.success == 1){
                        window.location.replace(`dashboard.php`)
                    }else{
                        alert('something went wrong')
                    }
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
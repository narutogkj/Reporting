<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/icons.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js" ></script>

    </head>
    <body>
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-2 mb-4">
                        <img src="images/logo.png" alt="" class="">
                    </div>
                    <div class="px-3 pb-3">
                        <form class="form-horizontal m-t-20" id="loginForm">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="Username" id="usernameInput"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" placeholder="Password" id="passwordInput" />
                                </div>
                            </div>
                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                        <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-t-10 mb-0 row">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!-- App js -->
        <script src="js/app.js"></script>
        <script>

            let loginForm = document.querySelector("#loginForm");
            let usernameInput = document.querySelector("#usernameInput");
            let passwordInput = document.querySelector("#passwordInput");
            loginForm.addEventListener('submit', (e) => {
                e.preventDefault()
                let formobject = {}
                formobject.userName = usernameInput.value
                formobject.password = passwordInput.value
                console.log(formobject)
                axios.post('http://localhost:3000/api/users/login', formobject)
                .then(function (res) {
                    console.log(res);
                    if(res.data.success == 1){
                        axios.post('http://localhost:3000/api/users/login', formobject)
                        .then(function (res) {
                            
                        })
                        localStorage.setItem('token', res.data.token);
                        localStorage.setItem('userName', formobject.userName);
                        localStorage.setItem('password', formobject.password);
                        localStorage.setItem('admin', res.data.admin);
                        window.location.replace(`dashboard.php`)
                    }
                    if(res.data.success == 0){
                        alert(res.data.data)
                        usernameInput.value = '';
                        passwordInput.value = ''
                    }
                })


            })

        </script>
    </body>

</html>

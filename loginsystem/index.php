<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Patient Health Monitoring System</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        .bg {
            /* The image used */
            background-image: url("bg3.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="bg">
   
    <div id="layoutSidenav">

        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                    <h1 class="mt-4" style="color:black;">Patient Health Monitoring System</h1>

                    <div class="row" style="margin-left:800px;">
                        <div class="col-xl-2 col-md-2">
                            <div class="card bg-primary text-white mb-4" style="width:170px;margin-left:150px;">
                                <!-- <div class="card-body">Patient Registeration</div> -->
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-black" href="signup.php">Patient Registeration</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-md-1">
                            <div class="card bg-warning text-white mb-4" style="width:150px;margin-left:220px;">
                                <!-- <div class="card-body">Patient Login</div> -->
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-black" href="login.php">Patient Login</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-md-2">
                            <div class="card bg-danger text-white mb-4" style="width:150px;margin-left:340px;">
                                <!-- <div class="card-body">Admin Login</div> -->
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-black" href="admin">Admin Login</a>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div style="height: 100vh"></div>

                </div>
            </main>
          
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Log in</title>
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

</head>
<body>
<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="https://careerwise.school/app/uploads/sites/9/2020/07/1593039523.jpg"> </div>
                        <h6 class="msg-info">Please login to your account</h6>
                        <div class="form-group"> <label class="form-control-label text-muted">Username</label> <input type="text" id="email" name="email" placeholder="Username or email id" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="psw" name="psw" placeholder="Password" class="form-control"> </div>
                        <div <button type="button" class="btn btn-dark">Login</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
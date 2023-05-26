<?php include ('include/header.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Login Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<div class="container">
    <div class="body d-md-flex align-items-center justify-content-between">
        <div class="box-1 mt-md-0 mt-5">
            <img src="https://images.pexels.com/photos/2033997/pexels-photo-2033997.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                class="" alt="">
        </div>
        <div class=" box-2 d-flex flex-column h-100" id="deux">
            <div class="mt-5">
                <p class="mb-1 h-1">Create Account.</p>
                <p class="text-muted mb-2">Share your thouhts with the world form today.</p>
                <div class="d-flex flex-column ">
                    <p class="text-muted mb-2">Continue with...</p>
                    <div class="d-flex align-items-center">
                        <a href="#" class="box me-2 selectio">
                            <span class="fab fa-facebook-f mb-2"></span>
                            <p class="mb-0">Facebook</p>
                        </a>
                        <a href="#" class="box me-2">
                            <span class="fab fa-google mb-2"></span>
                            <p class="mb-0">Google</p>
                        </a>
                        <a href="#" class="box">
                            <span class="far fa-envelope mb-2"></span>
                            <p class="mb-0">Email</p>
                        </a>
                    </div>
                    <div class="mt-3">
                        <p class="mb-0 text-muted">Already have an account?</p>
                        <div class="btn btn-primary">Log in<span class="fas fa-chevron-right ms-1"></span></div>
                    </div>
                </div>
            </div>
            <div class="mt-auto">
                <p class="footer text-muted mb-0 mt-md-0 mt-4">By register you agree with our
                    <span class="p-color me-1">terms and conditions</span>and
                    <span class="p-color ms-1">privacy policy</span>
                </p>
            </div>
        </div>
        <span class="fas fa-times"></span>
    </div>
</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

.container {
    margin: 50px auto;
}

.body {
    position: relative;
    width: 720px;
    height: 440px;
    margin: 20px auto;
    border: 1px solid #dddd;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.box-1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.box-2 {
    padding: 10px;
}

.box-1,
.box-2 {
    width: 50%;
}

.h-1 {
    font-size: 24px;
    font-weight: 700;
}

.text-muted {
    font-size: 14px;
}

.container .box {
    width: 100px;
    height: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid transparent;
    text-decoration: none;
    color: #615f5fdd;
}

.box:active,
.box:visited {
    border: 2px solid #ee82ee;
}

.box:hover {
    border: 2px solid #ee82ee;
}

.btn.btn-primary {
    background-color: transparent;
    color: #ee82ee;
    border: 0px;
    padding: 0;
    font-size: 14px;
}

.btn.btn-primary .fas.fa-chevron-right {
    font-size: 12px;
}

.footer .p-color {
    color: #ee82ee;
}

.footer.text-muted {
    font-size: 10px;
}

.fas.fa-times {
    position: absolute;
    top: 20px;
    right: 20px;
    height: 20px;
    width: 20px;
    background-color: #f3cff379;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fas.fa-times:hover {
    color: #ff0000;
}

@media (max-width:767px) {
    body {
        padding: 10px;
    }

    .body {
        width: 100%;
        height: 100%;
    }

    .box-1 {
        width: 100%;
    }

    .box-2 {
        width: 100%;
        height: 440px;
    }




}
</style>



<body>
    <div class="container-fluid vh-100" style="margin-top:300px">
        <div class="" style="margin-top:200px">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center">
                        <h3 class="text-primary">Sign In</h3>
                    </div>
                    <form action="">
                        <div class="p-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-person-plus-fill text-white"></i></span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-key-fill text-white"></i></span>
                                <input type="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                            </div>
                            <button class="btn btn-primary text-center mt-2" type="submit">
                                Login
                            </button>
                            <p class="text-center mt-5">Don't have an account?
                                <span class="text-primary">Sign Up</span>
                            </p>
                            <p class="text-center text-primary">Forgot your password?</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php include "function.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Simple App PHP</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
</head>

<body>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <h2 class=" display-5 fw-bold ls-tight" id="content" style="color: hsl(218, 81%, 95%)">
            Simple App PHP
        </h2>
        <div class="container px-4 px-md-5 text-center text-lg-start">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-2 mb-lg-0" style="z-index: 10" id="registration_form">

                    <h3 class="display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Registration
                    </h3>
                    <div class="card bg-glass">

                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="index.php" method="post">
                                <div class="form-group mb-4">
                                    <label class="form-label" for="form3Example4">First Name</label>
                                    <input type="text" id="first_name" class="form-control" placeholder="Enter your first name" name="first_name" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label class="form-label" for="form3Example4">Last Name</label>
                                    <input type="text" id="last_name" class="form-control" placeholder="Enter your last name" name="last_name" required />
                                </div>

                                <!-- Email input -->
                                <div class="form-group mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="email" id="email" class="form-control" placeholder="Enter your email address" name="email" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label class="form-label" for="form3Example4">Confirm Email</label>
                                    <input type="email" id="conf_email" class="form-control" placeholder="Enter your confirm email" name="conf_email" required />
                                </div>

                                <!-- Password input -->
                                <div class="form-group mb-4">
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password" required />
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4" name="register">
                                    Register
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4 mb-5 mb-lg-0 position-relative" id="login_form">
                    <h3 class="display-5 fw-bold ls-tight" id="login-content" style="color: hsl(218, 81%, 95%)">
                        Login
                    </h3>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                    <div class="card bg-glass">
                        <div class="card-body px-3 py-5 px-md-4">
                            <form action="login/login.php">
                                <!-- Email input -->
                                <div class="form-group mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="text" id="lg_email" class="form-control" name="lg_email" placeholder="Registed email" required />
                                </div>

                                <!-- Password input -->
                                <div class="form-group mb-4">
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <input type="password" id="lg_password" class="form-control" name="lg_password" placeholder="Enter your password" required />
                                </div>

                                <!-- Submit button -->
                                <input type="submit" class="btn btn-success btn-block mb-4" name="login" value="Login" />

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>or sign up with:</p>
                                    <button type="button" class="btn btn-dark mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-dark mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-dark mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-dark mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</body>

</html>
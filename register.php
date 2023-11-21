<?php include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Account</title>

    <!-- ======== Styles ======== -->
    <!-- ======== Bootstrap  ======= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    <!-- ======== Fontawesome ========-->
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <!-- ======== Custom CSS ======== -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="non-navbar">
    <!-- ======== Main wrapper =========== -->

    <div class="wrapper">

        <!-- ========= Main section ======= -->

        <div class="main">

            <!-- ========= Main content section ======= -->

            <main class="content px-3 py-2">
                <div class="container-fluid col-md-6 mt-2">

                    <!-- ======== Login Form ======== -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Create an Account</h3>
                        </div>
                        <div class="card-body">
                            <form action="register.php" method="POST">

                                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                                <div class="mb-3">
                                    <label class="form-label" for="username">Username:</label>
                                    <input type="text" class="form-control" value="<?= $username ?>" name="username">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Full name:</label>
                                    <input type="text" class="form-control" value="<?= $name ?>" name="name" name="fullname">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address:</label>
                                    <input type="email" class="form-control" value="<?= $email ?>" aria-describedby="Registratio Email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="phone">Phone number:</label>
                                    <input type="text" class="form-control" value="<?= $phone ?>" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" class="form-control" value="<?= $password ?>" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="confpassword" class="form-label">Confirm Password:</label>
                                    <input type="password" class="form-control" value="<?= $confPassword ?>" name="confpassword">
                                </div>
                                <div class="d-grid my-3">
                                    <button name="register-btn" type="submit" class="btn btn-primary">Create</button>
                                </div>
                                <div class="mb-3">
                                    <div class="form-text text-center">Have an acount?
                                        <a href="<?= BASE_URL . '/login.php' ?>" class="text-primary">Login here</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </main>

            <!-- ========= light and dark mode toggle button ======= -->

            <!-- <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a> -->

            <!-- ========= footer section ======= -->
            <footer class="footer mt-auto">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="text-center">
                            <p class="mb-0"></p><strong>© 2023 noke</strong></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ======== Custom js ======= -->
    <script src="assets/js/script.js"></script>
</body>

</html>
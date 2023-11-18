<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Income</title>

    <!-- ======== Styles ======== -->
    <!-- ======== Bootstrap  ======= -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
    />
    <!-- ======== Fontawesome ========-->
    <script
      src="https://kit.fontawesome.com/ae360af17e.js"
      crossorigin="anonymous"
    ></script>
    <!-- ======== Custom CSS ======== -->
    <link rel="stylesheet" href="../../assets/css/style.css" />
  </head>

  <body>
    <!-- ======== Main wrapper =========== -->

    <div class="wrapper">
      <!-- =========== Sidebar =========== -->

      <?php include(ROOT_PATH . "/app/includes/viewsSidebar.php"); ?>

      <!-- ========= Main section ======= -->

      <div class="main">
        <!-- ========= Main navbar section ======= -->

        <?php include(ROOT_PATH . "/app/includes/viewsnavbar.php"); ?>

        <!-- ========= Main content section ======= -->

        <main class="content px-3 py-2">
          <div class="container-fluid col-md-8">
            <div class="row mb-3">
              <div class="mb-3">
                <h5>Edit Income</h5>
              </div>             
            </div>

            <!-- ======== Income Form ======== -->
            <form>
              <fieldset>
                <legend>Income details</legend>
                <div class="mb-3">
                  <label for="source" class="form-label">Source:</label>
                  <input type="text" id="source" name="source" class="form-control" placeholder="Salary" required>
                </div>
                <div class="mb-3">
                  <label for="amount" class="form-label">Amount</label>
                  <input type="number" id="amount" name="amount" class="form-control" placeholder="500" required>
                </div>
                <div class="mb-3">
                  <label for="date" class="form-label">Date</label>
                  <input type="date" id="date" name="date" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label for="details" class="form-label">Details</label>
                  <textarea type="text" id="details" name="details" class="form-control" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </fieldset>
            </form>
          </div>
          
        </main>

        <!-- ========= light and dark mode toggle button ======= -->

        <a href="#" class="theme-toggle">
          <i class="fa-regular fa-moon"></i>
          <i class="fa-regular fa-sun"></i>
        </a>

        <!-- ========= footer section ======= -->

        <footer class="footer mt-auto">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-6 text-center">
                <p class="mb-0"></p><strong>© 2023 noke</strong></p>
              </div>
              <div class="col-6 text-end">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="../index.php" class="text-muted">Home</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ======== Custom js ======= -->
    <script src="../../assets/js/script.js"></script>
  </body>
</html>

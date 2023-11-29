<?php include("../../path.php"); 
include(ROOT_PATH . "/app/controllers/income.php");
usersOnly();
?>
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
            <form action="edit_income.php" method="POST">
              <fieldset>
              <input type="hidden" value="<?= $income['IncomeID'] ?>" name="id">
                <legend>Income details</legend>
                <div class="mb-3">
                  <label for="source" class="form-label">Source:</label>
                  <input type="text" value="<?= $source ?>" name="source" class="form-control" placeholder="Salary" required>
                </div>
                <div class="mb-3">
                  <label for="amount" class="form-label">Amount</label>
                  <input type="number" value="<?= $amount ?>" name="amount" class="form-control" placeholder="500" required>
                </div>
                <div class="mb-3">
                  <label for="date" class="form-label">Date</label>
                  <input type="date" value="<?= $date ?>" name="date" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label for="details" class="form-label">Details</label>
                  <textarea type="text" id="details" name="details" class="form-control" rows="2"><?= $details ?>"</textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="update-income-btn">Update</button>
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

        <?php include(ROOT_PATH . "/app/includes/viewsFooter.php"); ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ======== Custom js ======= -->
    <script src="../../assets/js/script.js"></script>
  </body>
</html>

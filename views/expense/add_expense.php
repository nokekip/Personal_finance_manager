<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Expense</title>

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
                <h5>Add Expense</h5>
              </div>
              <div class="d-inline-flex gap-1">
                <a href="#" class="btn btn-primary" role="button">Add Expense</a>
                <a href="#" class="btn btn-primary" role="button">Manage Expense</a>
              </div>              
            </div>

            <!-- ======== Income Form ======== -->
            <form>
              <fieldset>
                <legend>Expense details</legend>
                <div class="mb-3">
                  <label for="category" class="form-label">Categoty:</label>
                  <select id="category" class="form-select" aria-label="
                  select expense category" required>
                    <option selected disabled>Select category</option>
                    <option value="1">Food</option>
                    <option value="2">Transport</option>
                    <option value="3">Entertainment</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="particulars" class="form-label">Particulars:</label>
                  <input type="text" id="particulars" name="particulars" class="form-control" placeholder="eg. groceries" required>
                </div>
                <div class="mb-3">
                  <label for="amount" class="form-label">Amount:</label>
                  <input type="number" id="amount" name="amount" class="form-control" placeholder="500" required>
                </div>
                <div class="mb-3">
                  <label for="date" class="form-label">Date:</label>
                  <input type="date" id="date" name="date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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

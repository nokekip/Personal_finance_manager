<?php include("../../path.php");
usersOnly();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manage Expense</title>

  <!-- ======== Styles ======== -->
  <!-- ======== Bootstrap  ======= -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
  <!-- ======== Fontawesome ========-->
  <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
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
        <div class="container-fluid coExpensel-md-12">
          <div class="row mb-3">
            <div class="mb-3">
              <h5>All your Expenses</h5>
            </div>
            <div class="d-inline-flex gap-1">
              <a href="#" class="btn btn-primary" role="button">Add Expense</a>
              <a href="#" class="btn btn-primary" role="button">Manage Expense</a>
            </div>
          </div>

          <!-- ======== Expense Table ======== -->
          <div class="card border-0">
            <div class="card-header">
              <h5>Your Expenses</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date</th>
                      <th scope="col">Category</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Particulars</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>12/08/2023</td>
                      <td>Food</td>
                      <td>$20</td>
                      <td>groceries</td>
                      <td>
                        <a href="#" class="btn btn-success btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>20/08/2023</td>
                      <td>Entertainment</td>
                      <td>$50</td>
                      <td>Spotify</td>
                      <td>
                        <a href="#" class="btn btn-success btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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
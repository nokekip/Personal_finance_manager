<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Category</title>

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
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>

  <body>
    <!-- ======== Main wrapper =========== -->

    <div class="wrapper">
      <!-- =========== Sidebar =========== -->

      <aside id="sidebar" class="js-sidebar">
        <!-- ======== Content For Sidebar ========-->
        <div class="h-100">
          <div class="sidebar-logo">
            <a href="#"> <i class="fa-solid fa-coins"></i> PFManager </a>
          </div>

          <!-- ======= Navigation links for sidebar ======== -->
          <ul class="sidebar-nav">
            <li class="sidebar-header">Quick Links</li>
            <li class="sidebar-item">
              <a href="../index.php" class="sidebar-link">
                <i class="fa-solid fa-gauge pe-2"></i>
                Dashboard
              </a>
            </li>
            <li class="sidebar-item">
              <a
                href="#"
                class="sidebar-link collapsed"
                data-bs-target="#income"
                data-bs-toggle="collapse"
                arial-expanded="false"
              >
                <i class="fa-solid fa-hand-holding-dollar pe-2"></i>
                Income
              </a>
              <ul
                id="income"
                class="sidebar-dropdown list-unstyled collapse"
                data-bs-parent="#sidebar"
              >
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Add Income</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Manage Income</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item">
              <a
                href="#"
                class="sidebar-link collapsed"
                data-bs-target="#expense"
                data-bs-toggle="collapse"
                arial-expanded="false"
              >
                <i class="fa-solid fa-money-bill-1-wave pe-2"></i>
                Expense
              </a>
              <ul
                id="expense"
                class="sidebar-dropdown list-unstyled collapse"
                data-bs-parent="#sidebar"
              >
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Add Expense</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Manage Expense</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item">
              <a
                href="#"
                class="sidebar-link collapsed"
                data-bs-target="#budget"
                data-bs-toggle="collapse"
                arial-expanded="false"
              >
                <i class="fa-solid fa-piggy-bank pe-2"></i>
                Budget
              </a>
              <ul
                id="budget"
                class="sidebar-dropdown list-unstyled collapse"
                data-bs-parent="#sidebar"
              >
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Create Budget</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Manage Budget</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item">
              <a href="#" class="sidebar-link">
                <i class="fa-solid fa-chart-column pe-2"></i>
                Reports
              </a>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">
                <i class="fa-solid fa-right-from-bracket pe-2"></i>
                Logout
              </a>
            </li>
          </ul>
        </div>
      </aside>

      <!-- ========= Main section ======= -->

      <div class="main">
        <!-- ========= Main navbar section ======= -->

        <nav class="navbar navbar-expand px-3 border-bottom">
          <button class="btn" id="sidebar-toggle" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                  <img
                    src="../assets/image/profile.jpg"
                    class="avatar img-fluid rounded"
                    alt=""
                  />
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="#" class="dropdown-item">Profile</a>
                  <a href="#" class="dropdown-item">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <!-- ========= Main content section ======= -->

        <main class="content px-3 py-2">
          <div class="container-fluid col-md-8">
            <div class="row mb-3">
              <div class="mb-3">
                <h5>Add Category</h5>
              </div>
              <div class="d-inline-flex gap-1">
                <a href="#" class="btn btn-primary" role="button">Add Category</a>
                <a href="#" class="btn btn-primary" role="button">Manage Category</a>
              </div>              
            </div>

            <!-- ======== Income Form ======== -->
            <form>
              <fieldset>
                <legend>Category details</legend>
                <div class="mb-3">
                  <label for="categoryName" class="form-label">Category name:</label>
                  <input type="text" id="categoryName" name="categoryName" class="form-control" placeholder="Food" required>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Details</label>
                  <textarea type="text" id="description" name="description" class="form-control" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
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
    <script src="../assets/js/script.js"></script>
  </body>
</html>

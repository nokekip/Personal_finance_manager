<?php include("path.php");
include(ROOT_PATH . "/app/database/dbqueries.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
usersOnly();

$user_id = $_SESSION['UserID'];
$expenses = selectAll('Expenditure', ['UserID' => $_SESSION['UserID']]);
$income = calcTotal('Income', $user_id);
$total_expen = calcTotal('Expenditure', $user_id);
$total_balance = $income - $total_expen;
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Finance Manager</title>

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
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <!-- ======== Main wrapper for dashboard =========== -->

    <div class="wrapper">
      <!-- =========== Sidebar for admin dashboard =========== -->

      <?php include(ROOT_PATH . "/app/includes/sidebar.php"); ?>

      <!-- ========= Main section of dashboard ======= -->

      <div class="main">
        <!-- ========= Main navbar section of dashboard ======= -->

        <?php include(ROOT_PATH . "/app/includes/navbar.php"); ?>

        <!-- ========= Main content section of dashboard ======= -->

        <main class="content px-3 py-2">
          <div class="container-fluid">
            <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
            <div class="row mb-3">
              <div class="mb-3">
                <h5>Summary</h5>
              </div>

              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i
                            class="fa-solid fa-hand-holding-dollar fs-1 me-3"
                          ></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>$<?= $income ?></h3>
                          <span>Total Income</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="fa-solid fa-money-bill fs-1 me-3"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>$<?= $total_expen ?></h3>
                          <span>Total Expense</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="fa-solid fa-piggy-bank fs-1 me-3"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>$<?= calcTotal('Budget', $user_id) ?></h3>
                          <span>Total budget</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="fa-solid fa-scale-balanced fs-1 me-3"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>$<?= $total_balance ?></h3>
                          <span>Total Balance</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- ======== Table ======== -->

          <div class="card border-0">
            <div class="card-header">
              <h5>Recent Expenses</h5>
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
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($expenses as $key => $expense): ?>
                      <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $expense['date'] ?></td>
                        <td><?= getCategoryName($expense['categoryID']) ?></td>
                        <td><?= $expense['amount'] ?></td>
                        <td><?= $expense['particulars'] ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </main>

        <!-- ========= light and dark mode toggle button ======= -->

        <a href="#" class="theme-toggle">
          <i class="fa-regular fa-moon"></i>
          <i class="fa-regular fa-sun"></i>
        </a>

        <!-- ========= footer section of dashboard ======= -->

        <footer class="footer mt-auto">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-6 text-center">
                <p class="mb-0"></p><strong>© 2023 noke</strong></p>
              </div>
              <div class="col-6 text-end">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">Home</a>
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
    <script src="assets/js/script.js"></script>
  </body>
</html>

<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/budget.php");
usersOnly();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Budget</title>

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
                <h5>Create Budget</h5>
              </div>
              <div class="d-inline-flex gap-1">
                <a href="<?= BASE_URL . '/views/budget/add_budget.php' ?>" class="btn btn-primary" role="button">Add Budget</a>
                <a href="<?= BASE_URL . '/views/budget/manage_budget.php' ?>" class="btn btn-primary" role="button">Manage Budget</a>
              </div>              
            </div>

            <!-- ======== Budget Form ======== -->
            <form action="add_budget.php" method="POST">
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
              <fieldset>
                <legend>Budget Allocation</legend>
                <div class="mb-3">
                  <label for="category" class="form-label">Categoty:</label>
                  <select name="categoryID" class="form-select" aria-label="
                  select expense category">
                    <option value="">Select category</option>
                    <?php foreach ($categories as $key => $category): ?>
                      <?php if (!empty($category_id) && $category_id == $category['categoryID']): ?>
                        <option selected value="<?php echo $category['categoryID']; ?>"><?php echo $category['categoryName']; ?></option>
                      <?php else: ?>
                        <option value="<?=$category["categoryID"]?>"><?=$category["categoryName"]?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="amount" class="form-label">Amount:</label>
                  <input type="number" value="<?= $amount ?>" name="amount" class="form-control" placeholder="500" required>
                </div>
                <div class="mb-3">
                  <label for="allocationDate" class="form-label">Allocation Date:</label>
                  <input type="date" value="<?= $date ?>" name="allocationDate" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary" name="add-budget-btn">Save Budget</button>
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

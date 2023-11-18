<aside id="sidebar" class="js-sidebar">
    <!-- ======== Content For Sidebar ========-->
    <div class="h-100">
        <div class="sidebar-logo">
            <a href="<?= BASE_URL . './index.php' ?>"> <i class="fa-solid fa-coins"></i> PFManager </a>
        </div>

        <!-- ======= Navigation links for sidebar ======== -->
        <ul class="sidebar-nav">
            <li class="sidebar-header">Quick Links</li>
            <li class="sidebar-item">
                <a href="<?= BASE_URL . './index.php' ?>" class="sidebar-link">
                    <i class="fa-solid fa-gauge pe-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#income" data-bs-toggle="collapse" arial-expanded="false">
                    <i class="fa-solid fa-hand-holding-dollar pe-2"></i>
                    Income
                </a>
                <ul id="income" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Add Income</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Manage Income</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#expense" data-bs-toggle="collapse" arial-expanded="false">
                    <i class="fa-solid fa-money-bill-1-wave pe-2"></i>
                    Expense
                </a>
                <ul id="expense" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Add Expense</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Manage Expense</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#budget" data-bs-toggle="collapse" arial-expanded="false">
                    <i class="fa-solid fa-piggy-bank pe-2"></i>
                    Budget
                </a>
                <ul id="budget" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
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
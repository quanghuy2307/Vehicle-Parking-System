<?php

session_start();

include_once('./assets/includes/db-connection.php');

if (!isset($_SESSION['aid'])) {
    header('location:./logout.php');
}
else {
    $col = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `company_info_tbl`;"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/Monitor_turquoise.png" />

    <!--  -->
    <title>Automatic Vehicle Parking System - Dashboard Admin</title>

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet' />

    <!-- User css -->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 ps-lg-4" href="./dashboard.php">Dashboard Admin</a>

        <!-- Sidebar Toggle-->
        <a class="btn text-white me-3" id="sidebarToggle" href="#!">
			<i class="fa-solid fa-bars-progress"></i>
        </a>

        <!-- Navbar dropdown-->
        <ul class="navbar-nav ms-auto pe-3 pe-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa-solid fa-user-large"></i>
				</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./admin-profile.php"><i class="dropdown-icon fa-solid fa-user me-1"></i>Profile</a></li>
                    <li><a class="dropdown-item" href="./company-information.php"><i class="dropdown-icon fa-solid fa-gears me-1"></i>Setting</a></li>
                    <li><a class="dropdown-item" href="./change-password.php"><i class="dropdown-icon fa-solid fa-key me-1"></i>Change Password</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item text-danger" href="./logout.php"><i class="dropdown-icon fa-solid fa-power-off me-1"></i>Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Main -->
    <main id="sidenav">
        <!-- Sidenav -->
        <section id="sidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <!-- Sidenav Search-->
                <form class="mt-3 mx-3">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" />
                        <button type="button" class="btn btn-secondary">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>                
                
                <!-- Sidenav Menu -->
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- Core -->
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="./dashboard.php">
                            <div class="sb-nav-link-icon"><i class='bx bxs-dashboard'></i></div>
                            Dashboard
                        </a>
                        
                        <!-- Manager -->
                        <div class="sb-sidenav-menu-heading">Manager</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVehicles" aria-expanded="false" aria-controls="collapseVehicles">
                            <div class="sb-nav-link-icon"><i class='bx bxs-car'></i></div>
                            Vehicles
                            <div class="sb-sidenav-collapse-arrow"><i class='bx bx-chevron-down'></i></div>
                        </a>
                        <div class="collapse" id="collapseVehicles" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="./in-vehicles.php"><div class="sb-nav-link-icon"><i class='bx bxs-log-in'></i></div>In</a>
                                <a class="nav-link" href="./out-vehicles.php"><div class="sb-nav-link-icon"><i class='bx bxs-log-out'></i></div>Out</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                            <div class="sb-nav-link-icon"><i class='bx bx-group'></i></div>
                            Users
                            <div class="sb-sidenav-collapse-arrow"><i class='bx bx-chevron-down'></i></div>
                        </a>
                        <div class="collapse" id="collapseUsers" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="./nomal-users.php"><div class="sb-nav-link-icon"><i class='bx bxs-coin'></i></div>Nomal</a>
                                <a class="nav-link" href="./premium-users.php"><div class="sb-nav-link-icon"><i class='bx bxs-dollar-circle'></i></div>Premium</a>
                            </nav>
                        </div>

                        <!-- View -->
                        <div class="sb-sidenav-menu-heading">View</div>
                        <a class="nav-link" href="./categories.php"><div class="sb-nav-link-icon"><i class='bx bx-category'></i></div>Categories</a>
                        <a class="nav-link" href="./reports.php"><div class="sb-nav-link-icon"><i class='bx bxs-report'></i></div>Reports</a>
                        <a class="nav-link" href="./sales.php"><div class="sb-nav-link-icon"><i class='bx bxs-wallet-alt'></i></div>Sales</a>
                    </div>
                </div>

                <!-- Sidenav-footer -->
                <div class="sb-sidenav-footer">
                    <h6 class="text-white">Logged in as:<span class="text-warning"> Admin</span></h6>
                </div>
            </nav>
        </section>

        <!-- Content -->
        <section id="sidenav_content">
            <!-- Header content -->
            <header>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Company Information</h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="./dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Company Information</li>
                    </ol>
                </div>
            </header>

            <!-- Main content -->
            <main>
                <div class="container-fluid px-4">
                    <?php include('message.php'); ?>

					<div class="card mb-4">
                        <div class="card-header border-bottom-0">
                            <div class="text-success"><i class='bx bx-check me-1'></i>Last updated on <?php echo $col['LastUpdate']; ?></div>
                        </div>
                        <div class="card-body">
                            <form method="post" class="needs-validation" action="code.php" autocomplete="off" novalidate>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="name">Company Name</label>
                                        <input type="text" id="name" class="form-control" name="name" value="<?php echo $col['Name']; ?>" required>
                                        <div class="invalid-feedback">Company name is required.</div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="slogan">Company Slogan</label>
                                        <input type="text" id="slogan" class="form-control" name="slogan" value="<?php echo $col['Slogan']; ?>" required>
                                        <div class="invalid-feedback">Company slogan is required.</div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="email">Company Email</label>
                                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $col['Email']; ?>" required>
                                        <div class="invalid-feedback">Company email is required.</div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="phone">Phone Number</label>
                                        <input type="tel" id="phone" class="form-control" name="phone" value="<?php echo $col['PhoneNumber']; ?>" required>
                                        <div class="invalid-feedback">Phone number is required.</div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="address">Company Address</label>
                                        <input type="text" id="address" class="form-control" name="address" value="<?php echo $col['Address']; ?>" required>
                                        <div class="invalid-feedback">Company address is required.</div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="website">Company Website</label>
                                        <input type="text" id="website" class="form-control" name="website" value="<?php echo $col['Website']; ?>" required>
                                        <div class="invalid-feedback">Company website is required.</div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="facebook">Facebook Link</label>
                                        <input type="text" id="facebook" class="form-control" name="facebook" value="<?php echo $col['FacebookLink']; ?>">
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="instagram">Instagram Link</label>
                                        <input type="text" id="instagram" class="form-control" name="instagram" value="<?php echo $col['InstagramLink']; ?>">
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="telegram">Telegram Link</label>
                                        <input type="text" id="telegram" class="form-control" name="telegram" value="<?php echo $col['TelegramLink']; ?>">
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="twitter">Twitter Link</label>
                                        <input type="text" id="twitter" class="form-control" name="twitter" value="<?php echo $col['TwitterLink']; ?>">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <div>
                                        <button type="submit" name="updateCompanyInfo" class="btn btn-outline-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer content -->
            <footer>
                <div class="container-fluid text-center px-4">
                    <div class="text-mute py-3">Copyright &copy; 2022 Automatic Vehicle Parking System.</div>
                </div>
            </footer>
        </section>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <!-- User JS -->
    <script src="assets/js/sidebar-toggle.js"></script>
    <script src="./assets/js/login.js"></script>
</body>
</html>

<?php

}

?>
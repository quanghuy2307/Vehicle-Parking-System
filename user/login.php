<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/Key-Icon.png" />

	<!-- Title -->
    <title>Automatic Vehicle Parking System - User Login</title>

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
	<!-- Bootstrap CSS v5.2.0-beta1 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
	<!-- User CSS -->
	<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body id="mainUserLogin">
	<section class="py-5 vh-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-header px-5 border-0">
							<p class="card-title fs-3 fw-bold">User Login</p>
						</div>
						
						<div class="card-body px-5 py-3">
							<form method="post" class="needs-validation" action="code.php" novalidate>
								<div class="mb-3">
									<label class="form-label" for="email">Email</label>
									<input type="email" id="email" class="form-control" placeholder="useremail@gmail.com" name="email" required>
									<div class="invalid-feedback">Email is invalid.</div>
								</div>

								<div class="mb-3">
									<label class="form-label" for="password">Password</label>
									<input type="password" id="password" class="form-control" placeholder="********" name="password" required>
									<div class="invalid-feedback">Password is invalid.</div>
								</div>

								<div class="text-end mb-3">
									<a href="./forgot.php" class="text-decoration-none">Forgot Password?</a>
								</div>

								<div class="d-flex justify-content-between">
									<div class="form-check">
										<input type="checkbox" name="check" id="check" class="form-check-input">
										<label for="check" class="form-check-label">Remember me</label>
									</div>

									<div>
										<button type="submit" name="loginUser" class="btn btn-primary">Login</button>
									</div>
								</div>
							</form>
						</div>

						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account?<a href="./register.php" class="text-decoration-none"> Create One</a>
								<br>
								You are Admin?<a href="../admin/login.php" class="text-decoration-none"> Login as Admin</a>
							</div>
						</div>
					</div>

					<div class="text-center my-5">
						<a href="../home/index.php" class="text-decoration-none">
							<i class="fa-solid fa-arrow-left me-1"></i>
							Back to Homepage.
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	
	<!-- User JS -->
	<script src="./assets/js/login.js"></script>
</body>
</html>
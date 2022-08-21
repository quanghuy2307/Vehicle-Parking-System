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
	<title>Automatic Vehicle Parking System - User Register</title>

	<!-- Icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
	<!-- Bootstrap CSS v5.2.0-beta1 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
	<!-- User CSS -->
	<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body id="mainUserRegister">
	<section class="py-5 vh-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-header px-5 border-0">
							<p class="card-title fs-3 fw-bold">Register</p>
						</div>

						<div class="card-body px-5 py-3">
							<form method="post" class="needs-validation" action="code.php" autocomplete="off" novalidate>
								<div class="mb-3">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-user"></i></span>
										<input type="text" class="form-control" name="firstName" placeholder="First name" aria-label="First name" required>
										<input type="text" class="form-control" name="lastName" placeholder="Last name" aria-label="Last name" required>
										<div class="invalid-feedback">Full name is invalid.</div>
									</div>
								</div>

								<div class="mb-3">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-cake-candles"></i></span>
										<input type="date" class="form-control" name="birthday" required>
										<div class="invalid-feedback">Birthday is invalid.</div>
									</div>
								</div>

								<div class="mb-3">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-transgender"></i></span>
										<select class="form-select" name="gender" aria-label="Gender selects" required>
											<option value="" selected>Gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											<option value="Others">Others</option>
										</select>
										<div class="invalid-feedback">Gender is invalid.</div>
									</div>
								</div>

								<div class="mb-3">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
										<input type="tel" class="form-control" name="phone" placeholder="Phone number" required>
										<div class="invalid-feedback">Phone number is invalid.</div>
									</div>
								</div>

								<div class="mb-3">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
										<input type="text" class="form-control" name="address" placeholder="Address" required>
										<div class="invalid-feedback">Address is invalid.</div>
									</div>
								</div>

								<div class="mb-3">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
										<input type="email" class="form-control" name="email" placeholder="Email" required>
										<div class="invalid-feedback">Email is invalid.</div>
									</div>
								</div>

								<div class="mb-3">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
										<input type="password" class="form-control" name="cpassword" placeholder="Create password" required>
										<div class="invalid-feedback">Create password is invalid.</div>
									</div>
								</div>

								<div class="mb-3">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
										<input type="password" class="form-control" name="rpassword" placeholder="Repeat password" required>
										<div class="invalid-feedback">Repeat password is invalid.</div>
									</div>
								</div>
								
								<div class="d-flex justify-content-center">
									<div>
										<button type="submit" name="registerUser" class="btn btn-primary">Register</button>
									</div>
								</div>
							</form>
						</div>
						
						<div class="card-footer py-3 border-0">
							<div class="text-center">Already have an account?
								<a href="./login.php" class="text-decoration-none">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	
	<!-- User JS -->
	<script src="assets/js/login.js"></script>
</body>
</html>
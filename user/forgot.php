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
    <title>Automatic Vehicle Parking System - User Forgot</title>

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
	<!-- Bootstrap CSS v5.2.0-beta1 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
	<!-- User CSS -->
	<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body id="mainUserForgot">
	<section class="py-5 vh-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5 col-lg-6 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-header px-5 border-0">
							<p class="card-title fs-3 fw-bold">Forgot</p>
						</div>

						<div class="card-body px-5 py-3">
							<form method="post" class="needs-validation" action="code.php" novalidate>
								<div class="row">
									<div class="col-2 col-form-label">
										<label class="form-label" for="email">Email</label>
									</div>
									<div class="col-8">
										<input id="email" type="email" class="form-control" name="email" placeholder="useremail@gmail.com" required>
										<div class="invalid-feedback">Email is invalid.</div>
									</div>
									<div class="col-2">
										<button type="submit" name="forgotUser" class="btn btn-primary">Send</button>
									</div>
								</div>
							</form>
						</div>

						<div class="card-footer py-3 border-0">
							<div class="text-center">Remember your password?
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
	<script src="./assets/js/login.js"></script>
</body>
</html>
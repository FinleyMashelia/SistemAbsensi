<?php
@include 'config.php';

session_start();

if (empty($_SESSION['login'])) {
	header("Location: adminpage.php");
}
?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title></title>
</head>

<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4  mt-5">

				<?php
				if (isset($_SESSION['error'])) {
				?>
					<div class="alert alert-warning" role="alert">
						<?php echo $_SESSION['error'] ?>
					</div>
				<?php
				}
				?>

				<?php
				if (isset($_SESSION['message'])) {
				?>
					<div class="alert alert-success" role="alert">
						<?php echo $_SESSION['message'] ?>
					</div>
				<?php
				}
				?>

				<div class="card">
					<div class="card-title text-center">
						<h1>Halaman Admin</h1>

						<p><a href="profile.php">Update Profile</a></p>
					</div>
					<div class="card-body">
						<p>Hallo: <?php echo $_SESSION['nama'] ?></p>
						<p>Kamu berhasil ke halaman admin.</p>
						<p>Terakhir login: <?php echo $_SESSION['terakhir_login'] ?></p>
						<center>
							<a href="logout.php">Logout</a>
						</center>
					</div>
				</div>
			</div>

		</div>

	</div>
</body>

</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['message']);
?>
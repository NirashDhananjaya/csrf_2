<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>
<body>
    <?php include 'common.php'; ?>
	<div class="container">

		<div class="container-fluid rounded-circle row col-lg-4 col-sm-offset-4">
			<form action="handler.php" method="POST">
		<div class="jumbotron">
				<div class="form-group">
					<label for="username" class="text-primary">Username</label>
					<input type="text" class="form-control" id="username" name="username"  required value="admin@123">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password"  required value="admin@123">
				</div>
				<button type="submit" class="btn btn-warning btn-lg">Login</button>
				</div>
			</form>

		</div>
	</div>

</body>

</html>
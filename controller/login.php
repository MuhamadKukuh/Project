<?php include 'css.php';
session_start();
 ?>
<div class="col-md-8 container mt-5">
	<center><h3>Login</h3></center>
	<center>
		<form class="row g-3 col-8 container" action="auth.php" method="post">
		  <div class="col-md-12">
		    <label for="inputEmail4" class="form-label mt-2">Email :</label>
		    <?php  if( isset($_SESSION['us'])) { ?>
				<small class="text-danger">Username Salah</small>	
			<?php } ?>
		    <input type="email" name="username" class="form-control" id="inputEmail4">
		  </div>
		  <div class="col-md-12">
		    <label for="inputPassword4" class="form-label">Password :</label>
		     <?php  if( isset($_SESSION['pw'])) { ?>
				<small class="text-danger">Password Salah</small>	
			<?php } ?>
		    <input type="password" name="password" class="form-control" id="inputPassword4">
		  </div>
		  <button class="btn btn-danger border-2 border-light border text-white rounded" type="submit">Login</button>
		</form>
	</center>
	<a href="form.php">Register</a>
</div>
<?php include 'css.php'; ?>

<div class="container col-md-8 rounded pt-3 pb-3 mt-4">
	<form class="row g-3 container" action="controller.php" method="post">
	  <div class="col-md-6">
	    <label for="inputEmail4" class="form-label">Email</label>
	    <input type="email" name="username" class="form-control" id="inputEmail4">
	  </div>
	  <div class="col-md-6">
	    <label for="inputPassword4" class="form-label">Password</label>
	    <input type="password" name="password" class="form-control" id="inputPassword4">
	  </div>
	  <div class="col-12">
	    <label for="inputAddress" class="form-label">Nama</label>
	    <input type="text" name="nama" class="form-control" id="inputAddress">
	  </div>
	  <div class="col-12">
	    <label for="inputAddress2" class="form-label">NIS</label>
	    <input type="number" name="nis" class="form-control" id="inputAddress2">
	  </div>
	  <div class="col-md-6">
	    <label for="inputCity" class="form-label">No. Tlp</label>
	    <input type="number" name="no_tlp" class="form-control" id="inputCity">
	  </div>
	  <div class="col-md-4">
	    <label for="inputState" class="form-label">Kelas</label>
	    <select id="inputState" class="form-select" name="kelas">
	      <option selected>X-RPL</option>
	      <option value="1">X-MM1</option>
	      <option value="2">X-MM2</option>
	      <option value="3">XI-RPL</option>
	      <option value="4">XI-MM1</option>
	      <option value="5">XI-MM2</option>
	      <option value="6">XII-RPL</option>
	      <option value="7">XII-MM1</option>
	      <option value="8">XII-MM2</option>
	    </select>
	  </div>
	  <div class="col-12">
	    <button type="submit" class="btn btn-primary">Register</button>
	  </div>
	</form>
</div>

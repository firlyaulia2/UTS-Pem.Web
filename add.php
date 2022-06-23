<!DOCTYPE html>
<html>
<head>
	<title>Perekam Data Leptop</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	  <div class="col-md-12 row justify-content-center">
	  	<div class="col-md-8 mt-5">
	  		<div class="col-md-12 text-center">
	  			<h1>Perekam Data Leptop</h1>
	  		</div>
	  		<div class="col-md-12 mt-5">
	  			<form method="post" action="input.php">
		  			<div class="mb-3">
					  <label class="form-label">Merk</label>
					  <input type="text" name="nama" class="form-control">
					</div>

		  			<div class="mb-3">
					  <label class="form-label">Seri</label>
					  <input type="text" name="telepon" class="form-control">
					</div>

					<div class="mb-3">
					  <label class="form-label">Tahun Produksi</label>
					  <textarea name="alamat" class="form-control" rows="3"></textarea>
					</div>

					<div class="mb-3 text-end">
					  <a href="index.php" class="btn btn-success">Back to home</a>
					  <button type="submit" class="btn btn-primary ml-2">Simpan</button>
					</div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>

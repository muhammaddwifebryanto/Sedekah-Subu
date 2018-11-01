<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
      <div class="container">
         <a class="navbar-brand" href="index.html"><img src="img/logo.png" width="200"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 

        <div class="collapse navbar-collapse" >
          <div class="navbar-nav ml-auto">
             <a class="nav-item nav-link" href="donasi.html">Donasi</a>
          </div>
       </div>
       </div>
    </nav>
    <form method="post" action="">

   <div class="galangdana">
   	<div class="dana">
   	 <div class="form-group">
	  	<label for="exampleFormControlInput1">Gambar</label><br />
	  	<input type="file" name="gambar" required="">
	  </div>
	  <div class="form-group">
	  	<label for="exampleFormControlInput1">Nama Program</label>
	  	<select class="form-control" name="nama" required="">
	  		<option>--Pilih--</option>
	  		<option>Tausyah Subuh</option>
	  		<option>Sarapan Subuh</option>
	  		<option>Wakaf Subuh</option>
	  		<option>Santunan Yatim Subuh</option>
	  	</select>
	  </div>
	  <div class="form-group">
	  	<label for="exampleFormControlInput1">Tempat</label>
	  	<input type="text" name="tempat" class="form-control" required="">
	  </div>
	  <div class="form-group">
	  	<label for="exampleFormControlInput1">Waktu</label>
	  	<input type="text" name="waktu" class="form-control" required="">
	  </div>
	  <div class="form-group">
	  	<label for="exampleFormControlInput1">Dana</label>
	  	<input type="text" name="dana" class="form-control" required="">
	  </div>
	  <button type="Submit" class="btn btn-success" name="btn" >Send</button>
	</div>
   </div>
</form>

</body>
</html>

<?php 
	include 'conn.php';

	if (isset($_POST['btn'])) {
		
		$gambar = $_POST['gambar'];
		$nama = $_POST['nama'];
		$tempat = $_POST['tempat'];
		$waktu = $_POST['waktu'];
		$dana = $_POST['dana'];

		$query=mysqli_query($conn,"INSERT INTO `pmakan`(`id`, `gambar`, `nama`, `tempat`, `waktu`, `dana`) VALUES ('','$gambar','$nama','$tempat','$waktu','$dana')");

		if ($query) {
?>
			<script type="text/javascript">
				alert('data berhasil');
				window.location='index.php';
			</script>
<?php 
		}
		else{
			?>
			<script type="text/javascript">
				alert('data gagal');
				window.location='galangdana.php';
			</script>
<?php 
		}
	}
		
 ?>
	
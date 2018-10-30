<<<<<<< HEAD
 @extends('layout.master')
  @section('content')
=======
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6
	<div class="container">
		<form method="post" action="{{url('pasien/save')}}">
			{{csrf_field()}}
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" >
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="jenis_kelamin">Jenis Kelamin</label>
<<<<<<< HEAD

						<select type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" >
						<option>Laki-Laki</option>
            			<option>Perempuan</option>
						</select>
=======
						<input type="text" class="form-control" name="jenis_kelamin" >
>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="usia">Usia</label>
						<input type="text" class="form-control" name="usia" >
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" name="alamat" >
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" >
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="no_hp">No HP</label>
						<input type="text" class="form-control" name="no_hp" >
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="no_identitas">No Identitas</label>
						<input type="text" class="form-control" name="no_identitas" >
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="keterangan">Keterangan</label>
						<input type="text" class="form-control" name="keterangan" >
					</div>
			</div>
			<div class="row">
 				<div class="col-md-4"></div>
 					<div class="form-group col-md-4">
<<<<<<< HEAD
 						<center><button type="submit" class="btn btn-success" style="margin:">TAMBAH</button></center>
=======
 						<button type="submit" class="btn btn-success" style="margin:120px">TAMBAH</button>
>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6
 						</div>
 			</div>
		</form>
	</div>
<<<<<<< HEAD
@endsection
=======
</body>
</html>
>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6

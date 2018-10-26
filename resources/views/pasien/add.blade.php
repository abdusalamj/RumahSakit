 @extends('layout.master')
  @section('content')
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

						<select type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" >
						<option>Laki-Laki</option>
            			<option>Perempuan</option>
						</select>
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
 						<center><button type="submit" class="btn btn-success" style="margin:">TAMBAH</button></center>
 						</div>
 			</div>
		</form>
	</div>
@endsection
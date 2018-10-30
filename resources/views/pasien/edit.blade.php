 @extends('layout.master')
  @section('content')
	<div class="container">
		<form method="post" action="{{url('pasien/update')}}">
			{{csrf_field()}}
			<input class="form-control" name="id" type="hidden" value="{{$pasien->id}}">
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" value="{{$pasien->nama}}"  >
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<input type="text" class="form-control" name="jenis_kelamin" value="{{$pasien->jenis_kelamin}}" >
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="usia">Usia</label>
						<input type="text" class="form-control" name="usia" value="{{$pasien->usia}}">
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" name="alamat" value="{{$pasien->alamat}}">
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" value="{{$pasien->email}}">
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="no_hp">No HP</label>
						<input type="text" class="form-control" name="no_hp" value="{{$pasien->no_hp}}">
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="no_identitas">No Identitas</label>
						<input type="text" class="form-control" name="no_identitas" value="{{$pasien->no_identitas}}">
					</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="keterangan">Keterangan</label>
						<input type="text" class="form-control" name="keterangan" value="{{$pasien->keterangan}}">
					</div>
			</div>
			<div class="row">
 				<div class="col-md-4"></div>
 					<div class="form-group col-md-4">
 						<center><button type="submit" class="btn btn-success" style="margin:">UPDATE</button></center>
 						</div>
 			</div>
		</form>
	</div>
@endsection

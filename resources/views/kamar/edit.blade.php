@extends('layout.master')
@section('content')


<div class="row">
	<h2>Form Tambah Data</h2>
	<form class="form-horizontal" action="{{url('kamar/update')}}" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Nomor Kamar :</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="email" value="{{$edit->nomor_kamar}}" name="nomor_kamar" required="required">
			</div>
		</div>

		<input type="hidden" name="id" value="{{$edit->id}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-label col-sm-2" for="sel1">Posisi :</label>
			<div class="col-sm-10">
				<select name="posisi" class="form-control" id="sel1">
					<option value="lt_1">Lantai 1</option>
					<option value="lt_2">Lantai 2</option>
					<option value="lt_3">Lantai 3</option>
					<option value="lt_4">Lantai 4</option>
					<option value="lt_5">Lantai 5</option>
				</select>
			</div>
		</div> <div class="form-group">
			<label class="control-label col-sm-2" for="sel1">Kategori :</label>
			<div class="col-sm-10">
				<select name="kategori" class="form-control" id="sel1">
					<option value="kamar_rawat_inap">Kamar Rawat Inap</option>
					<option value="kamar_operasi">Kamar Operasi</option>
					<option value="kamar_mayat">Kamar Mayat</option>
				</select>
			</div>
		</div> 
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Nama Kamar :</label>
			<div class="col-sm-10">
				<input value="{{$edit->ruangan}}" type="text" class="form-control" id="email" name="ruangan" required="required">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Harga :</label>
			<div class="col-sm-10">
				<input value="{{$edit->harga}}" type="text" class="form-control" id="email" name="harga" required="required">
			</div>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
				<a href="{{url('kamar')}}" class="btn btn-default">Back</a>
			</div>
		</div>
	</form>
</div>
@endsection

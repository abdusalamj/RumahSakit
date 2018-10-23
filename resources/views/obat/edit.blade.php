@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Tambah Obat</h4>
			</div>
			<div class="content">
				<form method="POST" action="{{url('obat/update')}}">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama</label>
								<input type="hidden" class="form-control" placeholder="Nama Obat" value="{{$obats->id}}" name="id_obat">
								<input type="text" class="form-control" placeholder="Nama Obat" value="{{$obats->nama}}" name="nama">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Jenis</label>
								<select class="form-control" value="{{$obats->JenisObat->jenis}}" name="jenis">
									@foreach($jenis as $data)
									<option value="{{$data->id}}">{{ $data->jenis }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Kategori</label>
								<input type="text" class="form-control" placeholder="Kategori Obat" value="{{$obats->kategori}}" name="kategori">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Harga</label>
								<input type="number" class="form-control" placeholder="Harga Obat" value="{{$obats->harga}}" name="harga">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Jumlah</label>
								<input type="number" class="form-control" placeholder="Jumlah Obat" value="{{$obats->jumlah}}" name="jumlah">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Satuan</label>
								<select class="form-control" value="" name="satuan">
									<option value="{{$obats->stok}}">{{$obats->stok}}</option>
									@if($obats->stok != "box")
									<option value="box">Box</option>
									@endif
									@if($obats->stok != "pcs")
									<option value="pcs">Pcs</option>
									@endif
									@if($obats->stok != "buah")
									<option value="buah">Buah</option>
									@endif
									@if($obats->stok != "sachet")
									<option value="sachet">Sachet</option>
									@endif
									@if($obats->stok != "strip")
									<option value="strip">Strip</option>
									@endif
								</select>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-info btn-fill pull-right">Update Obat</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
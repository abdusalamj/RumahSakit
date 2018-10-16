@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Tambah Obat</h4>
			</div>
			<div class="content">
				<form method="POST" action="{{url('obat/save')}}">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" placeholder="Nama Obat" name="nama">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Jenis</label>
								<select class="form-control" name="jenis">
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
								<input type="text" class="form-control" placeholder="Kategori Obat" name="kategori">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Harga</label>
								<input type="number" class="form-control" placeholder="Harga Obat" name="harga">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Jumlah</label>
								<input type="number" class="form-control" placeholder="Jumlah Obat" name="jumlah">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Satuan</label>
								<select class="form-control" name="satuan">
									<option value="">Satuan Obat</option>
									<option value="box">Box</option>
									<option value="pcs">Pcs</option>
									<option value="buah">Buah</option>
									<option value="sachet">Sachet</option>
									<option value="strip">Strip</option>
								</select>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-info btn-fill pull-right">Tambah Obat</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
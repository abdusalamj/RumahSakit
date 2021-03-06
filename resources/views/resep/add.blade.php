@extends('layout.master')
@section('title')
Resep
@endsection
@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="card">
			<div class="header">
				<h4 class="title text-center">Tambah Resep</h4>
				<p class="category text-center">Here is a subtitle for this table</p>
			</div>
			<form action="{{ url('resep/save') }}" method="POST">
				<div class="content">
					<div class="row col-md-offset-1">
						<div class="col-md-10">
							@csrf
							<label>Nama Resep</label>
							<input type="text" class="form-control" name="nama" autocomplete="false" required>
						</div>
						<div class="col-md-10">
							<label>Dokter</label>
							<select class="form-control" name="dokter" required>
								<option selected disabled>Pilih Dokter</option>
								@foreach ($dokter as $value)
									<option value="{{ $value->id }}">{{ $value->nama_dokter }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-10">
							<label>Pasien</label>
							<select class="form-control" name="pasien" required>
								<option selected disabled>Pilih Pasien</option>
								@foreach ($pasien as $value)
									<option value="{{ $value->id }}">{{ $value->nama }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-10">
							<label>Obat</label>
							<select class="form-control" name="obat" required>
								<option selected disabled>Pilih Obat</option>
								@foreach ($obat as $value)
									<option value="{{ $value->id }}">{{ $value->nama }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-10" style="margin-top: 10px;">
							<button class="btn btn-primary pull-right" style="margin-left: 5px;">Simpan</button>
							<a href="{{ url('resep') }}" class="btn btn-warning pull-right">Batal</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

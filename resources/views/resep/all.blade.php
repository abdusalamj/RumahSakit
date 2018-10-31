@extends('layout.master')
@section('title')
Resep
@endsection
@section('content')
<div class="row">
	<div class="col-xs-12" style="margin-bottom: 10px;">
		<a href="{{ url('resep/add') }}" class="btn btn-primary">Tambah Resep</a>
	</div>
	<div class="col-xs-12">
		<div class="card">
			<div class="header">
				<h4 class="title text-center">Data Resep</h4>
				<p class="category text-center">Here is a subtitle for this table</p>
			</div>
			<div class="content table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
						<th>No</th>
						<th>Nama Resep</th>
						<th>Kode Resep</th>
						<th>id_dokter</th>
						<th>id_pasien</th>
						<th>id_list</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						@if ($resep->count() > 0)
							@foreach ($resep as $key => $value)
							<tr>
							<td>{{ ($key+1) }}</td>
							<td>{{ $value->nama_resep }}</td>
							<td>{{ $value->kode_resep }}</td>
							<td>{{ $value->dokter_id }}</td>
							<td>{{ $value->pasien_id }}</td>
							<td>{{ $value->obat_id }}</td>
							<td style="width: 170px;">
								<a href="{{ url('resep/edit/'.$value->id) }}" class="btn btn-warning" style="margin-right: 5px;">Edit</a>
								<a href="{{ url('resep/delete/'.$value->id) }}" onclick="return confirm('Anda yakin?')" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach
						@else
						<tr>
							<td class=" text-center text-warning" colspan="7">Empty set (0)</td>
						</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

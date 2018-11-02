@extends('layout.master')
@section('title')
Jenis Obat
@endsection
@section('content')
<div class="row">
	<div class="col-xs-12" style="margin-bottom: 10px;">
		<a href="{{url('jenis_obat/add')}}" class="btn btn-primary pull-right">Tambah Jenis Obat</a>
	</div>
	<div class="col-xs-12">
		<div class="card">
			<div class="header">
				<center><h4 class="title">Data Jenis Obat</h4></center>
				<center><p class="category">Here is a subtitle for this table</p></center>
			</div>
			<div class="content table-responsive table-full-width" style="margin-left: 5px;margin-right: 5px;">
				<table class="table table-hover table-bordered" align="center">
					<thead>
						<th class="text-center">No.</th>
						<th class="text-center">Jenis</th>
						<th class="text-center">Keterangan</th>
						<th class="text-center">Aksi</th>
					</thead>
					<tbody>	
						@foreach($datas as $jenis)					
						<tr>
							<td class="text-center">{{ $jenis->id }}</td>
							<td class="text-center">{{ $jenis->jenis }}</td>
							<td class="text-center">{{ $jenis->keterangan }}</td>
							<td class="text-center">
								<a href="{{ url('jenis_obat/edit',[$jenis->id]) }}" class="btn btn-warning">Ubah</a>
								<a href="{{ url('jenis_obat/delete', [$jenis->id]) }}" class="btn btn-danger" onclick="return confirm('apa anda yakin ingin menghapus data dengan nama obat {{$jenis->jenis}} ?')">Hapus</a>
							</td>
						</tr>
						@endforeach						
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
@endsection
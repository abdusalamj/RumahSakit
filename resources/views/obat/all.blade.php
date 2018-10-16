@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-xs-12" style="margin-bottom: 10px;">
		<a href="{{url('obat/add')}}" class="btn btn-primary pull-right">Tambah Obat</a>
	</div>
	<div class="col-xs-12">
		<div class="card">
			<div class="header">
				<center><h4 class="title">Data Obat</h4></center>
				<center><p class="category">Here is a subtitle for this table</p></center>
			</div>
			<div class="content table-responsive table-full-width" style="margin-left: 5px;margin-right: 5px;">
				<table class="table table-hover table-bordered" align="center">
					<thead>
						<th class="text-center">No.</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Jenis</th>
						<th class="text-center">Kategori</th>
						<th class="text-center">Jumlah</th>
						<th class="text-center">Harga</th>
						<th class="text-center">Aksi</th>
					</thead>
					<tbody>
						@foreach($obats as $obat)
						<tr>
							<td class="text-center">{{ $obat->id }}</td>
							<td class="text-center">{{ $obat->nama }}</td>
							<td class="text-center">{{ $obat->JenisObat->jenis }}</td>
							<td class="text-center">{{ $obat->kategori }}</td>
							<td class="text-center">{{ $obat->jumlah }} <b><i>*</i>{{ $obat->stok }}</b></td>
							<td class="text-center">{{ $obat->harga }}</td>
							<td class="text-center">
								<a href="{{ url('obat/edit', [$obat->id]) }}">Ubah</a>
								<a href="{{ url('obat/delete', [$obat->id]) }}">Hapus</a>
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
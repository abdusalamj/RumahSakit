<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pasien</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="content-wrapper">
		<div class="container">
		<section class="content">
			<div class="box">
			<a href="{{url('pasien/add')}}"><button class="btn btn-primary">Add</button></a>
				<div class="box-header">
					<h3 class="box-tittle">Data Pasien</h3>
					<table class="table table-stripped">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Usia</th>
								<th>Alamat</th>
								<th>Email</th>
								<th>No HP</th>
								<th>No Identitas</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pasien as $key)
							<tr>
								<td>{{$key->nama}}</td>
								<td>{{$key->jenis_kelamin}}</td>
								<td>{{$key->usia}}</td>
								<td>{{$key->alamat}}</td>
								<td>{{$key->email}}</td>
								<td>{{$key->no_hp}}</td>
								<td>{{$key->no_identitas}}</td>
								<td>{{$key->keterangan}}</td>
								<td> <a href="{{route('edit',[$key->id])}}	"><button class="btn btn-warning">edit</button></a></td>
									</tr>
								<td> <a href="{{route('delete',[$key->id])}}" onclick="return confirm('hapus?')"><button class="btn btn-danger">delete</button></a></td>
									</tr>	
							</tr>
							@endforeach	
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
</body>
</html>
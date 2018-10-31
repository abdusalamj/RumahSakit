@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Tambah Jenis Obat</h4>
			</div>
			<div class="content">
				<form method="POST" action="{{url('jenis_obat/save')}}">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Jenis</label>
								<input type="text" class="form-control" placeholder="Jenis Obat" name="jenis">
							</div>
						</div>						
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Keterangan</label>
								<input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
							</div>
						</div>						
					</div>										
					<button type="submit" class="btn btn-info btn-fill pull-right">Tambah Jenis</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
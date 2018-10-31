@extends('layout.master')

@section('content')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <a href="{{ url('fasilitas/add')}}"><button class="btn btn-info pull-right">Tambah</button></a>
                                <h4 class="title">Fasilitas</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                        	<th></th>
                                    		<th>Nama Fasilitas</th>
                                    		<th>Posisi</th>
                                    		<th>Keterangan</th>
                                    	</tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fasilitas as $key)
                                        <tr>
                                        	<td></td>
                                        	<td>{{ $key->nama }}</td>
                                        	 <td>
	                                        	 @if($key->posisi == 'lt_1') Lantai 1 	
	                                        	 @elseif($key->posisi == 'lt_2') Lantai 2
	                                        	 @elseif ($key->posisi == 'lt_3')Lantai 3 
	                                        	 @elseif($key->posisi == 'lt_4') Lantai 4 
	                                        	 @else Lantai 5
                                        	 </td> @endif
                                        	<td>{{ $key->keterangan }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
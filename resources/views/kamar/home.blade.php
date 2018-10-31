@extends('layout.master')
@section('content')

<a class="btn btn-primary pull-right" href="kamar/add">Tambah Data</a>
<div class="row">

  <h2>Data Kamar</h2>        

  <table class="table table-striped">

    <thead>

      <tr>

        <th class="text-center">Nomor Kamar</th>
        <th class="text-center">Posisi</th>
        <th class="text-center">Kategori</th>
        <th class="text-center">Ruangan</th>
        <th class="text-center">Harga</th>
        <th class="text-center">Aksi</th>

      </tr>

    </thead>

    <tbody>
@foreach($data as $key)
      <tr>

        <td class="text-center">{{$key->nomor_kamar}}</td>
        <td class="text-center">{{$key->posisi}}</td>
        <td class="text-center">{{$key->kategori}}</td>
        <td class="text-center">{{$key->ruangan}}</td>
        <td class="text-center">Rp.{{$key->harga}},-</td>
        <td class="text-center">
        	<a href="{{url('kamar/edit/'  .$key->id)}}" class="btn btn-warning">Edit</a>
        	<a href="{{url('kamar/delete/'.$key->id)}}" class="btn btn-danger">Delete</a>
        </td>

      </tr>
@endforeach
    </tbody>

  </table>

</div>
@endsection

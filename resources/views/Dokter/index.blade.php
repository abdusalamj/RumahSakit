@extends('layout.master')

@section('content')
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Alamat</th>
        <th class="text-center">Jenis Kelamin</th>
        <th class="text-center">Spesialis</th>
        <th class="text-center">Nomor Telepon</th>
        <th class="text-center">Nomor Identitas</th>
        <th class="text-center">Action</th
      </tr>
    </thead>
    <tbody>

      @foreach($datas as $dokter)
      <tr>
        <td class="text-center">{{$dokter['id']}}</td>
        <td class="text-center">{{$dokter['nama_dokter']}}</td>
        <td class="text-center">{{$dokter['email']}}</td>
        <td class="text-center">{{$dokter['alamat']}}</td>
        <td class="text-center">{{$dokter['jenis_kelamin']}}</td>
        <td class="text-center">{{$dokter['spesialis']}}</td>
        <td class="text-center">{{$dokter['no_hp']}}</td>
        <td class="text-center">{{$dokter['no_identitas']}}</td>
         <td align="right"><a href="{{action('DokterController@edit', $dokter['id'])}}" class="btn btn-warning">Edit</a></td>
         <td align="left"><a href ="{{action('DokterController@delete', $dokter['id'])}}" class="btn btn-danger">Delete</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
 <td align="right"><a href="dokter/add" class="btn btn-success">add</a></td>
 @endsection

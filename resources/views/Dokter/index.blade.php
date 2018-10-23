
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List Dokter</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
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
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Spesialis</th>
        <th>Nomor Telepon</th>
        <th>Nomor Identitas</th>
        <th>Action</th
      </tr>
    </thead>
    <tbody>

      @foreach($datas as $dokter)
      <tr>
        <td>{{$dokter['id']}}</td>
        <td>{{$dokter['nama_dokter']}}</td>
        <td>{{$dokter['email']}}</td>
        <td>{{$dokter['alamat']}}</td>
        <td>{{$dokter['jenis_kelamin']}}</td>
        <td>{{$dokter['spesialis']}}</td>
        <td>{{$dokter['no_hp']}}</td>
        <td>{{$dokter['no_identitas']}}</td>
         <td align="right"><a href="{{action('DokterController@edit', $dokter['id'])}}" class="btn btn-warning">Edit</a></td>
         <td align="left"><a href ="{{action('DokterController@delete', $dokter['id'])}}" class="btn btn-danger">Delete</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
 <td align="right"><a href="dokter/add" class="btn btn-success">add</a></td>

  </body>
</html>

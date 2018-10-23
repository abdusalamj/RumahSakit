<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel CRUD - EDIT </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Update Dokter</h2><br  />
        <form method="post" action="{{action('DokterController@update')}}">
        @csrf
        <input name="id" type="hidden" value="{{$dokter->id}}">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="nama_dokter" value="{{$dokter->nama_dokter}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Email:</label>
            <input type="text" class="form-control" name="email" value="{{$dokter->email}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Alamat:</label>
            <input type="text" class="form-control" name="alamat" value="{{$dokter->alamat}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Jenis Kelamin:</label>
            <input type="text" class="form-control" name="jenis_kelamin" value="{{$dokter->jenis_kelamin}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Speisalis:</label>
            <input type="text" class="form-control" name="spesialis" value="{{$dokter->spesialis}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Nomor Telepon:</label>
            <input type="text" class="form-control" name="no_hp" value="{{$dokter->no_hp}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">No Identitas:</label>
            <input type="text" class="form-control" name="no_identitas" value="{{$dokter->no_identitas}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

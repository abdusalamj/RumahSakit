<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Dokter</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Dokter List</h2><br/>
      <form method="post" action="{{url('dokter/save')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="nama_dokter">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Email:</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Alamat:</label>
            <input type="text" class="form-control" name="alamat">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Jenis Kelamin:</label>
            <input type="text" class="form-control" name="jenis_kelamin">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Spesialis:</label>
            <input type="text" class="form-control" name="spesialis">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Nomor Telepon:</label>
            <input type="text" class="form-control" name="no_hp">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Nomor Identitas:</label>
            <input type="text" class="form-control" name="no_identitas">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

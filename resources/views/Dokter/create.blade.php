@extends('layout.master')
@section('title')
Dokter
@endsection
@section('content')
    <div class="row">
      <h2>Dokter List</h2><br/>
      <form method="post" action="{{url('dokter/save')}}">
        {{csrf_field()}}
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
            <select name="jenis_kelamin" class="form-control" id="Name">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Spesialis:</label>
            <select name="spesialis" class="form-control" id="Name">
              <option value="Kardiovaskular">Kardiovaskular</option>
              <option value="THT">THT</option>
              <option value="Kesehatan Gigi dan Mulut">Kesehatan Gigi dan Mulut</option>
              <option value="Ginekologi">Ginekologi</option>
              <option value="Tulang">Tulang</option>
              <option value="Anak">Anak</option>
              <option value="Psikiater">Psikiater</option>
              <option value="Saraf">Saraf</option>
              <option value="Kulit & Kelamin">Kulit & Kelamin</option>
            </select>
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
  @endsection

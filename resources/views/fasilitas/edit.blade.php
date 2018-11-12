@extends('layout.master')

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Ubah Fasilitas </h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="{{ url('fasilitas/update') }}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{ $fasilitas->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Fasilitas</label>
                                                <input type="text" class="form-control" name="nama" value="{{ $fasilitas->nama}}" autocomplete="false" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Posisi</label>
                                                <select class="form-control" id="posisi" name="posisi">
                                                    <option value="lt_1">Lantai 1</option>
                                                    <option value="lt_2">Lantai 2</option>
                                                    <option value="lt_3">Lantai 3</option>
                                                    <option value="lt_4">Lantai 4</option>
                                                    <option value="lt_5">Lantai 5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea rows="5" class="form-control" placeholder="Keterangan" name="keterangan">{{ $fasilitas->keterangan }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Perbarui</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection
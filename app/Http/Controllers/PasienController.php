<?php

namespace App\Http\Controllers;
use \App\Pasien;

use Illuminate\Http\Request;

class PasienController extends Controller
{
     public function index()
    {
        $data['pasien'] = \App\Pasien::All();
        return view('pasien.index',$data);
    }

    public function add()
    {
        $data['pasien'] = \App\Pasien::All();
        return view('pasien.add');
    }

    public function store(Request $r)
    {
        $pasien = new Pasien;
        $pasien->nama = $r->input('nama');
        $pasien->jenis_kelamin = $r->input('jenis_kelamin');
        $pasien->usia = $r->input('usia');
        $pasien->alamat = $r->input('alamat');
        $pasien->email = $r->input('email');
        $pasien->no_hp = $r->input('no_hp');
        $pasien->no_identitas = $r->input('no_identitas');
        $pasien->keterangan = $r->input('keterangan');
        $pasien->save();
        return redirect(url('pasien'));
    }

    public function edit($id)
    {
        $data['pasien'] = Pasien::find($id);
        return view('pasien.edit')->with($data);
    }

    public function update(Request $r)
    {
        $edit = Pasien::find($r->input('id'));
        $edit->nama = $r->input('nama');
        $edit->jenis_kelamin = $r->input('jenis_kelamin');
        $edit->usia = $r->input('usia');
        $edit->alamat = $r->input('alamat');
        $edit->email = $r->input('email');
        $edit->no_hp = $r->input('no_hp');
        $edit->no_identitas = $r->input('no_identitas');
        $edit->keterangan = $r->input('keterangan');
        $edit->save();
        return redirect(url('pasien'));
    }
    
    public function delete($id)
    {
    Pasien::whereId($id)->delete();
        return redirect(url('pasien'));
    }
}

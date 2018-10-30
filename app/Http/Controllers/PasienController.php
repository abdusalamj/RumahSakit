<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use \App\Pasien;
=======
use \App\Pasien;	
>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6
use Illuminate\Http\Request;

class PasienController extends Controller
{
<<<<<<< HEAD
     public function index()
=======
    public function index()
>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6
    {
    	$data['pasien'] = \App\Pasien::All();
    	return view('pasien.index',$data);
    }

    public function add()
    {
    	$data['pasien'] = \App\Pasien::All();
    	return view('pasien.add');
    }

<<<<<<< HEAD
    public function store(Request $r)
    {
    	$pasien = new Pasien;
=======
    public function save(Request $r)
    {
    	$pasien = new Pasien;

>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6
    	$pasien->nama = $r->input('nama');
    	$pasien->jenis_kelamin = $r->input('jenis_kelamin');
    	$pasien->usia = $r->input('usia');
    	$pasien->alamat = $r->input('alamat');
    	$pasien->email = $r->input('email');
    	$pasien->no_hp = $r->input('no_hp');
    	$pasien->no_identitas = $r->input('no_identitas');
    	$pasien->keterangan = $r->input('keterangan');
<<<<<<< HEAD
    	$pasien->save();
=======

    	$pasien->save();

>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6
    	return redirect(url('pasien'));
    }

    public function edit($id)
    {
    	$data['pasien'] = Pasien::find($id);
    	return view('pasien.edit')->with($data);
    }

    public function update(Request $r)
    {
<<<<<<< HEAD
 		$edit = Pasien::find($r->input('id'));
=======
 		$edit Pasien::find($r->input('id'));

>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6
		$edit->nama = $r->input('nama');
    	$edit->jenis_kelamin = $r->input('jenis_kelamin');
    	$edit->usia = $r->input('usia');
    	$edit->alamat = $r->input('alamat');
    	$edit->email = $r->input('email');
    	$edit->no_hp = $r->input('no_hp');
    	$edit->no_identitas = $r->input('no_identitas');
    	$edit->keterangan = $r->input('keterangan');
<<<<<<< HEAD
    	$edit->save();
    	return redirect(url('pasien'));
    }
    
    public function delete($id)
    {
    	Pasien::whereId($id)->delete();
=======

    	$edit->save();

    	return redirect(url('pasien'));
    }

    public function delete($id)
    {
    	Belajar::whereId($id)->delete();
>>>>>>> dd5665bccd004136d5ea3b3d953dfcec5335fad6
    	return redirect(url('pasien'));
    }
}

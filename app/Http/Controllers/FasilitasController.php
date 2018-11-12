<?php

namespace App\Http\Controllers;

use Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
    	$data['fasilitas'] = \App\Fasilitas::All();
    	return view('fasilitas.index')->with($data);
    }

    public function add()
    {
    	return view('fasilitas.add');
    }

    public function store(Request $r)
	{
		$fasilitas =  new \App\Fasilitas;
		$fasilitas->nama = $r->nama;
		$fasilitas->posisi = $r->posisi;
		$fasilitas->keterangan = $r->keterangan;
		$fasilitas->save();

		return redirect(url('fasilitas'));
	}

    public function edit($id)
    {
        $data['fasilitas'] = \App\Fasilitas::find($id);
        return view('fasilitas.edit')->with($data);
    }

    public function update(Request $r)
    {
        $table = \App\Fasilitas::find($r->input('id'));
        $table->nama = $r->input('nama');
        $table->posisi = $r->input('posisi');
        $table->keterangan = $r->input('keterangan');
        $table->update();
        return redirect(url('fasilitas'));
    }

    public function delete($id)
    {
        $table = \App\Fasilitas::find($id)->delete();
        return redirect(url('fasilitas'));
    }
}

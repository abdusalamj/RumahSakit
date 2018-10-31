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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resep as MResep;
use App\Dokter as MDokter;
use App\pasien as MPasien;
use App\Obat as MObat;

class ResepController extends Controller
{
    public function index()
    {
    	$data['resep'] = MResep::all();
    	return view("resep.all")->with($data);
    }

    public function add()
    {
    	$data['dokter'] = MDokter::all();
    	$data['pasien'] = MPasien::all();
    	$data['obat'] = MObat::all();
    	return view("resep.add")->with($data);
    }

    public function store(Request $r)
    {
    	$getLastId = MResep::orderBy('id', 'desc')->value('id');
    	$table = new MResep;
    	$table->nama_resep = $r->input('nama');
    	$table->kode_resep = "R-".sprintf("%05d", ($getLastId+1));
    	$table->dokter_id = $r->input('dokter');
    	$table->pasien_id = $r->input('pasien');
    	$table->obat_id = $r->input('obat');

    	$table->save();

    	return redirect(url('resep'));
    }

    public function edit($id)
    {
    	$data['dokter'] = MDokter::all();
    	$data['pasien'] = MPasien::all();
    	$data['obat'] = MObat::all();
    	$data['resep'] = MResep::find($id);

    	return view('resep.edit')->with($data);
    }

    public function update(Request $r)
    {
    	$table = MResep::find($r->input('id'));
    	$table->nama_resep = $r->input('nama');
    	$table->dokter_id = $r->input('dokter');
    	$table->pasien_id = $r->input('pasien');
    	$table->obat_id = $r->input('obat');

    	$table->update();

    	return redirect(url('resep'));
    }

    public function delete($id)
    {
    	$table = MResep::find($id)->delete();
    	
    	return redirect(url('resep'));
    }
}

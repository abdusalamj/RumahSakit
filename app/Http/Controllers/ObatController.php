<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use App\JenisObat as Jenis;

class ObatController extends Controller
{
	public function index() {
		$data['obats'] = Obat::all();
		return view('obat.all', $data);
	}

	public function add() {
		$data['jenis'] = Jenis::all();
		return view('obat.add', $data);
	}

	public function store(Request $r) {
		$new = new Obat;
		$new->nama = $r->input('nama');
		$new->id_jenis = $r->input('jenis');
		$new->kategori = $r->input('kategori');
		$new->harga = $r->input('harga');
		$new->jumlah = $r->input('jumlah');
		$new->stok = $r->input('satuan');

		$new->save();
		return redirect('obat');
	}

	public function edit($id) {
		$edit = Obat::find($id);
		$jenis = Jenis::all();
		if (isset($edit)) {
			return view('obat.edit', ['obats' => $edit, 'jenis' => $jenis]);  
		}else{
			return view('obat.404');
		}
	}

	public function update(Request $r) {
		$update = Obat::find($r->input('id_obat'));
		if (isset($update)) {
			$update->nama = $r->input('nama');
			$update->id_jenis = $r->input('jenis');
			$update->kategori = $r->input('kategori');
			$update->harga = $r->input('harga');
			$update->jumlah = $r->input('jumlah');
			$update->stok = $r->input('satuan');

			$update->save();
			return redirect('obat');
		}else{
			return view('obat.404');
		}
	}

	public function delete($id) {
		$delete = Obat::find($id);

		$delete->delete();
		return back();
	}
}

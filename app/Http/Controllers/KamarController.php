<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;
use Alert;
class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q = kamar::all();
        return view('kamar.home')->with('data',$q);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('kamar.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $q = new Kamar;
        $q->nomor_kamar = $r->input('nomor_kamar');
        $q->posisi = $r->input('posisi');
        $q->kategori = $r->input('kategori');
        $q->ruangan = $r->input('ruangan');
        $q->harga = $r->input('harga');

        $q->save();
        return redirect(url('/kamar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $q = kamar::find($id);
        return view('kamar.edit')->with('edit',$q);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        $q = kamar::find($r->input('id'));
        $q->nomor_kamar = $r->input('nomor_kamar');
        $q->posisi = $r->input('posisi');
        $q->kategori = $r->input('kategori');
        $q->ruangan = $r->input('ruangan');
        $q->harga = $r->input('harga');

        $q->save();
        return redirect(url('/kamar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $q = kamar::find($id);
        $q->delete();
        return redirect(url('/kamar'));
    }
}

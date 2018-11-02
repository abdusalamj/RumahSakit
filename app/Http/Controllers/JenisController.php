<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisObat;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = JenisObat::all();
        return view('obat.jenis.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $post = new JenisObat;
        $post->jenis = $r->input('jenis');
        $post->keterangan = $r->input('keterangan');
        $post->save();

        return redirect(url('jenis_obat'));
    }

  
    public function edit($id)
    {
        $JenisObat['JenisObat'] = JenisObat::find($id);
        // dd($JenisObat);
        return view('obat.jenis.edit')->with($JenisObat);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $JenisObat= JenisObat::find($request->id);
      $JenisObat->keterangan=$request->input('keterangan');
      $JenisObat->jenis=$request->input('jenis');
      
      $JenisObat->save();
      return redirect('jenis_obat');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

   public function delete($id) {
        $delete = JenisObat::find($id);

        $delete->delete();
        return back();
    }

}

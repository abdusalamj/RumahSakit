<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Dokter::all();
         return view('Dokter.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
      return view('Dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $dokter = new Dokter();
         $dokter->nama_dokter = $request->input('nama_dokter');
         $dokter->email = $request->input('email');
         $dokter->alamat = $request->input('alamat');
         $dokter->jenis_kelamin = $request->input('jenis_kelamin');
         $dokter->spesialis = $request->input('spesialis');
         $dokter->no_hp = $request->input('no_hp');
         $dokter->no_identitas = $request->input('no_identitas');
         $dokter->save();

         return redirect('dokter')->with('success','Dokter has been added');
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
      $dokter = Dokter::find($id);
  return view('dokter/edit',compact('dokter','id'));
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
      $dokter= Dokter::find($request->id);
      $dokter->nama_dokter=$request->input('nama_dokter');
      $dokter->email=$request->input('email');
      $dokter->alamat=$request->input('alamat');
      $dokter->jenis_kelamin=$request->input('jenis_kelamin');
      $dokter->spesialis=$request->input('spesialis');
      $dokter->no_hp=$request->input('no_hp');
      $dokter->no_identitas=$request->input('no_identitas');
      $dokter->save();
      return redirect('dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      $dokter = Dokter::find($id);
      $dokter->delete();
      return redirect('dokter')->with('success','Dokter Has Been Deleted');
    }
}

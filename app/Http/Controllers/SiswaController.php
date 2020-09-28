<?php

namespace App\Http\Controllers;

use App\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SiswaModel::all();
        return view('layouts/datasiswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $data = new SiswaModel();
        //Foto
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $foto->move('uploads/foto',$newName);
        $data->foto = $newName;

        $data->nama =  $request->input('nama');
        $data->nis =  $request->input('nis');
        $data->tgl_lahir =  $request->input('tgl_lahir');
        $data->tempat_lahir =  $request->input('tempat_lahir');
        $data->agama =  $request->input('agama');
        $data->jenis_kelamin =  $request->input('jenis_kelamin');
        $data->kelas =  $request->input('kelas');
        $data->save();
        return redirect()->route('datasiswa.index')->with('alert-success','Data berhasil diubah!');
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
        $data = SiswaModel::where('id',$id)->get();
        return view('layouts/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data1 = SiswaModel::where('id',$id)->first();
        $data1->nama = $request->nama;
        $data1->nis = $request->nis;
        $data1->tgl_lahir = $request->tgl_lahir;
        $data1->tempat_lahir = $request->tempat_lahir;
        $data1->agama = $request->agama;
        $data1->jenis_kelamin = $request->jenis_kelamin;
        $data1->kelas = $request->kelas;
        $data1->save();
        return redirect()->route('datasiswa.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SiswaModel::where('id',$id)->first();
        $data->delete();
        return redirect()->route('datasiswa.index')->with('alert-success','Data berhasi dihapus!');
    }
}

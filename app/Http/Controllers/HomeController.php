<?php

namespace App\Http\Controllers;
use App\User;
use App\SiswaModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $count = SiswaModel::count();
        return view('home')->with('count', $count);
    }

    public function pengaturan()
    {

        $data = User::all();
        return view('layouts/pengaturan', compact('data'));
    }

    public function ubahpengaturan(Request $request )
    {
        $request->user()->update(
            $request->all()
        );
        return redirect()->route('home')->with('alert-success','Data berhasil diubah!');
    }
}

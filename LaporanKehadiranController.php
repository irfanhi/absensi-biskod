<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanKehadiran;
use App\Models\Karyawan;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;

class LaporanKehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Auth()->User()->level !='admin'){
        //     Auth::logout();
        //     return redirect('/login')->with('error','Anda Tidak Memiliki Hak Akses, Silahkan Login Kembali');
        // }else{
        $laporankehadiran = LaporanKehadiran::all();
        return view('home.laporankehadiran.index', compact(['laporankehadiran']));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        $user = User::all();
        return view('home.laporankehadiran.tambah', compact(['karyawan'], 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LaporanKehadiran::create($request->all());
        return redirect('/laporankehadiran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all();
        $karyawan = Karyawan::all();
        $laporankehadiran = LaporanKehadiran::find($id);
        return view('home.laporankehadiran.edit', compact(['laporankehadiran'], 'karyawan','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $laporankehadiran = LaporanKehadiran::find($id);
        $laporankehadiran->update($request->all());
        return redirect('/laporankehadiran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporankehadiran = LaporanKehadiran::find($id);
        $laporankehadiran->delete();
        return redirect('/laporankehadiran');
    }
}

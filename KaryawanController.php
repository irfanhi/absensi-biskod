<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::All();
        return view('home.karyawan.index', compact(['karyawan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.karyawan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validateData = $request->validate([
        //     'nama' => 'required',
        //     'username' => 'required|unique:users',
        //     'password' => 'required|min:5|max:20',
        // ]);

        Karyawan::create([
            'nama'=> $request->nama,
            'jabatan'=> $request->jabatan,
            'departemen'=> $request->departemen,
            'notlp'=> $request->notlp,
            'alamat'=> $request->alamat,
            $request->except(['_token']),
        ]);return redirect('/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        return view('home.karyawan.edit',compact(['karyawan']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $karyawan = Karyawan::find($id);
        $karyawan->update([
            'nama'=> $request->nama,
            'jabatan'=> $request->jabatan,
            'departemen'=> $request->departemen,
            'notlp'=> $request->notlp,
            'alamat'=> $request->alamat,
        $request->except(['_token']),
    ]);return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }
}

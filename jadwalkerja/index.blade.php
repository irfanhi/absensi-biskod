@extends('layouts.master')
@section('title','Kelola Data JadwalKerja')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4>Kelola Data Jadwal Kerja</h4>
                        <a href="/jadwalkerja/tambah" class="btn btn-primary">Tambah Data</a>
                        </center>
                    </div>
                    <div class="card-body">
                        <div
                            class="table-responsive">
                            <table
                                class="table table-textture table-stripped table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Jadwal</th>
                                        <th scope="col">Karyawan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Jam Masuk</th>
                                        <th scope="col">Jam Pulang</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($jadwalkerja as $u)
                                <tbody>
                                    <tr class="">
                                        <td scope="row">{{ $u->id}}</td>
                                        <td>{{ $u->id_karyawan }}</td>
                                        <td>{{ $u->tanggal }}</td>
                                        <td>{{ $u->jam_masuk }}</td>
                                        <td>{{ $u->jam_pulang }}</td>
                                        <td>
                                            <a href="/jadwalkerja/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                            <a href="/jadwalkerja/{{ $u->id }}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Mau Di Hapus')">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>    
    </section>    
</div>    
@endsection
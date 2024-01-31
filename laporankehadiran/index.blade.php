@extends('layouts.master')
@section('title','Kelola Data Laporan')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4>Kelola Data Laporan Kehadiran</h4>
                        <a href="/laporankehadiran/tambah" class="btn btn-primary">Tambah Data</a>
                        </center>
                    </div>
                    <div class="card-body">
                        <div
                            class="table-responsive">
                            <table
                                class="table table-textture table-stripped table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Absensi</th>
                                        <th scope="col">Karyawan</th>
                                        <th scope="col">Petugas</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($laporankehadiran as $u)
                                <tbody>
                                    <tr class="">
                                        <td scope="row">{{ $u->id}}</td>
                                        <td>{{ $u->karyawan->nama }}</td>
                                        <td>{{ $u->user->nama_petugas }}</td>
                                        <td>{{ $u->tanggal }}</td>
                                        <td>{{ $u->status }}</td>
                                        <td>{{ $u->catatan }}</td>
                                        <td>
                                            <a href="/laporankehadiran/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                            <a href="/laporankehadiran/{{ $u->id }}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Mau Di Hapus')">Hapus</a>
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
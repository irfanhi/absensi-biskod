@extends('layouts.master')
@section('title','Kelola Data Cuti')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4>Kelola Data Cuti</h4>
                        <a href="/cuti/tambah" class="btn btn-primary">Tambah Data</a>
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
                                        <th scope="col">Tanggal Mulai</th>
                                        <th scope="col">Tanggal Selesai</th>
                                        <th scope="col">Alsan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($cuti as $u)
                                <tbody>
                                    <tr class="">
                                        <td scope="row">{{ $u->id}}</td>
                                        <td>{{ $u->karyawan->nama }}</td>
                                        <td>{{ $u->tanggal_mulai }}</td>
                                        <td>{{ $u->tanggal_selesai }}</td>
                                        <td>{{ $u->alasan }}</td>
                                        <td>
                                            <a href="/cuti/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                            <a href="/cuti/{{ $u->id }}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Mau Di Hapus')">Hapus</a>
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
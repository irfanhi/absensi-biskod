@extends('layouts.master')
@section('title','Kelola Data Karyawan')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4>Kelola Data Karyawan</h4>
                        <a href="/karyawan/tambah" class="btn btn-primary">Tambah Data</a>
                        </center>
                    </div>
                    <div class="card-body">
                        <div
                            class="table-responsive">
                            <table
                                class="table table-textture table-stripped table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Karyawan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Departemen</th>
                                        <th scope="col">No Telepon</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($karyawan as $u)
                                <tbody>
                                    <tr class="">
                                        <td scope="row">{{ $u->id}}</td>
                                        <td>{{ $u->nama }}</td>
                                        <td>{{ $u->jabatan }}</td>
                                        <td>{{ $u->departemen }}</td>
                                        <td>{{ $u->notlp }}</td>
                                        <td>{{ $u->alamat }}</td>
                                        <td>
                                            <a href="/karyawan/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                            <a href="/karyawan/{{ $u->id }}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Mau Di Hapus')">Hapus</a>
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
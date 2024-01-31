@extends('layouts.master')
@section('title','Halaman Edit Data Karyawan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <form action="/karyawan/{{$karyawan->id}}/update" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" value="{{$karyawan->nama}}" name="nama" placeholder="Masukan Untuk Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" class="form-control" value="{{$karyawan->jabatan}}" name="jabatan" placeholder="Masukan Untuk " required>
                            </div>
                            <div class="form-group">
                                <label for="">Departemen</label>
                                <input type="text" class="form-control" value="{{$karyawan->departemen}}" name="departemen" placeholder="Masukan Untuk " required>
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" class="form-control" value="{{$karyawan->notlp}}" name="notlp" placeholder="Masukan Untuk " required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" value="{{$karyawan->alamat}}" name="alamat" placeholder="Masukan Untuk " required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/karyawan" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
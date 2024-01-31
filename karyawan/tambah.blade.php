@extends('layouts.master')
@section('title','Halaman Tambah Data Karyawan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <form action="/karyawan/simpan" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Untuk Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" placeholder="Masukan Untuk Jabatan" required>
                            </div>
                            <div class="form-group">
                                <label for="">Departemen</label>
                                <input type="text" class="form-control" name="departemen" placeholder="Masukan Untuk Departemen" required>
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" class="form-control" name="notlp" placeholder="Masukan Untuk No Telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukan Untuk Alamat" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
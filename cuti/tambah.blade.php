@extends('layouts.master')
@section('title','Halaman Tambah Data Absensi')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Absensi</h4>
                        </div>
                        <div class="card-body">
                            <form action="/cuti/simpan" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Karyawan</label>
                                <select name="id_karyawan" id="" class="form-control">
                                    @foreach ($karyawan as $s)
                                        <option value="{{$s->id}}">{{$s->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Mulai</label>
                                <input type="date" class="form-control" name="tanggal_mulai" placeholder="Masukan Untuk Tanggal Mulai" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="date" class="form-control" name="tanggal_selesai" placeholder="Masukan Untuk Tanggal Selesai" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alasan</label>
                                <input type="text" class="form-control" name="alasan" placeholder="Masukan Untuk Alasan" required>
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
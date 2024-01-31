@extends('layouts.master')
@section('title','Halaman Edit Data Absensi')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Absensi</h4>
                        </div>
                        <div class="card-body">
                            <form action="/absensi/{{$absensi->id}}/update" method="post">
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
                                <label for="">Petugas</label>
                                <select name="id_user" id="" class="form-control">
                                    @foreach ($user as $s)
                                        <option value="{{$s->id}}">{{$s->nama_petugas}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="text" class="form-control" value="{{$laporankehadiran->tanggal}}" name="tanggal" placeholder="Masukan Untuk " required>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" class="form-control" value="{{$laporankehadiran->status}}" name="status" placeholder="Masukan Untuk " required>
                            </div>
                            <div class="form-group">
                                <label for="">Catatan</label>
                                <input type="text" class="form-control" value="{{$laporankehadiran->catatan}}" name="catatan" placeholder="Masukan Untuk " required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/laporankehadiran" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
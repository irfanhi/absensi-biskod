@extends('layouts.master')
@section('title','Halaman Tambah Data Jadwal Kerja')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Jadwal Kerja</h4>
                        </div>
                        <div class="card-body">
                            <form action="/jadwalkerja/simpan" method="post">
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
                                <label for="">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" placeholder="Masukan Untuk Jabatan" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jam Masuk</label>
                                <input type="text" class="form-control" name="jam_masuk" placeholder="Masukan Untuk Departemen" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jam Pulang</label>
                                <input type="text" class="form-control" name="jam_pulang" placeholder="Masukan Untuk No Telepon" required>
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
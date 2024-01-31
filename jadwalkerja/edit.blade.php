@extends('layouts.master')
@section('title','Halaman Edit Data Jadwal Kerja')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Jadwal Kerja</h4>
                        </div>
                        <div class="card-body">
                            <form action="/jadwalkerja/{{$jadwalkerja->id}}/update" method="post">
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
                                <input type="text" class="form-control" value="{{$jadwalkerja->tanggal}}" name="tanggal" placeholder="Masukan Untuk " required>
                            </div>
                            <div class="form-group">
                                <label for="">Jam Masuk</label>
                                <input type="text" class="form-control" value="{{$jadwalkerja->jam_masuk}}" name="jam_masuk" placeholder="Masukan Untuk " required>
                            </div>
                            <div class="form-group">
                                <label for="">Jam Pulang</label>
                                <input type="text" class="form-control" value="{{$jadwalkerja->jam_pulang}}" name="jam_pulang" placeholder="Masukan Untuk " required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/jadwalkerja" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@extends('layouts.master')
@section('title','Halaman Edit Data Cuti')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Cuti</h4>
                        </div>
                        <div class="card-body">
                            <form action="/cuti/{{$cuti->id}}/update" method="post">
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
                                <input type="text" class="form-control" value="{{$cuti->tanggal_mulai}}" name="tanggal_mulai" placeholder="Masukan Untuk " required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="text" class="form-control" value="{{$cuti->tanggal_selesai}}" name="tanggal_selesai" placeholder="Masukan Untuk " required>
                            </div>
                            <div class="form-group">
                                <label for="">Alasan</label>
                                <input type="text" class="form-control" value="{{$cuti->alasan}}" name="alasan" placeholder="Masukan Untuk " required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/cuti" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
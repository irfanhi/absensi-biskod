<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = ['id_karyawan','tanggal','jam_masuk','jam_pulang','kehadiran'];
    public function Absensi(){
        return $this->hasMany(Absensi::class, 'id','id');
    }
    public function Karyawan(){
        return $this->BelongsTo(Karyawan::class, 'id_karyawan','id');
    }
}

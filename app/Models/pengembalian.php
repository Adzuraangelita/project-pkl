<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    use HasFactory;
    protected $table = "pengembalians";
    protected $fillable = ['tgl_pengembalian', 'denda', 'id_buku','id_anggota','id_petugas'];
    protected $visible = ['tgl_pengembalian', 'denda', 'id_buku','id_anggota','id_petugas'];
    public $timestamps = true;
    public function anggota()
    {
        return $this->belongsTo('App\Models\anggota', 'id_anggota');
    }
    public function buku()
    {
        return $this->belongsTo('App\Models\buku', 'id_buku');
    }
    public function petugas()
    {
        return $this->belongsTo('App\Models\petugas', 'id_petugas');
    }
}

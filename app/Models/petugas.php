<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    protected $table = "petugas";
    protected $fillable = ['nama_petugas', 'jabatan_petugas', 'no_telp_petugas','alamat_petugas'];
    protected $visible = ['nama_petugas', 'jabatan_petugas', 'no_telp_petugas','alamat_petugas'];
    public $timestamps = true;
    public function peminjaman()
    {
        return $this->hasMany('App\Models\peminjaman', 'id_buku');
    }
    public function pengembalian()
    {
        return $this->hasMany('App\Models\pengembalian', 'id_buku');
    }
}

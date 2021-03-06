<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    protected $table = "anggotas";
    protected $fillable = ['kode_anggota', 'nama_anggota', 'jk_anggota','jurusan_anggota','no_telp_anggota','alamat_anggota'];
    protected $visible = ['kode_anggota', 'nama_anggota', 'jk_anggota','jurusan_anggota','no_telp_anggota','alamat_anggota'];
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
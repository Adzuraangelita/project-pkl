<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjaman";
    protected $fillable = ['tgl_pinjam', 'tgl_kembali', 'id_buku','id_anggota','id_petugas'];
    protected $visible = ['tgl_pinjam', 'tgl_kembali', 'id_buku','id_anggota','id_petugas'];
    public $timestamps = true;
    public function pengembalian()
    {
        return $this->belongsTo('App\Models\pengembalian', 'id_buku','id_anggota','id_petugas');
    }
    public function buku()
    {
        return $this->belongsTo('App\Models\buku', 'id_buku');
    }
    public function peminjaman()
    {
        return $this->belongsTo('App\Models\peminjaman', 'id_buku','id_anggota','id_petugas');
    }
}

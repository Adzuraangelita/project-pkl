<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = "bukus";
    protected $fillable = ['kode_buku', 'judul_buku', 'penulis_buku', 'penerbit_buku', 'cover', 'thn_terbit'];
    protected $visible = ['kode_buku', 'judul_buku', 'penulis_buku', 'penerbit_buku', 'cover','thn_terbit'];
    
    public $timestamps = true;

    public function buku()
    {
        return $this->hasMany('App\Models\buku', 'buku_id');
    }
    public function image()
    {
        if ($this->cover && file_exists(public_path('images/buku/' . $this->cover))) {
            return asset('images/buku/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/buku/' . $this->cover))) {
            return unlink(public_path('images/buku/' . $this->cover));
        }
    }
}

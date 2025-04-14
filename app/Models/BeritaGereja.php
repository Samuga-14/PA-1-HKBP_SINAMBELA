<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaGereja extends Model
{
    use HasFactory;

    protected $table = 'berita_gereja';
    protected $primaryKey = 'id_berita';

    protected $fillable = ['id_admin', 'nama', 'gambar', 'deskripsi', 'tanggal_publikasi'];

    public function admin() {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}


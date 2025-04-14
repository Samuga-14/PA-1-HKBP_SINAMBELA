<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriKegiatan extends Model
{
    use HasFactory;

    protected $table = 'galeri_kegiatan';
    protected $primaryKey = 'id_galeri';

    protected $fillable = ['id_admin', 'gambar', 'deskripsi', 'video', 'tanggal_unggah'];

    public function admin() {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}


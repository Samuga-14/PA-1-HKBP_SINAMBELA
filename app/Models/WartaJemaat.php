<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WartaJemaat extends Model
{
    use HasFactory;

    protected $table = 'warta_jemaat';
    protected $primaryKey = 'id_warta_jemaat';

    protected $fillable = ['id_admin', 'judul', 'file_pdf', 'deskripsi', 'tanggal_publikasi'];

    public function admin() {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}


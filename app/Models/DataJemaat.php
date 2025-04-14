<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJemaat extends Model
{
    use HasFactory;

    protected $table = 'data_jemaat';
    protected $primaryKey = 'id_jemaat';

    protected $fillable = [
        'nama_jemaat', 'id_admin', 'tanggal_lahir', 'alamat', 
        'status_pernikahan', 'jenis_kelamin', 'jumlah_anak'
    ];

    public function admin() {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}


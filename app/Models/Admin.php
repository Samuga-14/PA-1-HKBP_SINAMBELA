<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    protected $fillable = ['email', 'password'];

    public function wartaJemaat() {
        return $this->hasMany(WartaJemaat::class, 'id_admin');
    }

    public function beritaGereja() {
        return $this->hasMany(BeritaGereja::class, 'id_admin');
    }

    public function dataJemaat() {
        return $this->hasMany(DataJemaat::class, 'id_admin');
    }

    public function galeriKegiatan() {
        return $this->hasMany(GaleriKegiatan::class, 'id_admin');
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturKepengurusan extends Model
{
    use HasFactory;

    protected $table = 'struktur_kepengurusan';
    protected $primaryKey = 'id_kepengurusan';

    protected $fillable = ['nama_jabatan', 'nama_anggota'];
}


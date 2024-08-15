<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganKerja extends Model
{
    use HasFactory;

    protected $table = 'lowongan_kerjas';
    protected $primaryKey = 'id_loker';
    public $timestamps = false;

    protected $fillable = ['id_loker', 'nama_prs', 'posisi', 'deskripsi', 'tgl_loker', 'tgl_exp'];

}

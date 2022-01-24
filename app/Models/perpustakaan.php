<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpustakaan extends Model
{
    use HasFactory;
    protected $table = "perpustakaan";
    protected $fillable = [
        'id',
        'ktp_ktas', 
        'nomor_ktp_ktas',
        'email',
        'namalengkap', 
        'password',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_rumah',
        'hp', 
        'nama_instansi', 
        'telpon_instansi',
        'alamat_instansi', 
        'pendidikan_terakhir', 
        'kelamin',
        'pekerjaan',
        'status_perkawinan',
    ];
        
}

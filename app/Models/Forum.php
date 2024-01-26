<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $fillable = [
        'sertifikat_forum',
        'id_penelitian',
        'judul',
        'lampiran',
        'nama_forum',
        'institusi_penyelenggara',
        'waktu_pelaksanaan_awal',
        'waktu_pelaksanaan_akhir',
        'tempat',
        'status'
    ];
    public function penelitian()
    {
        return $this->belongsTo(Penelitian::class, 'id_penelitian');
    }
}

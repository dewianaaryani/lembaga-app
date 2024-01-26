<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penelitian;
class BukuAjarTeks extends Model
{
    use HasFactory;
    protected $fillable = [
        'sertifikat_buku_ajar',
        'id_penelitian',
        'penerbit',
        'lampiran',
        'judul',
        'isbn',
        'jumlah_halaman',
    ];
    public function penelitian()
    {
        return $this->belongsTo(Penelitian::class, 'id_penelitian');
    }
}

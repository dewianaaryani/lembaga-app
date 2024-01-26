<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penelitian;
class Hki extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_penelitian',
        'sertifikat_hki',
        'judul',
        'status',
        'jenis',
        'lampiran',
    ];

    public function penelitian()
    {
        return $this->belongsTo(Penelitian::class, 'id_penelitian');
    }
}

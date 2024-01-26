<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BukuAjarTeks;
class Penelitian extends Model
{
    use HasFactory;
    protected $fillable = [
        'nidn',
        'no_penugasan',
        'tk_penugasan',
        'judul',
        'anggota1',
        'anggota2',
        'fakultas',
        'skema_penelitian',
        'program_hibah',
        'hak_cipta',
        'kontrak_riset',
        'status',
        'kontrak_lddikti',
        'tk_lddikti',
        'no_tanggal_dipa',
        'prototype',
        'publikasi',
        'dana'
    ];
    public function bukuAjarTeks()
    {
        return $this->hasMany(BukuAjarTeks::class, 'id_penelitian');
    }
    public function dosen()
    {
        return $this->belongsTo(User::class, 'nidn', 'username');
    }
}

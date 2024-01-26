<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Lembaga extends Model
{
    use HasFactory;
    protected $primaryKey = 'username';
    public $incrementing = false;
}

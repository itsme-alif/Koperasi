<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registuser extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'wa',
        'alamat'
    ];
}

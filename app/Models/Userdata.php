<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'nama',
        'umur',
        'pekerjaan',
        'alamat',
        'notelp'
    ];

    protected $table = 'userdata';
    protected $primaryKey = 'id';
}

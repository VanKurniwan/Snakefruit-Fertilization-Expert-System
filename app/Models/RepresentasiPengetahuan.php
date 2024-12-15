<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RepresentasiPengetahuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodeGejala',
        'p01',
        'p02',
        'p03',
        'p04',
        'p05',
        'p06',
        'p07',
        'p08',
        'p09',
    ];

    protected $table = 'representasiPengetahuan';
    protected $primaryKey = 'id';

    public static function getRowProbabilitas($row)
    {
        return static::where('kodeGejala', '=', $row)->first()->toArray();
    }

    public static function getNilaiProbabilitas($row, $column)
    {
        return static::where('kodeGejala', '=', $row)->value($column);
    }
}

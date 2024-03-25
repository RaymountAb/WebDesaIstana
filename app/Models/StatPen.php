<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatPen extends Model
{
    use HasFactory;

    protected $table = 'stat_pens';

    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

    protected $guarded = ['id'];

    protected $fillable = [
        'daerah',
        'lelaki',
        'perempuan'
    ];
}

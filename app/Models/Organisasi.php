<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $table = 'organisasis';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapak extends Model
{
    use HasFactory;
    protected $table = 'lapaks';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'image',
        'harga',
        'description',
        'link',
        'map'
    ];
}

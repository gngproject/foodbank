<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    //
    protected $table = "lokasitoko";
    public $fillable = [
        'area',
        'nama',
        'alamat',
        'created_at',
        'updated_at'
    ];
}

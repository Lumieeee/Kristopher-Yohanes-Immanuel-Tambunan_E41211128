<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Les extends Model
{
    use HasFactory;

    protected $table = 'les';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'alamat',
        'bahasa',
        'harga'
    ];
}

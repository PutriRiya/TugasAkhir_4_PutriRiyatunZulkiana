<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'label1',
        'deskripsi1',
        'label2',
        'deskripsi2',
        'label3',
        'deskripsi3',
        'label4',
        'deskripsi4'
    ];

}

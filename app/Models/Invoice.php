<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_al_sayarah',
        'raqam_al_lawha',
        'ism_al_saiq',
        'raqam_al_iqama',
        'raqam_al_hatif',
        'al_tarekh',
        'al_malahizat',
        'created_at',
        'updated_at'
    ];
}

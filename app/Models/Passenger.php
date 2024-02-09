<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'ism_al_zaif',
        'raqam_al_jawaz',
        'al_jinsiyah',
        'created_at',
        'updated_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name_english	',
        'company_name_arabic',
        'number',
        'logo',
        'created_at',
        'updated_at'
    ];
}

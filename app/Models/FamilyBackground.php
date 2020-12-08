<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyBackground extends Model
{
    use HasFactory;

    protected $table = 'family_background';
    public $timestamps = false;

    protected $fillable = [
        'personal_id',
        'm_name',
        'm_middle',
        'm_surname',
        'm_citizenship',
        'f_name',
        'f_middle',
        'f_surname',
        'f_citizenship',
    ];
}

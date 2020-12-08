<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;
    
    protected $table = 'personal_information';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'surname',
        'middle',
        'birth',
        'birthplace',
        'gender',
        'status'
    ];

}

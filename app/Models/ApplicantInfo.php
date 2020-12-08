<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantInfo extends Model
{
    use HasFactory;

    protected $table = 'applicants_info';
    public $timestamps = false;

    protected $fillable = [
        'personal_id',
        'basis',
        'foreign_passport',
        'emergency_contact',
    ];
}

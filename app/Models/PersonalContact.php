<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalContact extends Model
{
    use HasFactory;

    protected $table = 'personal_contact';
    public $timestamps = false;

    protected $fillable = [
        'personal_id',
        'address',
        'city',
        'province',
        'occupation',
        'office_no',
        'office_address',
        'email',
        'phone'
    ];
}

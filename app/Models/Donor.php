<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'blood_group',
        'gender',
        'profession',
        'date_of_birth',
        'city',
        'location',
        'address',
        'status',
        'active_status',
    ];
}

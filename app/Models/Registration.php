<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'forename', 'middleName', 'surname', 'otherNames', 'title', 'dob', 'birthNationality', 'email', 'phone', 'gender', 'address', 'postcode', 'position', 'speciality',
        'nokName', 'nokEmail', 'nokRelationship', 'nokMobile', 'nokAddress',
        'passportNumber', 'nationality', 'passportExpiry', 'visa', 'visaExpiry'
    ];
}

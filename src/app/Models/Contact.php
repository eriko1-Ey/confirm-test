<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'last-name',
        'first-name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
        'message'
    ];
}

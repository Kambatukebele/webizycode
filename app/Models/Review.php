<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
         'client_title', 
        'client_fullname',
        'client_company_name',
        'client_company_link',
        'client_review',
        'privacy', 
    ];
}
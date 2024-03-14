<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodCenter extends Model
{
    use HasFactory;

    protected $table = 'blood_centers';

    protected $fillable = [
        'name',
        'address',
        'city',
        'country',
        'postal',
        // Add more fillable attributes as needed
    ];

}

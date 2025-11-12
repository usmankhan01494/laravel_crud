<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // Laravel default me "abouts" dhoondhta hai, to hume manually batana padega
    protected $table = 'about';

    protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'image',
        'status'
    ];
}

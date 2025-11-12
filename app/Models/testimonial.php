<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    /**
     * Agar table ka naam singular hai (testimonial),
     * to hume manually batana zaroori hai.
     */
    protected $table = 'testimonial';

    /**
     * Ye fields mass-assign hone ke liye allowed hain.
     */
    protected $fillable = [
        'name',
        'position',
        'message',
        'image',
        'status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    public $timestamps = false;
    protected $fillable = [
        'client_name','client_company','stars','comment','client_photo','status','created_at','updated_at'
    ];
}

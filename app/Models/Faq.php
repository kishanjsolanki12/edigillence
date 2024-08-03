<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs';
    public $timestamps = false;
    protected $fillable = [
        'question','answer','status','created_at','updated_at'
    ];
}

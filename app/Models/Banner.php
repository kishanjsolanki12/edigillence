<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banners';
    public $timestamps = false;
    protected $fillable = [
        'title','body','banner_image','is_publish','created_at','updated_at'
    ];
}

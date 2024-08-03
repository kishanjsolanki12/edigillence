<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    public $timestamps = false;
    protected $fillable = [
        'title','description','service_logo','service_image','status','created_at','updated_at'
    ];
}

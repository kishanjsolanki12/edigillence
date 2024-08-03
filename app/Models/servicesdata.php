<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicesdata extends Model
{
    use HasFactory;
    protected $table = 'services_data';
    public $timestamps = false;
    protected $fillable = [
        'service_id','data','created_at','updated_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    protected $table = 'technologies';
    public $timestamps = false;
    protected $fillable = [
        'category_id','title','description','image','status','created_at','updated_at'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = 'attendance';
    public $timestamps = false;
    protected $fillable = [
            'user_id','date','clock_in','break_start','break_end','break_time','clock_out','total_time','created_at','updated_at'
        ];


}

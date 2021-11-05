<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phone_numbers extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'phone_number'
    ];

    public $timestamps = false;

//    relationship
public function student(){
    $this->belongsTo(student::class);
}
}

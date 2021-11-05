<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'dob'
    ];

    public $timestamps = false;

//    relationship

public function phone_numbers(){
$this->hasMany(phone_numbers::class);
}
}

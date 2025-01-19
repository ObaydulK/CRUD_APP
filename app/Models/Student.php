<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use HasFactory;

    protected $fillable = [    
    'Image',
    'Name' ,
    'Email' ,
    'Phone' ,
    'Address' ,
    'City' ,
    'Class'  ,
    'Gender' ,
    'Bio' ,
    'create_at' ,
    'updated_at' ];
}

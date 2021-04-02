<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class myuser extends Model
{
public $timestamps = false;
    
public function setPasswordAttribute($password){
    $this->attributes['password'] = Hash::make($password);
}
// public function items(){
//     return $this->hasMany('locations');
// }



}

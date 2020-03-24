<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reply extends Model
{
    //
   protected $guarded = [];
   
   public function question(){

   	return $this->belongsto(Questions::class);
   } 

   public function user(){
   	return $this->belongsto(User::class);
   }

   public function like(){
   	return $this->hasMany(Like::class);

   }
}

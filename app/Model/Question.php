<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    // relationship to model 
    public function user(){

     return $this->belongsTo(User::class);
    
    }

    public function replies(){

    	return $this->hasMany(Reply::class);
    }

    public function category(){

    	return $this->belongsTo(Categories::class);
    }

}

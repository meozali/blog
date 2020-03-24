<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
//use App\Model\Reply;

class Question extends Model
{


   /// protected $with = ['replies'];

    protected $fillable = ['title','slug','body','category_id','user_id'];
    // relationship to model 
    public function getRouteKeyName(){

        return 'slug';
    }
    public function user(){

     return $this->belongsTo(User::class);
    
    }

    public function replies(){

        return $this->hasMany(Reply::class);
    //return $this->hasMany('App\Model\Reply','id','question_id');
    }

    public function category(){

    	return $this->belongsTo(Categories::class);
    }

}

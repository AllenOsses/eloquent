<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
        //belongs to pertenece a =  
    }

    public function getGetTitleAttribute(){
        return strtoupper($this->title);
    }
    public function setTitleAttribute($value){
        $this->attributes['title'] = strtolower($value);
    }
}

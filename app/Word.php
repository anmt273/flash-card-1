<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'words';
    public function lesson(){
    	return $this->belongsTo('App\Lesson','id_lesson','id');
    }
    public function rememberword(){
        return $this->hasMany('App\RememberWord','word_id','id');
    }
}

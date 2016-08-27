<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPhoto extends Model
{
		protected $table = 'userPhotos';

        public function Users(){

    	$this->belongsTo('App\User');
    }
}

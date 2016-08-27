<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{

	 protected $table = 'userInfos';
	

    public function Users(){

    	$this->belongsTo('App\User');
    }

}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserInfo;
use App\UserPhoto;
use Image;
use Illuminate\Support\Facades\Auth;

class SaveInfoController extends Controller
{
   protected $path 	    = 'img/profile/';
   protected $thumbPath = 'img/profile/thumb/';

	public function __construct()
	{
	    $this->middleware('auth');
	}


	public function store(Request $request){

		//Validate
		$this->validate($request, [
            'nickname' => 'required' ,          
        ]);

         $user =  Auth::user();
		 //$info = new UserInfo;
		 $info = UserInfo::where('user_id', '=',$user->id) ->first(); 
		  if(! $info) 
		 	  $info = new UserInfo;
				 $info->nickname = $request->nickname;
				 $info->about 	 = $request->about;
				 $info->user_id	 = $user->id;		 
		 		 $info->save();

		 		$data = UserInfo::find($info->id);

		    return back()->withInput();

	}

		public function addProfilePhoto(Request $request){

			$this->validate($request,[

				'photos' => 'required|mimes:png,jpg,bmp,jpeg'

				]);


			$file = $request->file('photos');
			$name = time().$file->getClientOriginalName();
			$file->move($this->path,$name);

			$path = $this->path.$name;
			$thumbPath = $this->thumbPath.$name;
			$image = Image::make($path)->fit(200);
			$image->fit(200);
			$image->save($thumbPath);

			$user 	   =  Auth::user();
			$photo 	   = new UserPhoto;

			$photo->photoPath 	     = $path;
			$photo->thumbPath 	     = $thumbPath;
			$photo->user_id	 	     = $user->id;		 
		 	$photo->save();



		}
}

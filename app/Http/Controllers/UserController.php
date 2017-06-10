<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use File;

class UserController extends Controller
{
    /**
     * Show the settings page
     *
     * @return \Illuminate\Http\Request
     */
    public function settings()
    {
      return view('settings', array('user' => Auth::user()));
    }
    
    /**
     * Update avatar as per request
     *
     * @return \Illuminate\Http\Request
     */
    public function update_avatar(Request $request)
    {
      if($request->hasFile('avatar')) {
        $user = Auth::user();
        $avatar = $request->file('avatar');
        $fileName = time() . '.' . $avatar->getClientOriginalExtension();
        
        // Delete current image before uploading new image
        if($user->avatar !== 'default.jpg') {
          $file = '/images/uploads/';
          $lastFile = $user->avatar;
          
          File::Delete(public_path($file . $lastFile));
        }
        
        // Resize-as-fit and save avatar
        Image::make($avatar)
          ->fit(150, 150)
          ->save(public_path('/images/uploads/' . $fileName));
        
        $user->avatar = $fileName;
        $user->save();
      }
      
      return view('settings', array('user' => $user));
    }
}

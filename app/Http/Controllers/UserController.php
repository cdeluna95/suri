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
     * Update avatar as per Request
     *
     * @return \Illuminate\Http\Request
     */
    public function update_avatar(Request $request)
    {
      $user = Auth::user();
      
      if($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $fileName = time() . '.' . $avatar->getClientOriginalExtension();
        
        // Delete current image before uploading new image
        if($user->avatar !== 'default.jpg') {
          $filePath = '/images/uploads/';
          $lastFile = $user->avatar;
          
          File::Delete(public_path($filePath . $lastFile));
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

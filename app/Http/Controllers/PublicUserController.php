<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Photo;
use App\Category;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UsersEditRequest;
use Illuminate\Support\Facades\Session;

class PublicUserController extends Controller
{
    public function show($id){
      $categories1 = Category::take(4)->get();
      $categories2 = Category::skip(4)->take(4)->get();
      $user = User::findOrFail($id);
      return view('profile', compact('user', 'categories1', 'categories2'));
    }

    public function update(Request $request, $id)
    {
      $user = User::findOrFail($id);

      if(trim($request->password) == "") {
        $input = $request->except('password');
      } else {
        $input = $request->all();
      }
      if ($file = $request->file('photo_id')) {
          $name = time(). $file->getClientOriginalName();
          $name = str_replace(" ", "_", $name);
          $file->move('images', $name);
          $photo = Photo::create(['path'=>$name]);
          $input['photo_id'] = $photo->id;
      }
      $input['password'] = bcrypt($request->password);
      $user->update($input);
      return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Profile;
class ProfileController extends Controller
{
public function add()
  {
      return view('admin.profile.create');
  }

public function create(Request $request)
  {
    //Varidationを行う
    $this->validate($request,profile::$rules);
    $profile=new profile;
    $form=$request->all();
  
    //フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
   
    
    //データベースに保存する
    $profile->fill($form);
    $profile->save();
    
      return redirect('admin/profile/create');
  }

 public function edit()
 {
   
  // Profiles Modelからデータを取得する
$profile = new Profile;
if (empty($profile)) {
abort(404);

}
return view('admin.profile.edit', ['profile_form' => $profile]);
 }
 
 public function update(Request $request)
 {
     //validationをかける
     $this ->validate($request, Profile::$rules);
     //Profile Modelからデータを取得する
     $profile=Profile::find($request->id);
     //送信されてきたフォームデータを格納する
     $profile_form ->all();
     
     unset($profile_form['_token']);
     
     $profile->fill($profile_form)->save();
     
     
     $history=new History;
     $history->profile_id=$profile->id;
     $history->edited_at=Carbon::now();
     $history->save();
     
 return redirect('admin/profile/edit');
 }    
}













































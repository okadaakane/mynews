<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\profile;


class profileController extends Controller
{
   public function create(Request $request)
  {
    $this->validate($request, profile::$rules);

    $profile = new profile;
    $form = $request->all();

      // フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
      // データベースに保存する
    $profile->fill($form);
    $profile->save();
     

    }
    public function add()
    {
        return view('admin.profile.create');
    }
 
    
   public function create()
    {
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
    
 
}

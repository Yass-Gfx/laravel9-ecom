<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{

    public function dashboard()
    {
      return View('admin.dashboard');
    }

    public function login(Request $request)
    {
      if($request->isMethod('post')){
        $data = $request->all();
        //echo "<pre>"; print_r($data); die();
        if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password' => $data['password'], 'status'=>1])){
          return redirect('admin/dashboard');
        }else{
          return redirect()->back()->with('error_message', 'Invaild Email or Password! Please Try Again');
        }
      }
      return view('admin.login');
    }


    public function logout(){
      Auth::guard('admin')->logout();
      return redirect('admin/login');
    }
}

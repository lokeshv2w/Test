<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function loginView():View
    {
        return view('admin.login');
    }

    public function dashboardView():View
    {
        return view('admin.dashboard');
    }

    public function authLogin(Request $request):RedirectResponse
    {
        $data = $request->all();
        $validate = array();
        $validate['email'] = 'required|email';
        $validate['password'] = 'required';
        $request->validate($validate);
        
        if(Auth::guard('web')->attempt(['email'=> $data['email'],'password'=> $data['password'],'status' => 'Active']))
        {
            return redirect()->route('admin.dashboard');

        }else{
            return redirect()->route('admin.login')->with('msg', 'Please Check Your Credentials');
        }
    }

    public function logout():RedirectResponse
    {
        Auth::guard('web')->logout();
        return redirect()->route('admin.login');
    }

    public function adminProfile():View
    {
        return view('admin.profile');
    }

    
    public function updateProfile(Request $request):RedirectResponse
    {
        // $userrecords = User::with("UserInfo")->find(auth()->user()->id);
        // $userrecords->name         = $request->post('name');
        // $userrecords->userInfo()->username     = $request->post('username');
        // $userrecords->userInfo()->user_phone   = $request->post('user_phone');
        // $userrecords->userInfo()->user_address = $request->post('user_address');
        // $userrecords->userInfo()->user_age     = $request->post('user_age');
        // $userrecords->userInfo()->user_city    = $request->post('user_city');
        // $userrecords->userInfo()->user_state   = $request->post('user_state');
        // $userrecords->userInfo()->user_country = $request->post('user_country');
        // $userrecords->userInfo()->update();

        $validate = array();
        $validate['name']         = 'required|unique:users,name,'.(auth()->user()->id); 
        $validate['username']     = 'required';
        $validate['user_phone']   = 'required';
        $validate['user_address'] = 'required';
        $validate['user_age']     = 'required';
        $validate['user_city']    = 'required';
        $validate['user_state']   = 'required';
        $validate['user_country'] = 'required';
        $validate['user_photo'] = 'required|image';
        $request->validate($validate);

        $userrecords = User::find(auth()->user()->id);
        $userrecords->name = $request->post('name');
        $userrecords->save();
        $userrecords->userInfo->username     = $request->post('username');
        $userrecords->userInfo->user_phone   = $request->post('user_phone');
        $userrecords->userInfo->user_address = $request->post('user_address');
        $userrecords->userInfo->user_age     = $request->post('user_age');
        $userrecords->userInfo->user_city    = $request->post('user_city');
        $userrecords->userInfo->user_state   = $request->post('user_state');
        $userrecords->userInfo->user_country = $request->post('user_country');

        
        $public_path = public_path('backend/AdminProfile/'.$userrecords->userInfo->user_photo);
        if(!empty($userrecords->userInfo->user_photo)){
            unlink($public_path);
        }
        $adminProfile = time().'.'.$request->user_photo->getClientOriginalExtension();
        $request->user_photo->move(public_path('backend/AdminProfile'),$adminProfile);
        $userrecords->userInfo->user_photo = $adminProfile;
        $data = $userrecords->userInfo->save();
        
        // $userInfo = new UserInfo();
        // $userInfo->username     = $request->post('username');
        // $userInfo->user_phone   = $request->post('user_phone');
        // $userInfo->user_address = $request->post('user_address');
        // $userInfo->user_age     = $request->post('user_age');
        // $userInfo->user_city    = $request->post('user_city');
        // $userInfo->user_state   = $request->post('user_state');
        // $userInfo->user_country = $request->post('user_country');
        // $data = $userrecords->userInfo()->save($userInfo);

        if(!empty($data))
        {
            return redirect()->route('admin.profile');
        }else
        {
            return redirect()->route('admin.profile')->with('msg', 'Please Check Your Credentials');
        }
    }
    public function updatePassword(Request $request):RedirectResponse
    {
        $validate = array();
        $validate['password']      = 'min:6'; 
        $validate['cpassword']     = 'required_with:password|same:password|min:6';
        $request->validate($validate);
        
        $userrecords = User::find(auth()->user()->id);
        $userrecords->password = $request->post('password');
        $data =$userrecords->save();
        if(!empty($data))
        {
            return redirect()->route('admin.profile');
        }else
        {
            return redirect()->route('admin.profile')->with('msg', 'Please Check Your Credentials');
        }
    }
    
}

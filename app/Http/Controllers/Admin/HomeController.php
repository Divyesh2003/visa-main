<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
class HomeController extends Controller
{

    public function profile(){
        $auth = Auth::guard('admin')->user();
        return view('admin.profile',['auth'=>$auth]);
    }

    public function profileUpdate(Request $request){
       $auth = Auth::guard('admin')->user();
       $admin = Admin::where('id', $auth->id)->first();
       $admin->name = $request->name;
       $admin->email = $request->email;
       $admin->password = encrypt($request->password);
       $admin->save();
       return view('admin.profile',['auth'=>$auth]);
    }
}
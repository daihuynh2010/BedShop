<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Hoa_Don;
use Session;
use Hash;

class UserController extends Controller
{
	public function getList(){
		$user=User::orderBy('id','asc')->get();
		return response(["user"=>$user]);
	}

	public function getListuser(){
		$userList=User::orderBy('id','asc')->get();
		return view('admin.home',compact('userList'));  
	}

   	public function getUser($iduser){
		$user=User::find($iduser);
		$bl_nx_yt=$user->SanPham;
		return response(["user"=>$user,"bl_nx_yt"=>$bl_nx_yt]);
   	}

	public function update(Request $request){
		// return($request->tich_diem);
		$user=User::find($request->iduser);
		$user->email=$request->email;
		$user->name=$request->name;
		$user->sdt=$request->sdt;
		$user->dd_giaohang_md=$request->dd_giaohang;
		if($request->tich_diem!=null)
			$user->tich_diem=intval($request->tich_diem );
		if($request->chuc_vu!=null)
			$user->chuc_vu=$request->chuc_vu;
		$user->save();
		// return($user);
	}

	public function change_pass(Request $request){
		if(Auth::Check())
		{
			$password=Auth::User()->password;
			if (Hash::check($request->pws_old, $password)) 
			{
				if($request->pws_new!=$request->confim_pws){
					return(1);
				}
				else{
					$user = User::find(Auth::User()->id);
					$user->password = Hash::make($request->pws_new);
					$user->save();
					return(3);
				}
			
			}
			else
			{
				return(0);
			}
		}
	}

	public function resetPass(Request $request){
		if($request->password!=$request->password_confirmation){
			return(0);
		}
		else{
			$user = User::where('email',$request->email)->first();
			if($user){
				$user->password = Hash::make($request->password);
				$user->save();
				return(1);
			}
			else
				return(2);
		}
	}

    public function register(Request $request)
    {
    	// $this->validate($request,array(
        //     'ddnhanhang' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'pws' => 'required|string|confirmed',
    	// 	));
		// return($request);
		$user_old = User::where('email',$request->email)->first();
		if(!$user_old){
			$user = new user;
			$user->email = $request->email;
			$user->password = bcrypt($request->pws);
			$user->name=$request->name;
			$user->sdt=$request->sdt;
			if($request->tich_diem!=null)
				$user->tich_diem=intval($request->tich_diem );
			else
				$user->tich_diem=0;
			if($request->chuc_vu!=null)
				$user->chuc_vu=$request->chuc_vu;
			else
				$user->chuc_vu=1;
			$user->dd_giaohang_md=$request->dd_giaohang_md;

			$user->save();
			return(1);
		}
		else
			return(0);
    }

	public function login(Request $request){
		if( Auth::attempt(['email' => $request->email, 'password' =>$request->pass])) {
			// $user=User::find(Auth()->id());
			$user = Auth::user();
			return response(["user"=>$user]);
		} 
		else
			return("-1");
	}

	public function logout(){
		Auth::logout();
	}

	public function deleteUser($iduser){
		$user=User::find($iduser);
		$user->SanPham()->detach();
		$user->delete();
	}
}

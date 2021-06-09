<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Socialite;
use Auth;
use Hash;
use Str;
use App\User;
use App\Mail\ResetPassword;
use App\Mail\Verify;
use App\Mail\LoginInformation;
use App\VerifyUser;
use Illuminate\Support\Carbon;

class LoginController extends Controller
{
     
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

        /**
         * Obtain the user information from GitHub.
         *
         * @return \Illuminate\Http\Response
         */
    public function callback_provider($social)
    {
        $user = Socialite::driver($social)->user();
        $first_name=explode(" ",$user->name,2)[0];
        $last_name=explode(" ",$user->name,2)[1];
        $user=User::firstOrCreate([
            'email'=>$user->email
        ],[
            'name'=>$user->name,
            'last_name'=>$last_name,
            'first_name'=>$first_name,
            'password'=>Hash::make(Str::random(24)),
            'avatar'=>$user->avatar,
            'provider'=>$social,
            'email_verified_at'=>Carbon::now(),
            'verified'=>1
        ]);
        Auth::login($user,true);
        return redirect("../dashboard");
    
            
    }
    public function create_client(Request $request){
        
        $this->validate($request,[
            "first_name"=>"required",
            "last_name"=>"required",
            "work_password"=>"required",
            "email"=>"required|email|unique:users",
        ]);
        $user=new User();
        $user->name=$request->first_name." ".$request->last_name;
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->company_name=$request->company_name;
        $user->work_client_id=$request->client_id;
        $user->work_user_id=$request->user_id;
        $user->work_password=$request->work_password;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->email=$request->email;
        $user->password=Hash::make($request->work_password);
        $user->save();
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);
        \Mail::to($user->email)->send(new Verify($user));
        return redirect()->intended('user-verification');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $credentials = $request->only('email', 'password','remember_token');
        dd($credentials);exit();
        if (Auth::attempt($credentials)) {
            // return Auth::user();
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => [
                    'password' => [
                        'Invalid credentials'
                    ],
                ]
            ], 422);
        }
        // return false;
        $user = User::where('email', $request->email)->first();
        $authToken = $user->createToken('auth-token')->plainTextToken;
        dd($authToken);
        return response()->json([
            'access_token' => $authToken,
        ]);
    }
    public function logout(){
        Auth::logout();
        return true;
    }
    public function register(Request $request){
        $this->validate($request,[
            "name"=>"required",
            "email"=>"required|email|unique:users",
            "password"=>"required|min:8|confirmed",
        ]);
        
        $user = new User();
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $user->first_name   = $request->first_name;
        $user->last_name    = $request->last_name;
        $user->telephone    = $request->telephone;
        $user->role_id      = 1;
        $user->pricing_id   = 1;
        $user->bank_id      = 1;
        $user->status       = 1;
        $user->updated_by   = 1;
        $user->save();
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);
        \Mail::to($user->email)->send(new Verify($user));
        return redirect()->intended('user-verification');
    }
    public function reset_password(Request $request){
        
        $data=User::where('id',$request->user_id)->update(
        [
            "password"=>Hash::make($request->password)
        ]
        );
    
        $verifyUser = VerifyUser::where('token',$request->token)->delete();
        return true;
    }
    public function forgot_password(Request $request){
        $user =User::where('email',$request->email)->first();
        if($user)
        {
            $verifyUser = VerifyUser::create([
                'user_id' => $user->id,
                'token' => sha1(time())
            ]);
            \Mail::to($request->email)->send(new ResetPassword($verifyUser));
            return true;
        }else{
            return false;
        }
    }
    public function verifyUser($token)
    {

        $verifyUser = VerifyUser::where('token', $token)->first();
        $status="";
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
            $verifyUser->user->verified = 1;
            $verifyUser->user->email_verified_at = Carbon::now();
            $verifyUser->user->save();
            
            $status = "Your e-mail is verified. You can now login.";
            if($verifyUser->user->work_password!=null){
                \Mail::to($user->email)->send(new LoginInformation($user));
            }
            
            } else {
            $status = "Your e-mail is already verified. You can now login.";
            }
        } else {
            $status="Sorry your email cannot be identified.";
        }
        return $status;
    }
    public function verifyToken($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if($verifyUser){
            return $verifyUser->user_id;
        }
        return false;
    }
}

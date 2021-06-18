<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule as ValidationRule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            if(isset($request->per_page)){
                $per_page=$request->per_page;
            }else{
                $per_page=15;
            }
            $user=DB::table('users as u')->join('banks as b','b.id','=','u.bank_id')->join('roles as r','r.id','=','u.role_id')->join('pricings as p','p.id','=','u.pricing_id')->select('u.id','u.first_name','u.last_name','u.email','u.telephone','u.password','p.name as price_name','b.bank_name','b.account_name','b.bank_account','r.name as role')->orderBy('u.id','DESC')->paginate($per_page);
            return response()->json(['success'=>$user]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            // dd($request->all());
            DB::beginTransaction();
            $validation=Validator($request->all(),[
                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required|email|unique:users',
                'telephone'=>'required',
                'password'=>'required',
                'role_id'=>'required|integer',
                'pricing_id'=>'required|integer',
                'bank_name'=>'required',
                'account_name'=>'required',
                'bank_account'=>'required',
            ]);
            if($validation->fails()){
                // dd(is_string($validation->getMessageBag()));
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            $bank=bank::create(
                [
                    'bank_name'=>$request->bank_name,
                    'account_name'=>$request->account_name,
                    'bank_account'=>$request->bank_account,
                    'updated_by'=>$data['updated_by']
                ]
            );
            $data['bank_id']=$bank['id'];
            $data['password']=Hash::make($request->password);
            $data['name']=$request->first_name.' '.$request->last_name;
            User::create($data);
            DB::commit();
            return response()->json(['success'=>'User is inserted !!']);
        }catch(Exception $e){
            DB::rollBack();
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $user=DB::table('users as u')->join('banks as b','b.id','=','u.bank_id')->join('roles as r','r.id','=','u.role_id')->join('pricings as p','p.id','=','u.pricing_id')->select('u.id','u.first_name','u.last_name','u.email','u.telephone','u.password','p.name as price_name','b.bank_name','b.account_name','b.bank_account','r.name as role')->orderBy('u.id','DESC')->where('u.id',$id)->first();
            return response()->json(['success'=>$user]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $user=DB::table('users as u')->join('banks as b','b.id','=','u.bank_id')->join('roles as r','r.id','=','u.role_id')->join('pricings as p','p.id','=','u.pricing_id')->select('u.id','u.first_name','u.last_name','u.email','u.telephone','u.password','u.profile','p.name as price_name','b.bank_name','b.account_name','b.bank_account','r.name as role')->orderBy('u.id','DESC')->where('u.id',$id)->first();
            return response()->json(['success'=>$user]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            DB::beginTransaction();
            // $validation=Validator($request->all(),[
            //     'first_name'=>'required',
            //     'last_name'=>'required',
            //     'email'=>['required','email',ValidationRule::unique('users')->ignore($id)],
            //     'telephone'=>'required',
            //     'password'=>'required',
            //     'role_id'=>'required|integer',
            //     'pricing_id'=>'required|integer',
            //     'bank_name'=>'required',
            //     'account_name'=>'required',
            //     'bank_account'=>'required',
            // ]);
            // if($validation->fails()){
            //     return response()->json(['validation'=>$validation->getMessageBag()]);
            // }
            $data=$request->all();
            $data['updated_by']=1;
            $update_data=User::where('id',$id)->first();
            $bank=bank::find($update_data->bank_id)->update(
                [
                    'bank_name'=>$request->bank_name,
                    'account_name'=>$request->account_name,
                    'bank_account'=>$request->bank_account,
                    'updated_by'=>$data['updated_by']
                ]
            );
            $data['bank_id']=$update_data->bank_id;
            $data['password']=Hash::make($request->password);
            $data['name']=$request->first_name.' '.$request->last_name;
            User::find($id)->update($data);
            DB::commit();
            return response()->json(['success'=>'User is Update !!']);
        }catch(Exception $e){
            DB::rollBack();
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $user=User::find($id)->first();
            bank::where('id',$user['bank_id'])->delete();
            User::find($id)->delete();
            return response()->json(['success'=>'User is deleted !!']);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\permision;
use App\Models\SeachTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            if(isset($request->role_id)){
                $role_id=$request->role_id;
            }else{
                $role_id=1;
            }
            $permission=DB::select("SELECT top.id,top.name,(select count(*) from permisions where permission_type_id=1 and role_id=$role_id and table_of_permission_id=top.id) as _view,(select count(*) from permisions where permission_type_id=2 and role_id=$role_id and table_of_permission_id=top.id) as _add,(select count(*) from permisions where permission_type_id=3 and role_id=$role_id and table_of_permission_id=top.id) as _update,(select count(*) from permisions where permission_type_id=4 and role_id=$role_id and table_of_permission_id=top.id) as _delete FROM table_of_permissions top");
            return response()->json(['success'=>$permission]);
        }catch(\Exception $e){
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
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
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
            $validation=\Validator($request->all(),[
                'role_id'=>'required|integer',
                'permission_type_id'=>'required|integer',
                'table_of_permission_id'=>'required|integer'
            ]);
            if($validation->fails()){
                return response()->json(['success'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(permision::create($data)){
                return response()->json(['success'=>'Permission is inserted !!']);
            }else{
                return response()->json(['success'=>'Permission is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permision  $permision
     * @return \Illuminate\Http\Response
     */
    public function show(permision $permision)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permision  $permision
     * @return \Illuminate\Http\Response
     */
    public function edit(permision $permision)
    {
        try{
            return response()->json(['success'=>$permision]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permision  $permision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permision $permision)
    {
        try{
            $validation=\Validator($request->all(),[
                'role_id'=>'required|integer',
                'permission_type_id'=>'required|integer'
            ]);
            if($validation->fails()){
                return response()->json(['success'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(permision::where('id',$permision['id'])->update($data)){
                return response()->json(['success'=>'Permission is updated !!']);
            }else{
                return response()->json(['success'=>'Permission is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permision  $permision
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            if(permision::whereIn('id',explode('-',$id))->delete()){
                return response()->json(['success'=>'Permision is deleted !!']);
            }else{
                return response()->json(['success'=>'Permision is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

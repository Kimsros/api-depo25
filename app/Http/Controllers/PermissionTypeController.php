<?php

namespace App\Http\Controllers;

use App\Models\permission_type;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class PermissionTypeController extends Controller
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
            if(isset($request->search)){
                return response()->json(['success'=>SeachTable::getSearch('permission_type',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>permission_type::orderBy('id','DESC')->paginate($per_page)]);
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
                'name'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(permission_type::create($data)){
                return response()->json(['success'=>'Permission type is updated !!']);
            }else{
                return response()->json(['error'=>'Permission type is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permission_type  $permission_type
     * @return \Illuminate\Http\Response
     */
    public function show(permission_type $permission_type)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permission_type  $permission_type
     * @return \Illuminate\Http\Response
     */
    public function edit(permission_type $permission_type)
    {
        try{
            return response()->json(['success'=>$permission_type]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permission_type  $permission_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permission_type $permission_type)
    {
        try{
            $validation=\Validator($request->all(),[
                'name'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(permission_type::where('id',$permission_type['id'])->update($data)){
                return response()->json(['success'=>'Permission type is inserted !!']);
            }else{
                return response()->json(['error'=>'Permission is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permission_type  $permission_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,permission_type $permission_type)
    {
        try{
            if(is_array($request->id)){
                if(permission_type::whereIn('id',$request->id)->delete()){
                    return response()->json(['success'=>'Permision type is deleted !!']);
                }else{
                    return response()->json(['error'=>'Permision type is not deleted !!']);
                }
            }else{
                if(permission_type::where('id',$permission_type['id'])->delete()){
                    return response()->json(['success'=>'Permision type is deleted !!']);
                }else{
                    return response()->json(['error'=>'Permision type is not deleted !!']);
                }
            }

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

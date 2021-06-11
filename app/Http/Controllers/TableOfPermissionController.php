<?php

namespace App\Http\Controllers;

use App\Models\table_of_permission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TableOfPermissionController extends Controller
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
            return response()->json(['success'=>table_of_permission::orderBy('id','DESC')->paginate($per_page)]);
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
            if(table_of_permission::create($data)){
                return response()->json(['success'=>'Table of permission is inserted !!']);
            }else{
                return response()->json(['success'=>'Table of permission is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\table_of_permission  $table_of_permission
     * @return \Illuminate\Http\Response
     */
    public function show(table_of_permission $table_of_permission)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\table_of_permission  $table_of_permission
     * @return \Illuminate\Http\Response
     */
    public function edit(table_of_permission $table_of_permission)
    {
        try{
            return response()->json(['success'=>$table_of_permission]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\table_of_permission  $table_of_permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, table_of_permission $table_of_permission)
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
            if(table_of_permission::where('id',$table_of_permission['id'])->update($data)){
                return response()->json(['success'=>'Table of permission is updated !!']);
            }else{
                return response()->json(['success'=>'Table of permission is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\table_of_permission  $table_of_permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(table_of_permission $table_of_permission)
    {
        try{
            if(table_of_permission::where('id',$table_of_permission['id'])->delete()){
                return response()->json(['success'=>'Table of permission is deleted !!']);
            }else{
                return response()->json(['success'=>'Table of permission is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

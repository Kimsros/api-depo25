<?php

namespace App\Http\Controllers;

use App\Models\SeachTable;
use App\Models\tbl_action;
use Illuminate\Http\Request;

class TblActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index(Request $request)
    {
        try{
            if(isset($request->search)){
                return response()->json(['success'=>SeachTable::getSearch('tbl_actions',$request->search,array(),15)]);
            }
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
                'table_name'=>'required',
                'permission_type_id'=>'required|integer',
                'old_value'=>'required',
                'new_value'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['old_value']=json_encode($request->old_value);
            $data['new_value']=json_encode($request->new_value);
            tbl_action::create($data);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_action  $tbl_action
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_action $tbl_action)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_action  $tbl_action
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_action $tbl_action)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_action  $tbl_action
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_action $tbl_action)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_action  $tbl_action
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_action $tbl_action)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

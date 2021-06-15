<?php

namespace App\Http\Controllers;

use App\Models\SeachTable;
use App\Models\shop;
use Illuminate\Http\Request;

class ShopController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('shops',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>shop::orderBy('id','DESC')->paginate($per_page)]);
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
                'user_id'=>'required|integer',
                'logo_company'=>'required',
                'description'=>'required',
                'home_no'=>'required',
                'street_no'=>'required',
                'village'=>'required',
                'district'=>'required',
                'commune'=>'required',
                'province'=>'required',
                'phone_one'=>'required',
                'phone_two'=>'required',
                'email'=>'required',
                'facebook'=>'required',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(shop::create($data)){
                return response()->json(['success'=>'Shop is inserted !!']);
            }else{
                return response()->json(['success'=>'Shop is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(shop $shop)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(shop $shop)
    {
        try{
            return response()->json(['success'=>$shop]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shop $shop)
    {
        try{
            $validation=\Validator($request->all(),[
                'user_id'=>'required|integer',
                'logo_company'=>'required',
                'description'=>'required',
                'home_no'=>'required',
                'street_no'=>'required',
                'village'=>'required',
                'district'=>'required',
                'commune'=>'required',
                'province'=>'required',
                'phone_one'=>'required',
                'phone_two'=>'required',
                'email'=>'required',
                'facebook'=>'required',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(shop::where('id',$shop['id'])->update($data)){
                return response()->json(['success'=>'Shop is updated !!']);
            }else{
                return response()->json(['success'=>'Shop is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            if(shop::whereIn('id',explode('-',$id))->delete()){
                return response()->json(['success'=>'Shop is deleted !!']);
            }else{
                return response()->json(['error'=>'Shop is not deleted !!']);
            }

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

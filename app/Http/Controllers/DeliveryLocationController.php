<?php

namespace App\Http\Controllers;

use App\Models\delivery_location;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class DeliveryLocationController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('delivery_locations',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>delivery_location::orderBy('id','DESC')->paginate($per_page)]);
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
            if(delivery_location::create($data)){
                return response()->json(['success'=>'Delivery location is inserted !!']);
            }else{
                return response()->json(['success'=>'Delivery location is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\delivery_location  $delivery_location
     * @return \Illuminate\Http\Response
     */
    public function show(delivery_location $delivery_location)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delivery_location  $delivery_location
     * @return \Illuminate\Http\Response
     */
    public function edit(delivery_location $delivery_location)
    {
        try{
            return response()->json(['success'=>$delivery_location]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delivery_location  $delivery_location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, delivery_location $delivery_location)
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
            if(delivery_location::where('id',$delivery_location['id'])->update($data)){
                return response()->json(['success'=>'Delivery location is updated !!']);
            }else{
                return response()->json(['success'=>'Delivery location is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delivery_location  $delivery_location
     * @return \Illuminate\Http\Response
     */
    public function destroy(delivery_location $delivery_location)
    {
        try{
            if(delivery_location::where('id',$delivery_location['id'])->delete()){
                return response()->json(['success'=>'Delivery location is deleted !!']);
            }else{
                return response()->json(['error'=>'Delivery location is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

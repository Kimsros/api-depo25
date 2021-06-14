<?php

namespace App\Http\Controllers;

use App\Models\delivery;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class DeliveryController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('deliveries',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>delivery::orderBy('id','DESC')->paginate($per_page)]);
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
                'delivery_location_id'=>'required|integer',
                'shop_id'=>'required|integer',
                'price'=>'required|integer',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(delivery::create($data)){
                return response()->json(['success'=>'Delivery is inserted !!']);
            }else{
                return response()->json(['error'=>'Delivery is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(delivery $delivery)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(delivery $delivery)
    {
        try{
            return response()->json(['success'=>$delivery]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, delivery $delivery)
    {
        try{
            $validation=\Validator($request->all(),[
                'delivery_location_id'=>'required|integer',
                'shop_id'=>'required|integer',
                'price'=>'required|integer',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(delivery::where('id',$delivery['id'])->update($data)){
                return response()->json(['success'=>'Delivery is updated !!']);
            }else{
                return response()->json(['error'=>'Delivery is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,delivery $delivery)
    {
        try{
            if(is_array($request->id)){
                if(delivery::whereIn('id',$request->id)->delete()){
                    return response()->json(['success'=>'Delivery is deleted !!']);
                }else{
                    return response()->json(['error'=>'Delivery is not deleted !!']);
                }
            }else{
                if(delivery::where('id',$delivery['id'])->delete()){
                    return response()->json(['success'=>'Delivery is deleted !!']);
                }else{
                    return response()->json(['error'=>'Delivery is not deleted !!']);
                }
            }

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

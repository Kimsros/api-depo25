<?php

namespace App\Http\Controllers;

use App\Models\pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
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
            return response()->json(['success'=>pricing::where('status',1)->paginate($per_page)]);
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
            $validation=\Validator($request->all(),[
                'name'=>'required',
                'pay_status'=>'required|integer',
                'price_in_month'=>'required|numeric',
                'price_in_year'=>'required|numeric',
                'boost_product'=>'required|integer',
                'boost_duration'=>'required|integer',
                'upload_product'=>'required|integer',
                'upload_product_duration'=>'required|integer',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(pricing::create($data)){
                return response()->json(['success'=>'Pricing is inserted !!']);
            }else{
                return response()->json(['error'=>'Pricing is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(pricing $pricing)
    {
        try{
            return response()->json(['success'=>$pricing]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pricing $pricing)
    {
        try{
            $validation=\Validator($request->all(),[
                'name'=>'required',
                'pay_status'=>'required|integer',
                'price_in_month'=>'required|numeric',
                'price_in_year'=>'required|numeric',
                'boost_product'=>'required|integer',
                'boost_duration'=>'required|integer',
                'upload_product'=>'required|integer',
                'upload_product_duration'=>'required|integer',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(pricing::where('id',$pricing['id'])->update($data)){
                return response()->json(['success'=>'Pricing is updated !!']);
            }else{
                return response()->json(['error'=>'Pricing is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(pricing $pricing)
    {
        try{
            if(pricing::where('id',$pricing['id'])->delete()){
                return response()->json(['success'=>'Pricing is deleted !!']);
            }else{
                return response()->json(['error'=>'Pricing is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

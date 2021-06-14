<?php

namespace App\Http\Controllers;

use App\Models\product_variation_condition;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class ProductVariationConditionController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('product_variation_conditions',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>product_variation_condition::orderBy('id','DESC')->paginate($per_page)]);
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
                'product_variation_id'=>'required|integer',
                'qty_from'=>'required|integer',
                'qty_to'=>'required|integer',
                'rice_in_unit'=>'required|numeric',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product_variation_condition::create($data)){
                return response()->json(['success'=>'Product variation condition is inserted !!']);
            }else{
                return response()->json(['success'=>'Product variation condition is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_variation_condition  $product_variation_condition
     * @return \Illuminate\Http\Response
     */
    public function show(product_variation_condition $product_variation_condition)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_variation_condition  $product_variation_condition
     * @return \Illuminate\Http\Response
     */
    public function edit(product_variation_condition $product_variation_condition)
    {
        try{
            return response()->json(['success'=>$product_variation_condition]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product_variation_condition  $product_variation_condition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_variation_condition $product_variation_condition)
    {
        try{
            $validation=\Validator($request->all(),[
                'product_variation_id'=>'required|integer',
                'qty_from'=>'required|integer',
                'qty_to'=>'required|integer',
                'rice_in_unit'=>'required|numeric',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product_variation_condition::where('id',$product_variation_condition['id'])->update($data)){
                return response()->json(['success'=>'Product variation condition is updated !!']);
            }else{
                return response()->json(['success'=>'Product variation condition is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_variation_condition  $product_variation_condition
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_variation_condition $product_variation_condition)
    {
        try{
            if(product_variation_condition::where('id',$product_variation_condition['id'])->delete()){
                return response()->json(['success'=>'Product variation codition is deleted !!']);
            }else{
                return response()->json(['success'=>'Product variation codition is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

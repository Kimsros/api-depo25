<?php

namespace App\Http\Controllers;

use App\Models\product_variation;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class ProductVariationController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('product_variations',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>product_variation::orderBy('id','DESC')->paginate($per_page)]);
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
                'product_id'=>'resuired|integer',
                'color_id'=>'resuired|integer',
                'size'=>'required|numeric',
                'qty'=>'required|integer'
            ]);
            if($validation->fails()){
                return response()->json(['success'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product_variation::creata($data)){
                return response()->json(['success'=>'Product variation is inserted !!']);
            }else{
                return response()->json(['success'=>'Product variation is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_variation  $product_variation
     * @return \Illuminate\Http\Response
     */
    public function show(product_variation $product_variation)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_variation  $product_variation
     * @return \Illuminate\Http\Response
     */
    public function edit(product_variation $product_variation)
    {
        try{
            return response()->json(['success'=>$product_variation]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product_variation  $product_variation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_variation $product_variation)
    {
        try{
            $validation=\Validator($request->all(),[
                'product_id'=>'resuired|integer',
                'color_id'=>'resuired|integer',
                'size'=>'required|numeric',
                'qty'=>'required|integer'
            ]);
            if($validation->fails()){
                return response()->json(['success'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product_variation::where('id',$product_variation['id'])->update($data)){
                return response()->json(['success'=>'Product variation is updated !!']);
            }else{
                return response()->json(['success'=>'Product variation is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_variation  $product_variation
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_variation $product_variation)
    {
        try{
            if(product_variation::where('id',$product_variation['id'])->delete()){
                return response()->json(['success'=>'Product Variation is deleted !!']);
            }else{
                return response()->json(['success'=>'Product Variation is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

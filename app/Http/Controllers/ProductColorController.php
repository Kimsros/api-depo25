<?php

namespace App\Http\Controllers;

use App\Models\product_color;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class ProductColorController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('product_colors',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>product_color::orderBy('id','DESC')->paginate($per_page)]);
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
                'name'=>'required',
                'color_code'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product_color::create($data)){
                return response()->json(['success'=>'Product color is inserted !!']);
            }else{
                return response()->json(['success'=>'Product color is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_color  $product_color
     * @return \Illuminate\Http\Response
     */
    public function show(product_color $product_color)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_color  $product_color
     * @return \Illuminate\Http\Response
     */
    public function edit(product_color $product_color)
    {
        try{
            return response()->json(['success'=>$product_color]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product_color  $product_color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_color $product_color)
    {
        try{
            $validation=\Validator($request->all(),[
                'name'=>'required',
                'color_code'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product_color::where('id',$product_color['id'])->update($data)){
                return response()->json(['success'=>'Product color is updated !!']);
            }else{
                return response()->json(['success'=>'Product color is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_color  $product_color
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_color $product_color)
    {
        try{
            if(product_color::where('id',$product_color['id'])->delete()){
                return response()->json(['success'=>'Product color is deleted !!']);
            }else{
                return response()->json(['success'=>'Product color is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

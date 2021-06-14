<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class ProductController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('products',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>product::orderBy('id','DESC')->paginate($per_page)]);
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
                'shop_id'=>'required|integer',
                'product_brand_id'=>'required|integer',
                'category_id'=>'required|integer',
                'product_video_id'=>'requied|integer',
                'unit_id'=>'required|integer',
                'low_stock_qty_warning'=>'required|integer'
            ]);
            if($validation->fails()){
                return response()->json(['success'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product::create($data)){
                return response()->json(['success'=>'Product is inserted !!']);
            }else{
                return response()->json(['error'=>'Product is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        try{
            return response()->json(['success'=>$product]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        try{
            $validation=\Validator($request->all(),[
                'name'=>'required',
                'shop_id'=>'required|integer',
                'product_brand_id'=>'required|integer',
                'category_id'=>'required|integer',
                'product_video_id'=>'requied|integer',
                'unit_id'=>'required|integer',
                'low_stock_qty_warning'=>'required|integer'
            ]);
            if($validation->fails()){
                return response()->json(['success'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product::where('id',$product['id'])->update($data)){
                return response()->json(['success'=>'Product is updated !!']);
            }else{
                return response()->json(['error'=>'Product is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,product $product)
    {
        try{
            if(is_array($request->id)){
                if(product::whereIn('id',$request->id)->delete()){
                    return response()->json(['success'=>'Product is deleted !!']);
                }else{
                    return response()->json(['error'=>'Product is not deleted !!']);
                }
            }else{
                if(product::where('id',$product['id'])->delete()){
                    return response()->json(['success'=>'Product is deleted !!']);
                }else{
                    return response()->json(['error'=>'Product is not deleted !!']);
                }
            }

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\product_video;
use Illuminate\Http\Request;

class ProductVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            return response()->json(['success'=>product_video::all()]);
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
                'product_video_type'=>'required',
                'url'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product_video::create($data)){
                return response()->json(['success'=>'Product video is inserted !!']);
            }else{
                return response()->json(['success'=>'Product video is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_video  $product_video
     * @return \Illuminate\Http\Response
     */
    public function show(product_video $product_video)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_video  $product_video
     * @return \Illuminate\Http\Response
     */
    public function edit(product_video $product_video)
    {
        try{
            return response()->json(['success'=>$product_video]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product_video  $product_video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_video $product_video)
    {
        try{
            $validation=\Validator($request->all(),[
                'product_video_type'=>'required',
                'url'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(product_video::where('id',$product_video['id'])->update($data)){
                return response()->json(['success'=>'Product video is updated !!']);
            }else{
                return response()->json(['success'=>'Product video is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_video  $product_video
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_video $product_video)
    {
        try{
            if(product_video::where('id',$product_video['id'])->delete()){
                return response()->json(['success'=>'Product video is deleted !!']);
            }else{
                return response()->json(['success'=>'Product video is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

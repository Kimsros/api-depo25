<?php

namespace App\Http\Controllers;

use App\Models\product_video_type;
use Illuminate\Http\Request;

class ProductVideoTypeController extends Controller
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
            return response()->json(['success'=>product_video_type::orderBy('id','DESC')->paginate($per_page)]);
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
            if(product_video_type::create($data)){
                return response()->json(['success'=>'Product video type is inserted !!']);
            }else{
                return response()->json(['success'=>'Product video type is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_video_type  $product_video_type
     * @return \Illuminate\Http\Response
     */
    public function show(product_video_type $product_video_type)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_video_type  $product_video_type
     * @return \Illuminate\Http\Response
     */
    public function edit(product_video_type $product_video_type)
    {
        try{
            return response()->json(['success'=>$product_video_type]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product_video_type  $product_video_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_video_type $product_video_type)
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
            if(product_video_type::where('id',$product_video_type['id'])->update($data)){
                return response()->json(['success'=>'Product video type is updated !!']);
            }else{
                return response()->json(['success'=>'Product video type is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_video_type  $product_video_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_video_type $product_video_type)
    {
        try{
            if(product_video_type::where('id',$product_video_type['id'])->delete()){
                return response()->json(['success'=>'Product video type is deleted !!']);
            }else{
                return response()->json(['success'=>'Product video type is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

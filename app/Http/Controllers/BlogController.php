<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\SeachTable;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('banks',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>blog::orderBy('id','DESC')->paginate($per_page)]);
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
            $validation=Validator($request->all(),[
                'title'=>'required',
                'content'=>'required',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['slug']=Str::slug($request->title,'-');
            $data['updated_by']=1;
            if(blog::create($data)){
                return response()->json(['success'=>'Blog is inserted !!']);
            }else{
                return response()->json(['error'=>'Blog is not inserted !!']);
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
    public function show(blog $blog)
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
    public function edit(blog $blog)
    {
        try{
            return response()->json(['success'=>$blog]);
        }catch(Exception $e){
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
    public function update(Request $request, blog $blog)
    {
        try{
            $validation=Validator($request->all(),[
                'title'=>'required',
                'content'=>'required',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['slug']=Str::slug($request->title,'-');
            $data['updated_by']=1;
            if(blog::where('id',$blog['id'])->update($data)){
                return response()->json(['success'=>'Blog is updated !!']);
            }else{
                return response()->json(['error'=>'Blog is not updated !!']);
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
    public function destroy(Request $request,blog $blog)
    {
        try{
            if(is_array($request->id)){
                if(blog::whereIn('id',$request->id)->delete()){
                    return response()->json(['success'=>'Blog is deleted !!']);
                }else{
                    return response()->json(['error'=>'Blog is not deleted !!']);
                }
            }else{
                if(blog::where('id',$blog['id'])->delete()){
                    return response()->json(['success'=>'Blog is deleted !!']);
                }else{
                    return response()->json(['error'=>'Blog is not deleted !!']);
                }
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

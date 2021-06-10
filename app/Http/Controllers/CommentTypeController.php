<?php

namespace App\Http\Controllers;

use App\Models\comment_type;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;

class CommentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            return response()->json(['success'=>comment_type::where('status',1)->get()]);
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
            if(comment_type::create($data)){
                return response()->json(['success'=>'Comment Type is inserted !!']);
            }else{
                return response()->json(['error'=>'Comment Type is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment_type  $comment_type
     * @return \Illuminate\Http\Response
     */
    public function show(comment_type $comment_type)
    {
        try{
            return response()->json(['success'=>$comment_type]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment_type  $comment_type
     * @return \Illuminate\Http\Response
     */
    public function edit(comment_type $comment_type)
    {
        try{
            return response()->json(['success'=>$comment_type]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment_type  $comment_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment_type $comment_type)
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
            if(comment_type::where('id',$comment_type['id'])->update($data)){
                return response()->json(['success'=>'Comment Type is updated']);
            }else{
                return response()->json(['error'=>'Comment Tyupe is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment_type  $comment_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment_type $comment_type)
    {
        try{
            if(comment_type::where('id',$comment_type['id'])->delete()){
                return response()->json(['success'=>'Comment Type is deleted !!']);
            }else{
                return response()->json(['error'=>'Comment Type is not deleted']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

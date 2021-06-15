<?php

namespace App\Http\Controllers;

use App\Models\blog_comment;
use App\Models\SeachTable;
use Exception;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('blog_comments',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>blog_comment::orderBy('id','DESC')->paginate($per_page)]);
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
            $validation=Validator($request->all(),[
                'blog_id'=>'required|integer',
                'comment'=>'required',
                'comment_type_id'=>'required|integer',
                'comment_id'=>'required|integer',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(blog_comment::create($data)){
                return response()->json(['success'=>'Bank is inserted !!']);
            }else{
                return response()->json(['error'=>'Bank is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog_comment  $blog_comment
     * @return \Illuminate\Http\Response
     */
    public function show(blog_comment $blog_comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog_comment  $blog_comment
     * @return \Illuminate\Http\Response
     */
    public function edit(blog_comment $blog_comment)
    {
        try{
            return response()->json(['success'=>$blog_comment]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog_comment  $blog_comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog_comment $blog_comment)
    {
        try{
            $validation=Validator($request->all(),[
                'blog_id'=>'required|integer',
                'comment'=>'required',
                'comment_type_id'=>'required|integer',
                'comment_id'=>'required|integer',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(blog_comment::where('id',$blog_comment['id'])->update($data)){
                return response()->json(['success'=>'Bank is updated !!']);
            }else{
                return response()->json(['error'=>'Bank is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog_comment  $blog_comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            if(blog_comment::whereIn('id',explode('-',$id))->delete()){
                return response()->json(['success'=>'Bank is deleted !!']);
            }else{
                return response()->json(['error'=>'Bank is not deleted !!']);
            }

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

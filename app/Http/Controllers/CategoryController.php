<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\SeachTable;
// use Dotenv\Validator;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            if(isset($request->per_page)){
                $per_page=$request->per_page;
            }else{
                $per_page=15;
            }
            if(isset($request->search)){
                return response()->json(['success'=>SeachTable::getSearch('categories',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>category::where('status',1)->orderBy('id','DESC')->paginate($per_page)]);
        } catch (\Exception $e) {
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
        try {
            $validation=\Validator::make($request->all(), [
                'name'=>'required',
                'icon'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->messages()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(category::create($data)){
                return response()->json(['success'=>'Category is inserted !!']);
            }else{
                return response()->json(['error'=>'Category is not inserted !!']);
            }
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        try {
            return response()->json(['success'=>$category]);
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        try {
            $validation=\Validator::make($request->all(), [
                'name'=>'required',
                'icon'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['erroe'=>$validation->messages()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(category::where('id',$category['id'])->update($data)){
                return response()->json(['success'=>'Category is updated !!']);
            }else{
                return response()->json(['error'=>'Category is not updated !!']);
            }
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,category $category)
    {
        try {
            if(is_array($request->id)){
                if(category::whereIn('id',$request->id)->delete()){
                    return response()->json(['success'=>'Category is deleted !!']);
                }else{
                    return response()->json(['error'=>'Category is not deleted !!']);
                }
            }else{
                if(category::where('id',$category['id'])->delete()){
                    return response()->json(['success'=>'Category is deleted !!']);
                }else{
                    return response()->json(['error'=>'Category is not deleted !!']);
                }
            }

        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()]);
        }

    }
}

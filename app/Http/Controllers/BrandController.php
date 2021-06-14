<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\SeachTable;
use Illuminate\Http\Request;
// use Psr\Http\Message\ResponseInterface;

class BrandController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('brands',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>brand::orderBy('id','DESC')->paginate($per_page)]);
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
            $validation=\Validator::make($request->all(), [
                'name'=>'required',
                'logo'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->messages()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(brand::create($data)){
                return response()->json(['success'=>'Brand is inserted !!']);
            }else{
                return response()->json(['error'=>'Brand is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        try{
            return response()->json(['success'=>$brand]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, brand $brand)
    {
        try{
            $validation=\Validator::make($request->all(), [
                'name'=>'required',
                'logo'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->messages()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(brand::where('id',$brand['id'])->update($data)){
                return response()->json(['success'=>'Brand is updated !!']);
            }else{
                return response()->json(['error'=>'Brand is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,brand $brand)
    {
        try{
            if(is_array($request->id)){
                if(brand::whereIn('id',$request->id)->delete()){
                    return response()->json(['success'=>'Brand is deleted !!']);
                }else{
                    return response()->json(['error'=>'Brand is not deleted !!']);
                }
            }else{
                if(brand::where('id',$brand['id'])->delete()){
                    return response()->json(['success'=>'Brand is deleted !!']);
                }else{
                    return response()->json(['error'=>'Brand is not deleted !!']);
                }
            }

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

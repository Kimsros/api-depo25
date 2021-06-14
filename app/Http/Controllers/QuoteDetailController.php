<?php

namespace App\Http\Controllers;

use App\Models\quote_detail;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class QuoteDetailController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('quote_details',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>quote_detail::orderBy('id','DESC')->$per_page]);
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
                'cart_id'=>'required|integer',
                'quote_id'=>'required|integer',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(quote_detail::create($data)){
                return response()->json(['success'=>'Quote detail is inserted !!']);
            }else{
                return response()->json(['success'=>'Quote detail is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\quote_detail  $quote_detail
     * @return \Illuminate\Http\Response
     */
    public function show(quote_detail $quote_detail)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\quote_detail  $quote_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(quote_detail $quote_detail)
    {
        try{
            return response()->json(['success'=>$quote_detail]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\quote_detail  $quote_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quote_detail $quote_detail)
    {
        try{
            $validation=\Validator($request->all(),[
                'cart_id'=>'required|integer',
                'quote_id'=>'required|integer',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(quote_detail::where('id',$quote_detail['id'])->update($data)){
                return response()->json(['success'=>'Quote detail is updated !!']);
            }else{
                return response()->json(['success'=>'Quote detail is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\quote_detail  $quote_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,quote_detail $quote_detail)
    {
        try{
            if(is_array($request->id)){
                if(quote_detail::whereIn('id',$request->id)->delete()){
                    return response()->json(['success'=>'Quote detail is deleted !!']);
                }else{
                    return response()->json(['error'=>'Quote detail is not deleted !!']);
                }
            }else{
                if(quote_detail::where('id',$quote_detail['id'])->delete()){
                    return response()->json(['success'=>'Quote detail is deleted !!']);
                }else{
                    return response()->json(['error'=>'Quote detail is not deleted !!']);
                }
            }

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

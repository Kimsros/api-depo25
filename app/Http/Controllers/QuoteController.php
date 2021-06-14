<?php

namespace App\Http\Controllers;

use App\Models\quote;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class QuoteController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('quotes',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>quote::orderBy('id','DESC')->paginate($per_page)]);
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
            $data['updated_by']=1;
            if(quote::create($data)){
                return response()->json(['success'=>'Quote is inserted !!']);
            }else{
                return response()->json(['error'=>'Quote is not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(quote $quote)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(quote $quote)
    {
        try{
            return response()->json(['success'=>$quote]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quote $quote)
    {
        try{
            $data['updated_by']=1;
            if(quote::where('id',$quote['id'])->update($data)){
                return response()->json(['success'=>'Quote is updated !!']);
            }else{
                return response()->json(['error'=>'Quote is not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(quote $quote)
    {
        try{
            if(quote::where('id',$quote['id'])){
                return response()->json(['success'=>'Quote is deleted !!']);
            }else{
                return response()->json(['error'=>'Quote is not deleted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

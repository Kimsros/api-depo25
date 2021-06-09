<?php

namespace App\Http\Controllers;

use App\Models\delivery_location;
use Illuminate\Http\Request;

class DeliveryLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

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

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\delivery_location  $delivery_location
     * @return \Illuminate\Http\Response
     */
    public function show(delivery_location $delivery_location)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delivery_location  $delivery_location
     * @return \Illuminate\Http\Response
     */
    public function edit(delivery_location $delivery_location)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delivery_location  $delivery_location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, delivery_location $delivery_location)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delivery_location  $delivery_location
     * @return \Illuminate\Http\Response
     */
    public function destroy(delivery_location $delivery_location)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

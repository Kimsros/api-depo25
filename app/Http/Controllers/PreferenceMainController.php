<?php

namespace App\Http\Controllers;
use App\Models\preference_main;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreferenceMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            return response()->json(['success'=>preference_main::orderBy('id','DESC')->get()]);
        }catch(Exception $e){
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
                'name'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(preference_main::create($data)){
                return response()->json(['success'=>'Preference main is inserted !!']);
            }else{
                return response()->json(['success'=>'Preference main is not inserted !!']);
            }
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\preference_main  $preference_main
     * @return \Illuminate\Http\Response
     */
    public function show(preference_main $preference_main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\preference_main  $preference_main
     * @return \Illuminate\Http\Response
     */
    public function edit(preference_main $preference_main)
    {
        try{
            return response()->json(['success'=>$preference_main]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\preference_main  $preference_main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, preference_main $preference_main)
    {
        try{
            $validation=Validator($request->all(),[
                'name'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(preference_main::find($preference_main['id'])->update($data)){
                return response()->json(['success'=>'Preference main is updated !!']);
            }else{
                return response()->json(['success'=>'Preference main is not updated !!']);
            }
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\preference_main  $preference_main
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            if(preference_main::whereIn('id',explode('-',$id))){
                return response()->json(['success'=>'Preference main is deleted !!']);
            }else{
                return response()->json(['error'=>'Preference main not deleted !!']);
            }
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

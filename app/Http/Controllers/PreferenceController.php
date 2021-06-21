<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            if(isset($request->preference_main_id)){
                $preference_main_id=$request->preference_main_id;
            }else{
                $preference_main_id=1;
            }
            return response()->json(['success'=>Preference::where('preference_main_id',$preference_main_id)->get()]);
        }catch(Exception $e){
            return response()->json(['success'=>$e->getMessage()]);
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
                'key'=>'required',
                'value'=>'required',
                'preference_main_id'=>'required|integer'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(Preference::create($data)){
                return response()->json(['success'=>'Preference is insert !!']);
            }else{
                return response()->json(['error'=>'Preference is not inserted !!']);
            }
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function show(Preference $preference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function edit(Preference $preference)
    {
        try{
            return response()->json(['success'=>$preference]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preference $preference)
    {
        try{
            DB::beginTransaction();
            foreach($request->all() as $key=>$item){
                Preference::find($item->id)->update(['value'=>$item->value]);
            }
            DB::commit();
            return response()->json(['success'=>'Preference is updated !!']);
        }catch(Exception $e){
            DB::rollBack();
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preference $preference)
    {
        try{
            if(Preference::find($preference['id'])->delete()){
                return response()->json(['success'=>'Preference is deleted !!']);
            }else{
                return response()->json(['error'=>'Preference is not deleted !!']);
            }
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

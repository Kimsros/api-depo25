<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class BankController extends Controller
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
            return response()->json(['success'=>bank::orderBy('id','DESC')->paginate($per_page)]);
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
        echo "create";
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
                'account_name'=>'required',
                'bank_name'=>'required',
                'bank_account'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(bank::create($data)){
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
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(bank $bank)
    {
        try{
            return response()->json(['success'=>$bank]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bank $bank)
    {
        try{
            $validation=Validator($request->all(),[
                'account_name'=>'required',
                'bank_name'=>'required',
                'bank_account'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(bank::where('id',$bank['id'])->update($data)){
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
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            if(bank::whereIn('id',explode('-',$id))->delete()){
                return response()->json(['success'=>'Bank is deleted !!']);
            }else{
                return response()->json(['error'=>'Bank is not deleted !!']);
            }

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

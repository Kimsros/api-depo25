<?php

namespace App\Http\Controllers;

use App\Models\invoice_detail;
use App\Models\SeachTable;
use Illuminate\Http\Request;

class InvoiceDetailController extends Controller
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
                return response()->json(['success'=>SeachTable::getSearch('invoice_details',$request->search,array(),$per_page)]);
            }
            return response()->json(['success'=>invoice_detail::orderBy('id','DESC')->paginate($per_page)]);
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
                'invoice_id'=>'required|integer',
                'product_id'=>'required|integer',
                'product_name'=>'required',
                'product_color_id'=>'required|integer',
                'qty'=>'required|numeric',
                'price'=>'required|numeric'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(invoice_detail::create($data)){
                return response()->json(['success'=>'Invoice detail is inserted !!']);
            }else{
                return response()->json(['error'=>'Invoice detail isn not inserted !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function show(invoice_detail $invoice_detail)
    {
        try{

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(invoice_detail $invoice_detail)
    {
        try{
            return response()->json(['success'=>$invoice_detail]);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoice_detail $invoice_detail)
    {
        try{
            $validation=\Validator($request->all(),[
                'invoice_id'=>'required|integer',
                'product_id'=>'required|integer',
                'product_name'=>'required',
                'product_color_id'=>'required|integer',
                'qty'=>'required|numeric',
                'price'=>'required|numeric'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['updated_by']=1;
            if(invoice_detail::where('id',$invoice_detail['id'])->update($data)){
                return response()->json(['success'=>'Invoice detail is updated !!']);
            }else{
                return response()->json(['error'=>'Invoice detail isn not updated !!']);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            if(invoice_detail::whereIn('id',explode('-',$id))->delete()){
                return response()->json(['success'=>'Invoice detail is deleted !!']);
            }else{
                return response()->json(['error'=>'Invoice detail is not deleted !!']);
            }

        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}

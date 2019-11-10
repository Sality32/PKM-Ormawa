<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use App\proposal;
use App\proposalDetail;
use App\ormawa;

class bem extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = proposal::where('status_proposal','<',3)->orderBy('updated_at','desc')->get();
        return view('/bem/listPengajuan',compact('data'));
    }
    public function indexDiterima(){
        $data = proposal::where('status_proposal','7')->orderBy('updated_at','asc')->get();
        return view('/bem/listPengajuanDiterima',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function revisi($id_proposal)
    {   
        $data = proposal::where('id_proposal',$id_proposal)->get();
        return view('/bem/formRevisiBem',compact('data'));
    }

    public function revisiAction(Request $request){
        proposal::where('id_proposal',$request->kode)->update([
            'status_proposal'=>2,
            'revisi_proposal'=>$request->revisi,
            'updated_at'=>date('Y-m-d')
        ]);
        return redirect('/bem/listPengajuan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatus($id_proposal, $status)
    {  
        proposal::where('id_proposal',$id_proposal)->update(['status_proposal'=>$status]);

      return  redirect('/bem/listPengajuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

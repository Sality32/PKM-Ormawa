<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Routing\Controller as BaseController;
use App\proposal;
use App\proposalDetail;
use App\ormawa;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = proposal::where('ormawa_kd',0)->orderBy('updated_at','desc')->get();
        return view('/ormawa/listProposal',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataList = proposal::where('ormawa_kd',$request->kode)->orderBy('updated_at','desc')->get();
        $i=1;
        foreach ($dataList as $key => $value) {
            $i+=1;
        }
        $id=$request->kode.date('-dmY')."-".$i;
        $data = new proposal([
        'id_proposal'=>$id,
        'jdl_kegiatan'=>$request->judul,
        'desk_kegiatan'=>$request->desk,
        'dana_kegiatan'=>$request->dana,
        'ketuplak_kegiatan'=>$request->ketuplak,
        'tgl_kegiatan'=>$request->tgl,
        'ormawa_kd'=>$request->kode,
        'revisi_proposal'=>"",
        'status_proposal'=>0,
        'create_at'=>date('Y-m-d'),
        'update_at'=>date('Y-m-d')
        ]);
        $data->save();

        return redirect('/ormawa/listProposal');
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
    public function edit($id)
    {
        //
    }

    public function revisi($id_proposal)
    {
        $id= Crypt::decrypt($id_proposal);

        $data = proposal::where('id_proposal',$id)->get();
        return view('/ormawa/formRevisiProposal',compact('data'));
    }

    public function revisiAction(Request $request){

        if($request->status==2){
            proposal::where('id_proposal',$request->kode)->update([
                'status_proposal'=>0,
                'revisi_proposal'=>"",
                'updated_at'=>date('Y-m-d')
            ]);
        }else{
            proposal::where('id_proposal',$request->kode)->update([
                'status_proposal'=>4,
                'revisi_proposal'=>"",
                'updated_at'=>date('Y-m-d')
            ]);
        }
        return redirect('/ormawa/listProposal');
    }

    public function detailPenolakan($id_proposal)
    {
        $id=Crypt::decrypt($id_proposal);
        $data=proposal::where('id_proposal',$id)->get();
        return view('/ormawa/detailProposalDitolak',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

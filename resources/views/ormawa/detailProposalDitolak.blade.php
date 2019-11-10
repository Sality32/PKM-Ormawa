@extends('layouts.dashboard')

@section('content')
<!-- MAIN CONTENT-->
<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> Detail Proposal Di Tolak</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<div class="form-panel">
					<form role="form" class="form-horizontal style-form">
						@foreach($data as $proposal)
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">JUDUL PROPOSAL</label>
		                  <div class="col-md-3">
		                    <label>{{$proposal->jdl_kegiatan}}</label>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">DESKRIPSI KEGIATAN</label>
		                  <div class="col-md-3">
		                  	<label>{{$proposal->desk_kegiatan}}</label>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">CATATAN PENOLAKAN</label>
		                  <div class="col-md-3">
		                  	<label>{{$proposal->revisi_proposal}}</label>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">NAMA KETUA PELAKSANA</label>
		                  <div class="col-sm-10">
		                    <label>{{$proposal->jdl_kegiatan}}</label>
		                  </div>
		                </div>
		                @endforeach
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">PENGAJUAN DANA</label>
		                  <div class="col-sm-2">
		                    <label>RP. {{number_format($proposal->dana_kegiatan,2)}}</label>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="control-label col-md-2">Tanggal</label>
		                  <div class="col-sm-2 ">
		                    {{date('d M Y',strtotime($proposal->tgl_kegiatan))}}
		                  </div>
		                </div>
		                <button type="submit" class="btn btn-theme">Download Proposal</button>
                      </div>
	                      
					</form>
				</div>
				
			</div>
			
		</div>
		
	</section>
	
</section>
@endsection
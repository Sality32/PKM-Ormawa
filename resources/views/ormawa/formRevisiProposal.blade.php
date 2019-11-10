@extends('layouts.dashboard')

@section('content')
<!-- MAIN CONTENT-->
<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> Form Perbaikan Proposal</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<div class="form-panel">
					<form role="form" class="form-horizontal style-form" action="/ormawa/formPerbaikanAction" method="post">
						{{csrf_field()}}

						@foreach($data as $proposal)
						@switch($proposal->status_proposal)

							@case(2)
							<h3>REVISI KELENGKAPAN DARI BEM</h3>
								@break

							@case(5)
							<h3>REVISI KONTEN DARI KLM</h3>
								@break

						@endswitch
						<input type="hidden" name="status" value="{{$proposal->status_proposal}}">
						<input type="hidden" name="kode" value="{{$proposal->id_proposal}}">
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
		                  <label class="col-sm-2 col-sm-2 control-label">DESKRIPSI REVISI</label>
		                  <div class="col-md-3">
		                  	<label>{{$proposal->revisi_proposal}}</label>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">NAMA KETUA PELAKSANA</label>
		                  <div class="col-sm-10">
		                    <label>{{$proposal->ketuplak_kegiatan}}</label>
		                  </div>
		                </div>
		                @endforeach
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">PENGAJUAN DANA</label>
		                  <div class="col-sm-2">
		                    <input type="text" class="form-control round-form" placeholder="RP. {{number_format($proposal->dana_kegiatan,2)}}" name="dana">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="control-label col-md-2">Tanggal</label>
		                  <div class="col-sm-2 ">
		                    <input class="form-control round-form" size="16" type="date" name="tgl" value="">
		                  </div>
		                </div>
                		<div class="form-group">
		                  <label class="control-label col-md-2">Upload Proposal</label>
		                  <div class="controls col-md-9">
		                    <div class="fileupload fileupload-new" data-provides="fileupload">
		                     <input type="file" class="default" />
		                    </div>
		                  </div>
		                </div>
                      </div>
                      <div class="form-group">
	                      <div class="col-lg-offset-2 col-lg-2">
	                      	<button type="submit" class="btn btn-theme">SUBMIT REVISI PROPOSAL</button>
	                      </div>
                      </div>
					</form>
				</div>
				
			</div>
			
		</div>
		
	</section>
	
</section>
@endsection
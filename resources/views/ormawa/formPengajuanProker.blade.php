@extends('layouts.dashboard')

@section('content')
<!-- MAIN CONTENT-->
<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> Form Pengajuan Kegiatan</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<div class="form-panel">
					<form role="form" class="form-horizontal style-form" action="/ormawa/storeProposal" method="post">
						{{csrf_field()}}
						<input type="hidden" name="kode" value="HIMAKOM">
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">JUDUL PROPOSAL</label>
		                  <div class="col-sm-10">
		                    <input type="text" class="form-control round-form" name="judul">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">DESKRIPSI KEGIATAN</label>
		                  <div class="col-sm-10">
		                  	<textarea name="desk" class="form-control"></textarea>
		                    <!-- <input type="text" class="form-control round-form" name="judul"> -->
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">NAMA KETUA PELAKSANA</label>
		                  <div class="col-sm-10">
		                    <input type="text" class="form-control round-form" name="ketuplak">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">PENGAJUAN DANA</label>
		                  <div class="col-sm-10">
		                    <input type="text" class="form-control round-form" placeholder="RP." name="dana">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="control-label col-md-2">Tanggal</label>
		                  <div class="col-sm-2 ">
		                    <input class="form-control round-form" size="16" type="date" name="tgl">
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
		                <div class="form-group">
	                      <label class="control-label col-md-2">Upload Poster</label>
	                     	<div class="controls col-md-9">
	                     		<div class="fileupload fileupload-new" data-provides="fileupload">
			                      	<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
			                        	<img src="{{asset('assets/img/img_kosong.png')}}" alt="" />
			                      	</div>
			                      	
			                        	<input type="file" class="default" />
			                      	</div>
			                </div>
	                   	</div>
                      </div>
                      <div class="form-group">
	                      <div class="col-lg-offset-2 col-lg-2">
	                      	<button type="submit" class="btn btn-theme">SUBMIT PROPOSAL</button>
	                      </div>
                      </div>
					</form>
				</div>
				
			</div>
			
		</div>
		
	</section>
	
</section>
@endsection
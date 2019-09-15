@extends('layouts.dashboard')

@section('content')
<!-- MAIN CONTENT-->
<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> Form Edit Pengurus</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<div class="form-panel">
					<form role="form" class="form-horizontal style-form">
						<div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">NIM</label>
		                  <div class="col-sm-10">
		                    <input type="text" class="form-control round-form">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">NAMA</label>
		                  <div class="col-sm-10">
		                    <input type="text" class="form-control round-form">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">JURUSAN</label>
		                  <div class="col-sm-10">
		                    <input type="text" class="form-control round-form">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">JABATAN</label>
		                  <div class="col-sm-10">
		                    <input type="text" class="form-control round-form">
		                  </div>
		                </div>
		                <!-- <div class="form-group">
		                  <label class="control-label col-md-2">Default Datepicker</label>
		                  <div class="col-sm-2 ">
		                    <input class="form-control form-control-inline input-medium default-date-picker round-form" size="16" type="text" value="">
		                  </div>
		                </div> -->
                		<!-- <div class="form-group">
		                  <label class="control-label col-md-2">Upload Proposal</label>
		                  <div class="controls col-md-9">
		                    <div class="fileupload fileupload-new" data-provides="fileupload">
		                     <input type="file" class="default" >
		                    </div>
		                  </div>
		                </div> -->
		                <div class="form-group">
	                      <label class="control-label col-md-2">UPLOAD FOTO</label>
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
                      	<label class="control-label col-md-2">Catatan Revisi</label>
                      	<div class="col-sm-10">
                      		<textarea class="form-control "></textarea>
                      		
                      	</div>
                      </div>
                      <div class="form-group">
	                      <div class="col-lg-offset-2 col-lg-2">
	                      	<button type="submit" class="btn btn-theme">SUBMIT REVISI</button>
	                      </div>
                      </div>
					</form>
				</div>
				
			</div>
			
		</div>
		
	</section>
	
</section>
@endsection
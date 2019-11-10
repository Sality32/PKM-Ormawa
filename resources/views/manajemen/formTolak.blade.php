@extends('layouts.dashboard')

@section('content')
<!-- MAIN CONTENT-->
<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> Form Penolakan</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<div class="form-panel">
					<form role="form" class="form-horizontal style-form" action="/manajemen/tolakProposalAction" method="post">
					{{csrf_field()}}
						@foreach($data as $proposal)
						<input type="hidden" name="kode" value="{{$proposal->id_proposal}}">
						<div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">JUDUL PROPOSAL</label>
		                  <div class="col-md-3">
		                    <input type="hidden" value="{{$proposal->jdl_kegiatan}}"><h4 >{{$proposal->jdl_kegiatan}}</h4>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-2 col-sm-2 control-label">NAMA KETUA PELAKSANA</label>
		                  <div class="col-md-3">
		                    <input type="hidden" value="{{$proposal->ketuplak_kegiatan}}"><h5>{{$proposal->ketuplak_kegiatan}}</h5>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="control-label col-md-2">Upload Proposal</label>
		                  <div class="controls col-md-9">
		                    <div class="fileupload fileupload-new" data-provides="fileupload">
		                     <input type="file" class="default" >
		                    </div>
		                  </div>
		                </div>
                      @endforeach
                      <div class="form-group">
                      	<label class="control-label col-md-2">Penolakan Revisi</label>
                      	<div class="col-md-6">
                      		<textarea class="form-control" name="revisi"></textarea>
                      
                      	</div>
                      </div>
                      <div class="form-group" style="margin-top: 40px;">
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
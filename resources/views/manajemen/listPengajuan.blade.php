@extends('layouts.dashboard')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> List Pengajuan Kegiatan</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<div class="content-panel">
					<table class="table table-bordered table-striped table-condensed cf">
						<thead>
							<tr><th>NO</th>
								<th>Judul Kegiatan</th>
								<th>Deskripsi Kegiatan</th>
								<th>Dana Kegiatan</th>
								<th>Ketua Pelaksana</th>
								<th>Tanggal Pelaksanaan</th>
								<th>Status Proposal</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1;?>
							@foreach($data as $proposal)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$proposal->jdl_kegiatan}}</td>
								<td>{{$proposal->desk_kegiatan}}</td>
								<td>RP. {{number_format($proposal->dana_kegiatan,2)}}</td>
								<td>{{$proposal->ketuplak_kegiatan}}</td>
								<td>{{date('d M Y',strtotime($proposal->tgl_kegiatan))}}</td>
								@switch($proposal->status_proposal)
									@case(4)
									<td><a href="/manajemen/updateStatus/{{$proposal->id_proposal}}/5"><button class="btn btn-round btn-primary">UNDUH PROPOSAL</button></a></td>
										@break

									@case(5)
									<td><a href="/manajemen/revisiManajemen/{{$proposal->id_proposal}}"><button class="btn btn-round btn-warning">REVISI</button></a>
										<a href="/manajemen/tolakProposal/{{$proposal->id_proposal}}"><button class="btn btn-round btn-danger">TOLAK</button></a>
									<a href="/manajemen/updateStatus/{{$proposal->id_proposal}}/7"><button class="btn btn-round btn-success">ACC</button></a></td>
										@break

									@case(6)
									<td>Proposal Sedang direvisi oleh {{$proposal->ormawa_kd}}</td>
										@break

									@case(7)
									<td>Proposal telah diteruskan ke PD 3 Untuk di Tanda tangan</td>
								@endswitch

							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</section>


@endsection
@extends('layouts.dashboard')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> List Proposal</h3>
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
									@case(0)
									<td><a href="/bem/updateStatus/{{$proposal->id_proposal}}/1"><button class="btn btn-round btn-primary">UNDUH PROPOSAL</button></a></td>
										@break

									@case(1)
									<td><a href="/bem/revisiBem/{{$proposal->id_proposal}}"><button class="btn btn-round btn-warning">REVISI</button></a>
									<a href="/bem/updateStatus/{{$proposal->id_proposal}}/4"><button class="btn btn-round btn-success">ACC</button></a></td>
										@break

									@case(2)
									<td>Proposal Sedang direvisi oleh {{$proposal->ormawa_kd}}</td>
										@break
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
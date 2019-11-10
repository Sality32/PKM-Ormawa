@extends('layouts.dashboard')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> List Kegiatan Ormawa</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<div class="content-panel">
					<table class="table table-bordered table-striped table-condensed cf">
						<thead>
							<tr><th>NO</th>
								<th>Judul Kegiatan</th>
								<th>Deskripsi Kegiatan</th>
								<th>Tanggal Pelaksanaan</th>
								<th>Ormawa Yang Mengajukan</th>
						
							</tr>
						</thead>
						<tbody>
							<?php $i=1;?>
							@foreach($data as $proposal)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$proposal->jdl_kegiatan}}</td>
								<td>{{$proposal->desk_kegiatan}}</td>
								<td>{{date('d M Y',strtotime($proposal->tgl_kegiatan))}}</td>
								<td>{{$proposal->ormawa_kd}}</td>

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
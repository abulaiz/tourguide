@extends('layout.bases')
@section('page_title', 'Destinasi Wisata')
@section('destinasi', 'active')

@section('content')

	<div class="row">
		<div class="col-lg-10 mx-auto">
			<div class="card">
				<div class="card-header card-header-primary">
					<h4 class="card-title">Destinasi Wisata</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
								<tr class="text-center">
									<th>No.</th>
									<th>Nama Tempat Wisata</th>
									<th>Kategori</th>
									<th>Tanggal Diupload</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$array = [
										'Tangkuban Parahu',
										'Gedung Sate',
										'Trans Studio Bandung',
										'Braga Street',
										'Bandung Geological Museum'
									];
									$cat = [
										'View, Scenery, Mountain, Highland',
										'Building, Architecture, Historical',
										'Indoor, Theme Park, Rides',
										'Street, City, Views, Lifestyle',
										'Museum, Historical, Building, Architecture'
									];
									$no = 1;
									foreach ($array as $id => $data) {
								?>
								<tr>
									<td>{{$no}}.</td>
									<td>{{$data}}</td>
									<td>{{$cat[$id]}}</td>
									<td class="text-center">28 Apr, 2019</td>
									<td>
										<i class="material-icons">info</i>
										&nbsp;
										<i class="material-icons">edit</i>
										&nbsp;
										<i class="material-icons">delete</i>
									</td>
								</tr>
								<?php $no++; } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
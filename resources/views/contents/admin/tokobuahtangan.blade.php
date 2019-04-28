@extends('layout.bases')
@section('page_title', 'Home')
@section('dashboard', 'active')

@section('content')

	<div class="row">
		<div class="col-lg-10 mx-auto">
			<div class="card">
				<div class="card-header card-header-primary">
					<h4 class="card-title">Toko Buah Tangan</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr class="text-center">
									<th>No.</th>
									<th>Nama Toko</th>
									<th>Kategori</th>
									<th>Tanggal Diupload</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$array = [
										'Pasar Baru Trade Center',
										'Chinatown Bandung',
										'Cibaduyut Shoes Industry',
										'Kartika Sari',
										'Saung Angklung Udjo'
									];
									$cat = [
										'Fashion, Marketplace',
										'Building, Architecture, Historical, Culinary, Street',
										'Fashion, Street',
										'Food, Culinary, Cake',
										'Architecture, Building, Historical, Musical, Handcraft'
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
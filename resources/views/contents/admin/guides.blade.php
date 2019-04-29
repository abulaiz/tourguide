@extends('layout.bases')
@section('page_title', 'Tour Guide')
@section('guides', 'active')

@section('content')

@php

  $datas = [
    ['nama' => 'Ahmad Agus', 'gender' => 'Laki-laki', 'rating' => '4', 'status' => 'On Trip'],
    ['nama' => 'Dwi artika', 'gender' => 'Perempuan', 'rating' => '3', 'status' => 'On Trip'],
    ['nama' => 'Suhartono', 'gender' => 'Laki-laki', 'rating' => '4', 'status' => 'On Trip'],
    ['nama' => 'Angga Pratama', 'gender' => 'Laki-laki', 'rating' => '5', 'status' => 'Stay'],
    ['nama' => 'Susilawati', 'gender' => 'Perempuan', 'rating' => '5', 'status' => 'On Trip'],
    ['nama' => 'Karina Mulyawati', 'gender' => 'Perempuan', 'rating' => '4', 'status' => 'Stay'],
  ];

@endphp
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Tour Guide</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                      </thead>
                      <tbody>
                        @foreach($datas as $item)
                        <tr>
                          <td>{{ $item['nama'] }}</td>
                          <td>{{ $item['gender'] }}</td>
                          <td>{{ $item['rating'] }}</td>
                          <td>{{ $item['status'] }}</td>
                          <td>
                            <button class="btn btn-outline-primary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tindakan</button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item">
                                <i class="fa fa-eye mr-1"></i>Detail</a>  
                                <i class="fa fa-clock mr-1"></i>Riwayat Booking</a>  
                              <a class="dropdown-item">                
                                <i class="fa fa-trash mr-1"></i>Hapus Akunn</a>                
                            </div>            
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection

@extends('layout.bases')
@section('page_title', 'Tourist')

@section('content')

@php

  $datas = [
    ['nama' => 'Alex Aliester', 'gender' => 'Laki-laki', 'country' => 'Jerman', 'has_trip' => '2'],
    ['nama' => 'Lena', 'gender' => 'Perempuan', 'country' => 'Jerman', 'has_trip' => '1'],
    ['nama' => 'Martin Zuberg', 'gender' => 'Laki-laki', 'country' => 'Swiss', 'has_trip' => '3'],
    ['nama' => 'Raphael Albert', 'gender' => 'Laki-laki', 'country' => 'Belanda', 'has_trip' => '0'],
    ['nama' => 'Zlatan Mourinho', 'gender' => 'Perempuan', 'country' => 'Italy', 'has_trip' => '1']
  ];

@endphp
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Turis Asing</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Negara</th>
                        <th>Jumlah Kunjungan</th>
                        <th>Tindakan</th>
                      </thead>
                      <tbody>
                        @foreach($datas as $item)
                        <tr>
                          <td>{{ $item['nama'] }}</td>
                          <td>{{ $item['gender'] }}</td>
                          <td>{{ $item['country'] }}</td>
                          <td>{{ $item['has_trip'] }}</td>
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

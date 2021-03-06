@extends('layout.bases')
@section('page_title', 'Pengajuan')
@section('submissions', 'active')

@section('content')

@php

  $datas = [
    ['tanggal' => '23 April 2019', 'nama' => 'Ahmad Salimin', 'gender' => 'Laki-laki', 'pendidikan' => 'Sarjana'],
    ['tanggal' => '22 April 2019', 'nama' => 'Ananda Dwi', 'gender' => 'Perempuan', 'pendidikan' => 'Diploma'],
    ['tanggal' => '21 April 2019', 'nama' => 'Suhartini', 'gender' => 'Perempuan', 'pendidikan' => 'SMA Sederajat'],
  ];

@endphp
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Pengajuan Tour Guide</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Tanggal Pengajuan</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Tindakan</th>
                      </thead>
                      <tbody>
                        @foreach($datas as $item)
                        <tr>
                          <td>{{ $item['tanggal'] }}</td>
                          <td>{{ $item['nama'] }}</td>
                          <td>{{ $item['gender'] }}</td>
                          <td>{{ $item['pendidikan'] }}</td>
                          <td>
                            <button class="btn btn-outline-primary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tindakan</button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item">
                                <i class="fa fa-eye mr-1"></i>Detail</a> 
                              <a class="dropdown-item">               
                                <i class="fa fa-check mr-1"></i>Terima</a>  
                              <a class="dropdown-item">                
                                <i class="fa fa-times mr-1"></i>Tolak</a>                
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

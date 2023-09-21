@extends('template.default')


@php
    $title = 'Data Siswa';
    $preTitle = 'Semua Data';
@endphp

@section('body')
<h1>Ikha Nur Rochayatin</h1>


<div class="col-lg-8">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Nama Sekolah</th>
                          <th>Alamat</th>
                          <th>Jurusan</th>
                          <th>Jumlah Guru</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sekolahs as $sekolah)
                        <tr>
                          <td>{{ $sekolah->nama_sekolah }}</td>
                          <td>{{ $sekolah->alamat }}</td>
                          <td>{{ $sekolah->jurusan }}</td>
                          <td>{{ $sekolah->jumlah_guru }}</td>
                          <td>
                            <a href="{{ route('sekolahs.edit',$sekolah->id) }}">Edit</a>
                            <form action="{{ route('sekolahs.hapus',$sekolah->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="hapus" class="btn btn-danger btn-sm">
                          </from>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection
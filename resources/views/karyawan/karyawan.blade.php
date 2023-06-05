@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Karyawan</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>
                        ID Karyawan
                        </th>
                      <th>
                       ID User
                      </th>
                      <th>
                        Nama karyawan
                      </th>
                      <th>
                        Nomor Telepon
                       </th>
                      <th>
                        alamat karyawan
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($karyawan as $data)
                      <tr>
                          <td scope="data">
                              {{ $data->id_karyawan }}
                          </td>
                          <td>
                              {{ $data->id_user }}
                          </td>
                          <td>
                            {{ $data->nama_karyawan }}
                        </td>
                        <td>
                          {{ $data->nomor_telepon }}
                      </td>
                      <td>
                        {{ $data->alamat_karyawan }}
                    </td>
                          <td>
                              <a href="/karyawanEdit/{{ $data->id_karyawan }}" type="button"
                                  class="btn btn-warning">Edit</a>
                              <a href="/karyawanDelete/{{ $data->id_karyawan }}" type="button"
                                  class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                  @endforeach
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary btn-round" 
                  onclick="location.href='{{ route('karyawanCreate') }}'">Tambah Data</button>
                  <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('karyawanPDF') }}'">Cetak Data</button>
                 
                </div>
              </div>
            </div>
          </div>

          
       {{-- <!-- <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Makanan</h5>
              <div class="card-body ">
              <img src="{{asset('assets/sate.jpg')}}" width="200" height="200" >&emsp;&emsp;&emsp;&emsp;&emsp;
              <img src="{{asset('assets/nasi-uduk.webp')}}" align ="center" width="200" height="200">&emsp;&emsp;&emsp;&emsp;&emsp;
              <img src="{{asset('assets/mie.jpeg')}}" align ="center" width="200" height="200"/>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
        </div> --> --}}
      
@endsection

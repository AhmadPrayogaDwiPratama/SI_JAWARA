@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Restoran</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>
                        ID Restoran
                        </th>
                      <th>
                       Nama Restoran
                      </th>
                      <th>
                      Alamat
                      </th>
                      <th>
                       No Tlp
                      </th>
                      <th>
                        Deskripsi
                    </th>
                    <th>
                      Action
                  </th>
                    </thead>
                    <tbody>
                      @foreach ($restoran as $data)
                      <tr>
                          <td scope="data">
                              {{ $data->id_restoran }}
                          </td>
                          <td>
                              {{ $data->nama_restoran }}
                          </td>
                          <td>
                            {{ $data->alamat_restoran }}
                        </td>
                        <td>
                          {{ $data->nomor_telepon }}
                      </td>
                      <td>
                        {{ $data->deskripsi_restoran }}
                    </td>
                          <td>
                              <a href="/restoranEdit/{{ $data->id_restoran }}" type="button"
                                  class="btn btn-warning">Edit</a>
                              <a href="/restoranDelete/{{ $data->id_restoran }}" type="button"
                                  class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                  @endforeach
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary btn-round" 
                  onclick="location.href='{{ route('tambahrestoran') }}'">Tambah Data</button>
                  <button type="submit" class="btn btn-primary btn-round" 
                  onclick="location.href='{{ route('restoranPDF') }}'">Cetak Data</button>
                 
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

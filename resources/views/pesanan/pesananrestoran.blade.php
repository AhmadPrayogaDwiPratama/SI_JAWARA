@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Pesanan Restoran</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>
                        ID Pemesanan Restoran
                        </th>
                      <th>
                       ID Restoran
                      </th>
                      <th>
                       Id Makanan
                      </th>
                      <th>
                         Id Pembeli
                       </th>
                       <th>
                        Jumlah Makanan
                      </th>
                    <th>
                      Action
                  </th>
                    </thead>
                    <tbody>
                      @foreach ($pesananrestoran as $data)
                      <tr>
                          <td scope="data">
                              {{ $data->id_pesananrestoran }}
                          </td>
                          <td>
                              {{ $data->id_restoran }}
                          </td>
                          <td>
                            {{ $data->id_makanan }}
                        </td>
                        <td>
                          {{ $data->id_pembeli }}
                      </td>
                      <td>
                        {{ $data->jumlah_makanan }}
                    </td>
                          <td>
                              <a href="/pesananrestoranEdit/{{ $data->id_pesananrestoran }}" type="button"
                                  class="btn btn-warning">Edit</a>
                              <a href="/pesananrestoranDelete/{{ $data->id_pesananrestoran }}" type="button"
                                  class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                  @endforeach
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary btn-round" 
                  onclick="location.href='{{ route('pesananrestoranCreate') }}'">Tambah Data</button>
                  <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('pesananrestoranPDF') }}'">Cetak Data</button>
                 
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

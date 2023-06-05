@extends('template')
@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Makanan</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID Makanan
                        </th>
                      <th>
                       Nama Makanan
                      </th>
                      <th>
                        Deskripsi Makanan
                      </th>
                      <th>
                       Harga Makanan
                      </th>
                    <th>
                      Action
                  </th>
                      <tbody>
                        @foreach ($makanan as $data)
                        <tr>
                            <td scope="data">
                                {{ $data->id_makanan }}
                            </td>
                            <td>
                                {{ $data->nama_makanan }}
                            </td>
                            <td>
                              {{ $data->deskripsi_makanan }}
                          </td>
                            <td>
                              {{ $data->harga_makanan }}
                          </td>
                            <td>
                                <a href="/makananEdit/{{ $data->id_makanan }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <a href="/makananDelete/{{ $data->id_makanan }}" type="button"
                                    class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                      </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary btn-round" onclick="location.href='{{ route('tambahmakanan') }}'">Tambah Data</button>
                  <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('makananPDF') }}'">Cetak Data</button>
                </div>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
              </div>
            </div>
          </div>
        </div>
         
@endsection

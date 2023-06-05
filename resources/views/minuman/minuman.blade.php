@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Minuman</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID minuman
                        </th>
                      <th>
                       Nama minuman
                      </th>
                      <th>
                        Deskripsi minuman
                      </th>
                      <th>
                       Harga minuman
                      </th>
                    <th>
                      Action
                  </th>
                      <tbody>
                        @foreach ($minuman as $data)
                        <tr>
                            <td scope="data">
                                {{ $data->id_minuman }}
                            </td>
                            <td>
                                {{ $data->nama_minuman }}
                            </td>
                            <td>
                              {{ $data->deskripsi_minuman }}
                          </td>
                            <td>
                              {{ $data->harga_minuman }}
                          </td>
                            <td>
                                <a href="/minumanEdit/{{ $data->id_minuman }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <a href="/minumanDelete/{{ $data->id_minuman }}" type="button"
                                    class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                      </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary btn-round" onclick="location.href='{{ route('tambahminuman') }}'">Tambah Data</button>
                  <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('minumanPDF') }}'">Cetak Data</button>
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

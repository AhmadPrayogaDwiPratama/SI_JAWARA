@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Cafe</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID Cafe
                        </th>
                      <th>
                       Nama Cafe
                      </th>
                      <th>
                      Alamat Cafe
                      </th>
                      <th>
                       No Tlp Cafe
                      </th>
                    <th>
                      Action
                  </th>
                    </thead>
                      @foreach ($cafe as $data)
                      <tr>
                          <td scope="data">
                              {{ $data->id_cafe }}
                          </td>
                          <td>
                              {{ $data->nama_cafe }}
                          </td>
                          <td>
                            {{ $data->alamat_cafe }}
                        </td>
                        <td>
                          {{ $data->nomor_telepon_cafe }}
                      </td>
                          <td>
                              <a href="/cafeEdit/{{ $data->id_cafe }}" type="button"
                                  class="btn btn-warning">Edit</a>
                              <a href="/cafeDelete/{{ $data->id_cafe }}" type="button"
                                  class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                  @endforeach
                </thead>
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary btn-round"
                   onclick="location.href='{{ route('tambahcafe') }}'">Tambah Data</button>
                   <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('cafePDF') }}'">Cetak Data</button>
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

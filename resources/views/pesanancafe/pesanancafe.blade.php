@extends('template')
@section('content')
<div class="content">
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Pesanan Cafe</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                  <th>
                  ID Pemesanan Cafe
                  </th>
                <th>
                 ID Cafe
                </th>
                <th>
                 Id Minuman
                </th>
                <th>
                   Id Pembeli
                 </th>
                 <th>
                  Jumlah Minuman
                </th>
              <th>
                Action
            </th>
              </thead>
              <tbody>
                @foreach ($pesanancafe as $data)
                <tr>
                    <td scope="data">
                        {{ $data->id_pesanancafe }}
                    </td>
                    <td>
                        {{ $data->id_cafe }}
                    </td>
                    <td>
                      {{ $data->id_minuman }}
                  </td>
                  <td>
                    {{ $data->id_pembeli }}
                </td>
                <td>
                  {{ $data->jumlah_minuman }}
              </td>
                    <td>
                        <a href="/pesanancafeEdit/{{ $data->id_pesanancafe }}" type="button"
                            class="btn btn-warning">Edit</a>
                        <a href="/pesanancafeDelete/{{ $data->id_pesanancafe }}" type="button"
                            class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
              </tbody>
            </table>
            <button type="submit" class="btn btn-primary btn-round" 
            onclick="location.href='{{ route('pesanancafeCreate') }}'">Tambah Data</button>
            <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('pesanancafePDF') }}'">Cetak Data</button>
           
          </div>
        </div>
      </div>
    </div>
    @endsection
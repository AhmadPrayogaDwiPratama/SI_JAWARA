@extends('template')
@section('content')
<div class="content">
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Penilaian Cafe</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                  <th>
                  ID Penilaian Cafe
                  </th>
                <th>
                 ID Cafe
                </th>
                <th>
                 Id KriteriaCafe
                </th>
                <th>
                   Id Pembeli
                 </th>
                 <th>
                  Nilai
                </th>
              <th>
                Action
            </th>
              </thead>
              <tbody>
                @foreach ($penilaiancafe as $data)
                <tr>
                    <td scope="data">
                        {{ $data->id_penilaiancafe }}
                    </td>
                    <td>
                        {{ $data->id_cafe }}
                    </td>
                    <td>
                      {{ $data->id_KriteriaCafe}}
                  </td>
                  <td>
                    {{ $data->id_cafe }}
                </td>
                <td>
                  {{ $data->nilai_penilaian }}
              </td>
                    <td>
                        <a href="/penilaiancafeEdit/{{ $data->id_penilaiancafe }}" type="button"
                            class="btn btn-warning">Edit</a>
                        <a href="/penilaiancafeDelete/{{ $data->id_penilaiancafe }}" type="button"
                            class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
              </tbody>
            </table>
            <button type="submit" class="btn btn-primary btn-round" 
            onclick="location.href='{{ route('penilaiancafeCreate') }}'">Tambah Data</button>
            <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('penilaiancafePDF') }}'">Cetak Data</button>
           
          </div>
        </div>
      </div>
    </div>
    @endsection
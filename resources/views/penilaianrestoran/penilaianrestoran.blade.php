@extends('template')
@section('content')
<div class="content">
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Penilaian Restoran</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                  <th>
                  ID Penilaian Restoran
                  </th>
                <th>
                 ID Restoran
                </th>
                <th>
                 Id KriteriaRestoran
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
                @foreach ($penilaianrestoran as $data)
                <tr>
                    <td scope="data">
                        {{ $data->id_penilaianrestoran }}
                    </td>
                    <td>
                        {{ $data->id_restoran }}
                    </td>
                    <td>
                      {{ $data->id_KriteriaRestoran}}
                  </td>
                  <td>
                    {{ $data->id_pembeli }}
                </td>
                <td>
                  {{ $data->nilai_penilaian }}
              </td>
                    <td>
                        <a href="/penilaianrestoranEdit/{{ $data->id_penilaianrestoran }}" type="button"
                            class="btn btn-warning">Edit</a>
                        <a href="/penilaianrestoranDelete/{{ $data->id_penilaianrestoran }}" type="button"
                            class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
              </tbody>
            </table>
            <button type="submit" class="btn btn-primary btn-round" 
            onclick="location.href='{{ route('penilaianrestoranCreate') }}'">Tambah Data</button>
            <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('penilaianrestoranPDF') }}'">Cetak Data</button>
           
          </div>
        </div>
      </div>
    </div>
    @endsection
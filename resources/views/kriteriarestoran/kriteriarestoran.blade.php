@extends('template')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> kriteria Restoran</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID Kriteria Restoran
                                    </th>
                                    <th>
                                        Kriteria Restoran
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($kriteriarestoran as $data)
                                        <tr>
                                            <td scope="data">
                                                {{ $data->id_KriteriaRestoran }}
                                            </td>
                                            <td>
                                                {{ $data->Nama_KriteriaRestoran }}
                                            </td>
                                            <td>
                                                <a href="/kriteriarestoranEdit/{{ $data->id_KriteriaRestoran }}" type="button"
                                                    class="btn btn-warning">Edit</a>
                                                <a href="/kriteriarestoranDelete/{{ $data->id_KriteriaRestoran }}" type="button"
                                                    class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary btn-round"
                                onclick="location.href='{{ route('tambahkriteriarestoran') }}'">Tambah Data</button>
                                <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('kriteriarestoranPDF') }}'">Cetak Data</button>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

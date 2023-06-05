@extends('template')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> kriteria CoffeShop</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID Kriteria CoffeShop
                                    </th>
                                    <th>
                                        Kriteria CoffeShop
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($kriteriacafe as $data)
                                        <tr>
                                            <td scope="data">
                                                {{ $data->id_KriteriaCafe }}
                                            </td>
                                            <td>
                                                {{ $data->Nama_KriteriaCafe }}
                                            </td>
                                            <td>
                                                <a href="/kriteriacafeEdit/{{ $data->id_KriteriaCafe }}" type="button"
                                                    class="btn btn-warning">Edit</a>
                                                <a href="/kriteriacafeDelete/{{ $data->id_KriteriaCafe }}" type="button"
                                                    class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary btn-round"
                                onclick="location.href='{{ route('tambahkriteriacafe') }}'">Tambah Data</button>
                                <button type="submit" class="btn btn-primary btn-round" 
                   onclick="location.href='{{ route('kriteriacafePDF') }}'">Cetak Data</button>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>
                        ID User
                        </th>
                      <th>
                       Nama User
                      </th>
                      <th>
                      Email 
                      </th>
                      <th>
                       Kata Sandi
                      </th>
                    <th>
                      Action
                  </th>
                    </thead>
                    <tbody>
                      @foreach ($user as $data)
                      <tr>
                          <td scope="data">
                              {{ $data->id_user }}
                          </td>
                          <td>
                              {{ $data->nama_user }}
                          </td>
                          <td>
                            {{ $data->email_user }}
                        </td>
                        <td>
                          {{ $data->katasandi_user }}
                      </td>
                          <td>
                              <a href="/userEdit/{{ $data->id_user }}" type="button"
                                  class="btn btn-warning">Edit</a>
                              <a href="/userDelete/{{ $data->id_user }}" type="button"
                                  class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                  @endforeach
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary btn-round" 
                  onclick="location.href='{{ route('tambahuser') }}'">Tambah Data</button>
                  <button type="submit" class="btn btn-primary btn-round" 
                  onclick="location.href='{{ route('userPDF') }}'">Cetak Data</button>
                 
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

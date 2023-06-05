@extends('template')
@section('content')
<br>
<br>
<br>
<br>
<div class="col-md-8">
            <div class="card card-user">
              <div class="card-header"> 
                <h4 class="card-title">Pembeli</h4>
              </div>
              <div class="card-body">
                <form action="{{route('pesananrestoranInsert')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID PesananRestoran</label>
                        <input type="text" class="form-control" name="id_pesananrestoran"  placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label for="id_restoran">Id Restoran</label>
                        <select id="id_restoran" class="form-control" name="id_restoran">
                        <option value="">--Select--</option>
                        @foreach ($restoran as $row)
                            <option value="{{ $row->id_restoran }}">{{ $row->id_restoran }}</option>
                        @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col-md-5 px-1">
                        <div class="form-group">
                          <label for="id_makanan">Id Makanan</label>
                          <select id="id_makanan" class="form-control" name="id_makanan">
                          <option value="">--Select--</option>
                          @foreach ($makanan as $row)
                              <option value="{{ $row->id_makanan }}">{{ $row->id_makanan }}</option>
                          @endforeach
                          </select>
                      </div>
                      </div>
                      <div class="col-md-5 px-1">
                        <div class="form-group">
                          <label for="id_pembeli">Id Pembeli</label>
                          <select id="id_pembeli" class="form-control" name="id_pembeli">
                          <option value="">--Select--</option>
                          @foreach ($pembeli as $row)
                              <option value="{{ $row->id_pembeli }}">{{ $row->id_pembeli }}</option>
                          @endforeach
                          </select>
                      </div>
                      </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Jumlah Makanan</label>
                        <input type="text" class="form-control"name="jumlah_makanan"  placeholder="" value="">
                      </div>
                    </div>
                  <div class="row">
                    <div class="update ml-5 mr-1">
                      <button type="submit" class="btn btn-primary btn-round" >Tambah data</button> 
                      {{-- <!-- onclick="location.href='{{ route('dashboard') }}'" --> --}}
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
          
@endsection
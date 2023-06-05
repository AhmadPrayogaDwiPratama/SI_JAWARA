@extends('template')
@section('content')
<br>
<br>
<br>
<br>
<div class="col-md-8">
            <div class="card card-user">
              <div class="card-header"> 
                <h4 class="card-title">Penilaian Restoran</h4>
              </div>
              <div class="card-body">
                <form action="{{route('penilaianrestoranInsert')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID Penilaian Restoran</label>
                        <input type="text" class="form-control" name="id_penilaianrestoran"  placeholder="" value="">
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
                          <label for="id_KriteriaRestoran">Id KriteriaRestoran</label>
                          <select id="id_KriteriaRestoran" class="form-control" name="id_KriteriaRestoran">
                          <option value="">--Select--</option>
                          @foreach ($kriteriarestoran as $row)
                              <option value="{{ $row->id_KriteriaRestoran }}">{{ $row->id_KriteriaRestoran }}</option>
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
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" class="form-control"name="nilai_penilaian"  placeholder="" value="">
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
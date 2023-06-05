@extends('template')
@section('content')
<br>
<br>
<br>
<br>
<div class="col-md-8">
            {{-- <div class="card card-user">
              <div class="card-header"> 
                <h4 class="card-title">Tambah Kriteria</h4>
              </div> --}}
              <div class="card-body">
                <form action="/penilaiancafeUpdate/{{$penilaiancafe->id_penilaiancafe}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID Penilaian Cafe</label>
                        <input type="text" class="form-control" name="id_penilaiancafe"  placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label for="id_cafe">Id Cafe</label>
                        <select id="id_cafe" class="form-control" name="id_cafe">
                        <option value="">--Select--</option>
                        @foreach ($cafe as $row)
                            <option value="{{ $row->id_cafe }}">{{ $row->id_cafe }}</option>
                        @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col-md-5 px-1">
                        <div class="form-group">
                          <label for="id_KriteriaCafe">Id KriteriaCafe</label>
                          <select id="id_KriteriaCafe" class="form-control" name="id_KriteriaCafe">
                          <option value="">--Select--</option>
                          @foreach ($kriteriacafe as $row)
                              <option value="{{ $row->id_KriteriaCafe }}">{{ $row->id_KriteriaCafe }}</option>
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
                      <button type="submit" class="btn btn-primary btn-round" >Edit data</button> 
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
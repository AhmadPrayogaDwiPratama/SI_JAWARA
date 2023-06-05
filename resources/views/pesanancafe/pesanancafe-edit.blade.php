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
                <form action="/pesanancafeUpdate/{{$pesanancafe->id_pesanancafe}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID PesananCafe</label>
                        <input type="text" class="form-control" name="id_pesanancafe"  placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label for="id_cafe">Id cafe</label>
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
                          <label for="id_minuman">Id Minuman</label>
                          <select id="id_minuman" class="form-control" name="id_minuman">
                          <option value="">--Select--</option>
                          @foreach ($minuman as $row)
                              <option value="{{ $row->id_minuman }}">{{ $row->id_minuman }}</option>
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
                        <label>Jumlah Minuman</label>
                        <input type="text" class="form-control"name="jumlah_minuman"  placeholder="" value="">
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
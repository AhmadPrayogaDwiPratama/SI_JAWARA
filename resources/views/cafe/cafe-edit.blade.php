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
                <form action="/cafeUpdate/{{$cafe->id_cafe}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>ID Restoran</label>
                      <input type="text" class="form-control" name="id_cafe"  placeholder="" value="">
                    </div>
                  </div>
                  <div class="col-md-5 px-1">
                    <div class="form-group">
                      <label>Nama Restoran</label>
                      <input type="text" class="form-control" name="nama_cafe" placeholder="" value="">
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
                      <label>Alamat</label>
                      <input type="text" class="form-control"name="alamat_cafe"  placeholder="" value="">
                    </div>
                  </div>
                  <div class="col-md-5 pl-1">
                    <div class="form-group">
                      <label>No Tlp Cafe</label>
                      <input type="text" class="form-control" name="nomor_telepon_cafe"  placeholder="" value="">
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
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
                <form action="/minumanUpdate/{{$minuman->id_minuman}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>ID minuman</label>
                      <input type="text" class="form-control" name="id_minuman"  placeholder="" value="">
                    </div>
                  </div>
                  <div class="col-md-5 px-1">
                    <div class="form-group">
                      <label>Nama minuman</label>
                      <input type="text" class="form-control" name="nama_minuman" placeholder="" value="">
                    </div>
                  </div>
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>Deskripsi minuman</label>
                      <input type="text" class="form-control"name="deskripsi_minuman"  placeholder="" value="">
                    </div>  
                  </div>   
                    <div class="col-md-5 pl-1">
                      <div class="form-group">
                          <label>Harga minuman</label>
                          <input type="text" class="form-control" name="harga_minuman" placeholder="" value="">
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
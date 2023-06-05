@extends('template')
@section('content')
<br>
<br>
<br>
<br>
<div class="col-md-8">
            <div class="card card-user">
              <div class="card-header"> 
                <h4 class="card-title">Restoran</h4>
              </div>
              <div class="card-body">
                <form action="{{route('restoranInsert')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID Restoran</label>
                        <input type="text" class="form-control" name="id_restoran"  placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label>Nama Restoran</label>
                        <input type="text" class="form-control" name="nama_restoran" placeholder="" value="">
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
                        <input type="text" class="form-control"name="alamat_restoran"  placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-5 pl-1">
                      <div class="form-group">
                        <label>No Tlp</label>
                        <input type="text" class="form-control" name="nomor_telepon"  placeholder="" value="">
                      </div>
                      <div class="col-md-15 px-7">
                        <div class="form-group">
                          <label>Deskripsi Restoran</label>
                          <input type="text" class="form-control" name="deskripsi_restoran" placeholder="" value="">
                        </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
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
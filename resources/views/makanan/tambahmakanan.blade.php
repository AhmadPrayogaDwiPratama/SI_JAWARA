@extends('template')
@section('content')
<br>
<br>
<br>
<br>
<div class="col-md-8">
            <div class="card card-user">
              <div class="card-header"> 
                <h4 class="card-title">Makanan</h4>
              </div>
              <div class="card-body">
                <form action="{{route('makananInsert')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID Makanan</label>
                        <input type="text" class="form-control" name="id_makanan"  placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label>Nama Makanan</label>
                        <input type="text" class="form-control" name="nama_makanan" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Deskripsi_Makanan</label>
                        <input type="text" class="form-control"name="deskripsi_makanan"  placeholder="" value="">
                      </div>   
                      <div class="col-md-5 pl-1">
                        <div class="form-group">
                            <label>Harga Makanan</label>
                            <input type="text" class="form-control" name="harga_makanan" placeholder="" value="">
                      </div>
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
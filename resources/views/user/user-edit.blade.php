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
                <form action="/userUpdate/{{$user->id_user}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>ID user</label>
                      <input type="text" class="form-control" name="id_user"  placeholder="" value="">
                    </div>
                  </div>
                  <div class="col-md-5 px-1">
                    <div class="form-group">
                      <label>Nama User</label>
                      <input type="text" class="form-control" name="nama_user" placeholder="" value="">
                    </div>
                  </div>
                  <div class="col-md-5 pl-1">
                    <div class="form-group">
                        <label>Email user</label>
                        <input type="text" class="form-control" name="email_user" placeholder="" value="">
                  </div>
                </div>
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>Kata sandi User</label>
                      <input type="text" class="form-control"name="katasandi_user"  placeholder="" value="">
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
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
                <form action="/pembeliUpdate/{{$pembeli->id_pembeli}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>ID Pembeli</label>
                      <input type="text" class="form-control" name="id_pembeli"  placeholder="" value="">
                    </div>
                  </div>
                  <div class="col-md-5 px-1">
                    <div class="form-group">
                      <label for="id_user">Id User</label>
                      <select id="id_user" class="form-control" name="id_user">
                      <option value="">--Select--</option>
                      @foreach ($user as $row)
                          <option value="{{ $row->id_user }}">{{ $row->id_user }}</option>
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
                      <label>Nama</label>
                      <input type="text" class="form-control"name="nama_pembeli"  placeholder="" value="">
                    </div>
                  </div>
                  <div class="col-md-5 pl-1">
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jenis_kelamin"  placeholder="" value="">
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
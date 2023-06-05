@extends('template')
@section('content')
<br>
<br>
<br>
<br>
<div class="col-md-8">
            <div class="card card-user">
              <div class="card-header"> 
                <h4 class="card-title">Karyawan</h4>
              </div>
              <div class="card-body">
                <form action="{{route('karyawanInsert')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID karyawan</label>
                        <input type="text" class="form-control" name="id_karyawan"  placeholder="" value="">
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
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" class="form-control"name="nama_karyawan"  placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-5 pl-1">
                      <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" class="form-control" name="nomor_telepon"  placeholder="" value="">
                      </div>
                      <div class="col-md-15 pr-1"> 
                        <div class="form-group">
                          <label>Alamat Karyawan</label>
                          <input type="text" class="form-control" name="alamat_karyawan"  placeholder="" value="">
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
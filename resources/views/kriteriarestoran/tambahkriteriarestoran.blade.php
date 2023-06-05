@extends('template')
@section('content')
<br>
<br>
<br>
<br>
<div class="col-md-8">
            <div class="card card-user">
              <div class="card-header"> 
                <h4 class="card-title">Tambah Kriteria</h4>
              </div>
              <div class="card-body">
                <form action="{{route('kriteriarestoranInsert')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID Kriteria Restoran</label>
                        <input type="text" class="form-control" name="id_KriteriaRestoran" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Kriteria Restoran</label>
                        <input type="text" class="form-control" name="Nama_KriteriaRestoran" placeholder="" value="">
                      </div>
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
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
                <form action="/kriteriacafeUpdate/{{$kriteriacafe->id_KriteriaCafe}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID Kriteria Cafe</label>
                        <input type="text" class="form-control" name="id_KriteriaCafe" placeholder="" value="{{$kriteriacafe->id_KriteriaCafe}}">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Kriteria Cafe</label>
                        <input type="text" class="form-control" name="Nama_KriteriaCafe" placeholder="" value="{{$kriteriacafe->Nama_KriteriaCafe}}">
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
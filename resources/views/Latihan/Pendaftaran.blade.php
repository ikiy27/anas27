@extends('layouts.master')

@section('content')

@if (session()->has('msg'))
    <div class="row card">
        <div class="col-md-12 card-body" id='msg' style="background-color: rgb(206, 243, 58);">
            <div class="text-white">
                {{ session('msg') }}
            </div>
        </div>
    </div>
    @endif


      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Borang Pendaftaran</h1>
      <p class="mb-4">Sila isi borang pendaftaran bagi tujuan pendaftaran akaun pengguna </p>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Borang</h6>
          </div>
          <div class="card-body">
           
            <form class="user" method="post" action="/utama/borang/simpan">
                @csrf
                <div class="form-group">
                    
                        <input type="text" name="nama" class="form-control form-control-user" 
                            placeholder="Nama Penuh">
                
                </div>
                <div class="form-group">
                    <input type="email" name="emel" class="form-control form-control-user" 
                        placeholder="Emel">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="nokp" class="form-control form-control-user"
                            placeholder="No Kad Pengenalan">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="notel" class="form-control form-control-user"
                             placeholder="Nombor telefon">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Daftar
                </button>
                
            </form>

          </div>
      </div>

@endsection
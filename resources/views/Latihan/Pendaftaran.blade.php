@extends('layouts.master')

@section('content')


      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Borang Pendaftaran</h1>
      <p class="mb-4">Sila isi borang pendaftaran bagi tujuan pendaftaran akaun pengguna </p>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Borang</h6>
          </div>
          <div class="card-body">
           
            <form class="user">
                <div class="form-group">
                    
                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                            placeholder="Nama Penuh">
                  
            
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                        placeholder="Emel">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" placeholder="No Kad Pengenalan">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user"
                            id="exampleRepeatPassword" placeholder="Repeat Password">
                    </div>
                </div>
                <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Daftar
                </a>
                
            </form>

          </div>
      </div>

@endsection
@extends('include.master')

@section('content')
<!-- Main Content -->


<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="">
          <div class=""></div>
          <div class="">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Pengaturan</h1>
              </div>
              
              <form action="{{ route('ubahpengaturan') }}" method="post">
              {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="email">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                </div>
               
                  <div class="form-group">  
                  <label>Password</label>                                
                    <input type="text" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password Baru">
                  </div>
                
             
                <button class="btn btn-primary btn-user btn-block" type="submit" onclick="return confirm('Yakin ingin menambah data?')">Simpan</button>                      
              </form>    
                                   
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  @endsection
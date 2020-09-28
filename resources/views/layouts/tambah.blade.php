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
                <h1 class="h4 text-gray-900 mb-4">Tambah Siswa</h1>
              </div>
              <form action="{{ route('datasiswa.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">Foto Siswa</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
               
                  <div class="form-group">  
                  <label>Nama Siswa</label>                                
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Siswa">
                  </div>
                  <label>NIS</label>                
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nis" name="nis" placeholder="NIS">
                  </div>
                  <label>Agama</label>                
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="agama" name="agama" placeholder="Agama">
                  </div>
                
                <div class="form-group">
                <label>Tanggal Lahir</label>                
                  <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                </div>

                <div class="form-group">
                <label>Tempat Lahir</label>                
                  <input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" placeholder="Tanggal Lahir">
                </div>
            
                <div class="form-group">
                    <label>Jenis Kelamin</label>          
                    <select class="form-control" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>                                               
                    </select>
                </div>

                <div class="form-group">
                <label>Kelas</label>                
                    <select class="form-control" class="form-control form-control-user" id="kelas" name="kelas">
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>                                               
                    </select>
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
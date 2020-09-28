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
                <h1 class="h4 text-gray-900 mb-4">Edit Siswa</h1>
              </div>
              @foreach($data as $datas)
              <form action="{{ route('datasiswa.update', $datas->id) }}" method="post">
              {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="email">Foto</label>
                    <img src="{{ url('uploads/foto/'.$datas->foto) }}" style="width: 200px; height: 200px;">
                </div>

                <div class="form-group">
                    <label for="email">Foto Siswa</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
               
                  <div class="form-group">  
                  <label>Nama Siswa</label>                                
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" value="{{ $datas->nama }}">
                  </div>
                  <label>NIS</label>                
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nis" name="nis" value="{{ $datas->nis }}">
                  </div>
                  <label>Agama</label>                
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="agama" name="agama" value="{{ $datas->agama }}">
                  </div>
                
                <div class="form-group">
                <label>Tanggal Lahir</label>                
                  <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" value="{{ $datas->tgl_lahir }}">
                </div>

                <div class="form-group">
                <label>Tempat Lahir</label>                
                  <input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" value="{{ $datas->tempat_lahir }}">
                </div>
            
                <div class="form-group">
                    <label>Jenis Kelamin</label>          
                    <select class="form-control" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin" value="{{ $datas->jenis_kelamin }}">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>                                               
                    </select>
                </div>

                <div class="form-group">
                <label>Kelas</label>                
                    <select class="form-control" class="form-control form-control-user" id="kelas" name="kelas" value="{{ $datas->kelas}}">
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>                                               
                    </select>
                </div>
             
                <button class="btn btn-primary btn-user btn-block" type="submit" onclick="return confirm('Yakin ingin menambah data?')">Simpan</button>                      
              </form>    
              @endforeach                        
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  @endsection
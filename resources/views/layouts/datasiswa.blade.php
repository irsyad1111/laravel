@extends('include.master')

@section('content')
<!-- Main Content -->


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">      
      <a href="{{route('datasiswa.create')}}" class="btn btn-sm btn-primary">Tambah</a> 
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>Foto</th>
              <th>Name</th>
              <th>NIS</th>
              <th>Tanggal Lahir</th>
              <th>Agama</th>
              <th>Jenis Kelamin</th>
              <th>Kelas</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Foto</th>
              <th>Name</th>
              <th>NIS</th>
              <th>Tanggal Lahir</th>
              <th>Agama</th>
              <th>Jenis Kelamin</th>
              <th>Kelas</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>            
              @foreach ($data as $datas)
            <tr>
            <td>
                <img src="{{ url('uploads/foto/'.$datas->foto) }}" style="width: 50px; height: 50px;"> </td>
  </td>
              <td>{{$datas->nama}}</td>
              <td>{{$datas->nis}}</td>
              <td>{{$datas->tgl_lahir}}</td>
              <td>{{$datas->agama}}</td>
              <td>{{$datas->jenis_kelamin}}</td>
              <td>{{$datas->kelas}}</td>
              <td>                 
                  <form action="{{ route('datasiswa.destroy', $datas->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="{{route('datasiswa.edit',$datas->id)}}" class="btn btn-sm btn-primary">Edit</a> 
                  <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection

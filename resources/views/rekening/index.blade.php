@extends('layouts.app2')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Rekening</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Rekening </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
          <button type="button"  class="btn bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-lg">
                  Tambah
                </button>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
		<tr>
			<th>Atas Nama</th>
			<th>Alias</th>
			<th>No rekening</th>
			<th>Bank</th>
			<th>Opsi</th>
		</tr>
		@foreach($rek as $p)
		<tr>
			<td>{{ $p->atas_nama }}</td>
			<td>{{ $p->alias }}</td>
			<td>{{ $p->norek }}</td>
			<td>{{ $p->bank }}</td>
			<td>
				<a href="/rekening/edit/{{ $p->idrek }}" class="btn bg-gradient-success btn-sm">Edit</a>
				|
				<a href="/rekening/hapus/{{ $p->idrek }}" class="btn bg-gradient-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	  </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection








      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Rekening</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">            


 <!-- form start -->

              <form role="form" action="/rekening/store" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Atas Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="atas_nama" placeholder="Maskuan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alias</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alias" name="alias">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Rekening</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No Rekening" name="norek">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Bank</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bank" name="bank">
                  </div>
                 <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn bg-gradient-primary btn-sm">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


            


            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
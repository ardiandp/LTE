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
                            <h3 class="card-title">Bordered Table</h3>
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
				<a href="/rekening/edit/{{ $p->idrek }}">Edit</a>
				|
				<a href="/rekening/hapus/{{ $p->idrek }}">Hapus</a>
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
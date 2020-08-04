@extends('layouts.app2')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Dummy</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Products </li>
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
                                	<th> No </th>
                                    <th> Tanggal </th>
                                    <th> Keterangan </th>
                                    <th> Jumlah </th>
                                    <th> Status </th>
                                </tr>
                                </thead>
                                <tbody>
                                	 <?php $no=1 ?>
                                	  @foreach($bca_cv as $bc)
                                	
                                    <tr>
                                    	<td>{{ $no }}</td>
                                        <td>{{ $bc->tanggal }} </td>
                                        <td>{{ $bc->keterangan }}</td>
                                        <td>{{ $bc->jumlah }} </td>
                                        <td>{{ $bc->status }} </td>
                                    </tr>
                                    <?php $no++ ?>
                                    @endforeach
                                     
                                </tbody>
                            </table>
                            <br/>
	Halaman : {{ $bca_cv->currentPage() }} <br/>
	Jumlah Data : {{ $bca_cv->total() }} <br/>
	Data Per Halaman : {{ $bca_cv->perPage() }} <br/>
 
 
	{{ $bca_cv->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
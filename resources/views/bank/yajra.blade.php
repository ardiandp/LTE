<head>
    <title>Laravel 7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>


<table class="table" id="data-bank">
	<head>
		<tr>
			<th>id</th>
			<th>tanggal</th>
			<th>keterangan</th>
		</tr>
	</head>
</table>


<script type="text/javascript">
    $(function() {
        var Table = $('#data-bank').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("bank/json") }}'
            },
            columns: [
            {data: 'id', name: 'id'},
            {data: 'tanggal', name: 'tanggal'},
            {data: 'keterangan', name: 'keterangan'},
            
        ],
        });
    });
</script>

 <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->
        @stack('scripts')



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
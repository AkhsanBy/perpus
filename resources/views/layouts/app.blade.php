<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- Font Awesome -->
  	<link rel="stylesheet" href="/css/all.min.css">
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="/css/ionicons.min.css">
  	<!-- icheck bootstrap -->
  	<link rel="stylesheet" href="/css/icheck-bootstrap.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="/css/adminlte.min.css">
  	<!-- SweetAlert2 -->
  	<link rel="stylesheet" href="/css/sweetalert2.min.css">
  	<!-- DataTables -->
  	<link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css">
  	<link rel="stylesheet" href="/css/responsive.bootstrap4.min.css">
  	<style>
  		.table > tbody > tr > td {
  			vertical-align: middle;
  		}
  	</style>
</head>
<body class="hold-transition layout-top-nav">
	
	<!-- Site wrapper -->
	<div class="wrapper">
	  	@include('layouts.navigation')

	  	<!-- Content Wrapper. Contains page content -->
	  	<div class="content-wrapper">
	  		<div class="container">
			    @include('layouts.pageheader')
			    <!-- Main content -->
			    <section class="content">
					@yield('content')
			    </section>
			    <!-- End Main content -->
			</div>
	  	</div>
		@include('layouts.footer')
	</div>

	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="/js/bootstrap.bundle.min.js"></script>
	<!-- Font Awesome -->
	<script src="/js/all.min.js"></script>
	<!-- DataTables -->
	<script src="/js/jquery.dataTables.min.js"></script>
	<script src="/js/dataTables.bootstrap4.min.js"></script>
	<script src="/js/dataTables.responsive.min.js"></script>
	<script src="/js/responsive.bootstrap4.min.js"></script>
	<!-- SweetAlert2 -->
	<script src="/js/sweetalert2.min.js"></script>
	<!-- AdminLTE App -->
	<script src="/js/adminlte.min.js"></script>
	<script type="text/javascript">
		$('.swalDefaultSuccess').click(function() {
	      	Toast.fire({
	        	icon: 'success',
	        	title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
	      	})
	    });
		var t = $("#example1").DataTable({
	      	"responsive": true,
	      	"autoWidth": false,
	      	"order": [[ 1, 'asc' ]]
	    });
	    t.on( 'order.dt search.dt', function () {
        	t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            	cell.innerHTML = i+1;
        	});
    	}).draw();
	</script>
</body>
</html>
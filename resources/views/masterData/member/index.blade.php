@extends('layouts.app')
@section('title', 'List Member')
@section('content')
	@if (session('created'))
		<div class="alert alert-success alert-dismissible">
	      	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	      	<h5><i class="icon fas fa-check"></i> Alert!</h5>
	      	{{ session('created') }}
	    </div>
    @endif
	<div class="row">
		<div class="col-md-4 mb-4">
			<a href="/data/member/create" class="btn btn-primary">Add Member</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md">
			<div class="card">
              	<div class="card-body">
                	<table id="example1" class="table table-bordered table-striped">
	                  	<thead>
	                  		<tr>
	                  			<th>No</th>
			                    <th>NIM</th>
			                    <th>Name</th>
			                    <th>Birth Place</th>
			                    <th>Date of Birth</th>
			                    <th>Gender</th>
			                    <th>Prodi</th>
			                    <th>Option</th>
	                  		</tr>
	                  	</thead>
	                  	<tbody>
	                  		@foreach($members as $member)
	                  		<tr>
                  				<td></td>
			                    <td>{{ $member['nim'] }}</td>
			                    <td>{{ $member['name'] }}</td>
			                    <td>{{ $member['birth_place'] }}</td>
			                    <td>{{ date("d F Y", strtotime($member['date_of_birth'])) }}</td>
			                    <td>{{ $member['gender'] }}</td>
			                    <td>{{ $member['prodi'] }}</td>
			                    <td>
			                    	<div class="btn-group-vertical">
			                    		<a href="/data/member/edit/{{ $member['id'] }}" class="badge badge-success">Edit</a>
			                    		<form action="/data/member/delete/{{ $member['id'] }}" method="post">
			                    			@method('delete')
			                    			@csrf
			                    			<button type="submit" class="badge badge-danger">Delete</button>
			                    		</form>
			                    	</div>
			                    </td>
	                  		</tr>
			                @endforeach
	                  	</tbody>
	                  	<tfoot>
	                  		<tr>
	                  			<th>No</th>
			                    <th>NIM</th>
			                    <th>Name</th>
			                    <th>Birth Place</th>
			                    <th>Date of Birth</th>
			                    <th>Gender</th>
			                    <th>Prodi</th>
			                    <th>Option</th>
	                  		</tr>
	                  	</tfoot>
                	</table>
              	</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
		</div>
	</div>
@stop
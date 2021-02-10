@extends('layouts.app')
@section('title', 'List Book')
@section('content')
	<div class="row">
		<div class="col-md-4 mb-4">
			<a href="/data/book/create" class="btn btn-primary">Add Book</a>
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
			                    <th>Cover</th>
			                    <th>Title</th>
			                    <th>ISBN</th>
			                    <th>Author</th>
			                    <th>Publisher</th>
			                    <th>Year</th>
			                    <th>Total Book</th>
			                    <th>Option</th>
	                  		</tr>
	                  	</thead>
	                  	<tbody>
	                  		@foreach($books as $book)
	                  		<tr>
			                    <td></td>
			                    <td>
			                    	<img class="img-thumbnail" width="50" height="50" src="{{ asset("storage/" . $book['cover']) }}" alt="">
			                    </td>
			                    <td>{{ $book['title'] }}</td>
			                    <td>{{ $book['isbn'] }}</td>
			                    <td>{{ $book['author'] }}</td>
			                    <td>{{ $book['publisher'] }}</td>
			                    <td>{{ $book['year'] }}</td>
			                    <td>{{ $book['total'] }}</td>
			                    <td>
			                    	<div class="btn-group-vertical">
			                    		<a href="#" class="badge badge-success">Edit</a>
			                    		<a href="#" class="badge badge-danger">Delete</a>
			                    	</div>
			                    </td>
	                  		</tr>
	                  		@endforeach
	                  	</tbody>
	                  	<tfoot>
	                  		<tr>
			                    <th>No</th>
			                    <th>Cover</th>
			                    <th>Title</th>
			                    <th>ISBN</th>
			                    <th>Author</th>
			                    <th>Publisher</th>
			                    <th>Year</th>
			                    <th>Total Book</th>
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
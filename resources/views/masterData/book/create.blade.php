@extends('layouts.app')
@section('title', 'Add Book')
@section('content')
	<div class="card card-primary">
	  	<!-- form start -->
	  	<form action="/data/book/store" method="post" role="form" enctype="multipart/form-data">
	        <div class="card-body">
	        	@csrf
	        	<div class="mb-3">
	        		<label for="cover" class="d-flex">Cover</label>
	        		<input type="file" name="cover" id="cover">
	        		@error('cover')
		              	<div class="text-danger">
		                	<small>{{ $message }}</small>
		              	</div>
		            @enderror
	        	</div>
	          	<div class="form-group">
	            	<label for="title">Title</label>
	            	<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Title Book">
	            	@error('title')
		              	<div class="invalid-feedback mb-2">
		                	{{ $message }}
		              	</div>
		            @enderror
	          	</div>
	          	<div class="form-group">
	            	<label for="isbn">ISBN</label>
	            	<input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" id="isbn" placeholder="ISBN Book">
	            	@error('isbn')
		              	<div class="invalid-feedback mb-2">
		                	{{ $message }}
		              	</div>
		            @enderror
	          	</div>
	          	<div class="form-group">
	            	<label for="author">Author</label>
	            	<input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author" placeholder="Author Book">
	            	@error('author')
		              	<div class="invalid-feedback mb-2">
		                	{{ $message }}
		              	</div>
		            @enderror
	          	</div>
	          	<div class="form-group">
	            	<label for="publisher">Publisher</label>
	            	<input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" id="publisher" placeholder="Publisher Book">
	            	@error('publisher')
		              	<div class="invalid-feedback mb-2">
		                	{{ $message }}
		              	</div>
		            @enderror
	          	</div>
	          	<div class="form-group">
	            	<label for="year">Year Published</label>
	            	<input type="text" class="form-control @error('year') is-invalid @enderror" name="year" id="year" placeholder="Year Published of Book">
	            	@error('year')
		              	<div class="invalid-feedback mb-2">
		                	{{ $message }}
		              	</div>
		            @enderror
	          	</div>
	          	<div class="form-group">
	            	<label for="total">Total Book</label>
	            	<input type="number" class="form-control @error('total') is-invalid @enderror" name="total" id="total" placeholder="Total Book">
	            	@error('total')
		              	<div class="invalid-feedback mb-2">
		                	{{ $message }}
		              	</div>
		            @enderror
	          	</div>
	        </div>
	        <div class="card-footer">
	          <button type="submit" class="btn btn-primary">Add</button>
	          <a href="/data/book" class="btn btn-secondary">Cancel</a>
	        </div>
	  	</form>
	</div>
	<!-- /.card -->
@stop
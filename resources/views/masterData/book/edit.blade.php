@extends('layouts.app')
@section('title', 'Edit Book')
@section('content')
	<div class="card card-primary">
	  	<!-- form start -->
	  	<form action="" method="post" role="form" enctype="multipart/form-data">
	        <div class="card-body">
	          	<div class="form-group">
	            	<label for="title">Title</label>
	            	<input type="text" class="form-control" name="title" id="title" placeholder="Enter Title Book">
	          	</div>
	          	<div class="form-group">
	            	<label for="isbn">ISBN</label>
	            	<input type="text" class="form-control" name="isbn" id="isbn" placeholder="Enter ISBN Book">
	          	</div>
	          	<div class="form-group">
	            	<label for="author">Author</label>
	            	<input type="text" class="form-control" name="author" id="author" placeholder="Enter Author Book">
	          	</div>
	          	<div class="form-group">
	            	<label for="publisher">Publisher</label>
	            	<input type="text" class="form-control" name="publisher" id="publisher" placeholder="Enter Publisher Book">
	          	</div>
	          	<div class="form-group">
	            	<label for="year">Year Published</label>
	            	<input type="text" class="form-control" name="year" id="year" placeholder="Enter Year Published of Book">
	          	</div>
	          	<div class="form-group">
	            	<label for="total">Total Book</label>
	            	<input type="text" class="form-control" name="total" id="total" placeholder="Enter Total Book">
	          	</div>
	          	<div class="form-group">
                    <label for="exampleInputFile">Upload Cover</label>
                    <div class="input-group">
                      	<div class="custom-file">
                        	<input type="file" class="custom-file-input" id="exampleInputFile">
                        	<label class="custom-file-label" for="exampleInputFile">Choose Cover</label>
                      	</div>
                      	<div class="input-group-append">
                       		<span class="input-group-text" id="">Upload</span>
                      	</div>
                    </div>
                </div>
	        </div>
	        <div class="card-footer">
	          <button type="submit" class="btn btn-primary">Edit</button>
	          <a href="/data/book" class="btn btn-secondary">Cancel</a>
	        </div>
	  	</form>
	</div>
	<!-- /.card -->
@stop
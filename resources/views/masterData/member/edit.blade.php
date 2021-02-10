@extends('layouts.app')
@section('title', 'Edit Member')
@section('content')
	<div class="card card-primary">
	  	<!-- form start -->
	  	<form action="/data/member/update/{{ $member['id'] }}" method="post" role="form">
	        <div class="card-body">
	        	@method('patch')
	        	@csrf
	          	<div class="form-group">
	            	<label for="nim">NIM</label>
	            	<input type="text" class="form-control" name="nim" id="nim" placeholder="Enter NIM" value="{{ old('nim') ? old('nim') : $member['nim'] }}">
	          	</div>
	          	<div class="form-group">
	            	<label for="name">Name</label>
	            	<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Member" value="{{ old('name') ? old('name') : $member['name'] }}">
	          	</div>
	          	<div class="form-group">
	            	<label for="birth_place">Birth Place</label>
	            	<input type="text" class="form-control" name="birth_place" id="birth_place" placeholder="Enter Birth Place" value="{{ old('birth_place') ? old('birth_place') : $member['birth_place'] }}">
	          	</div>
	          	<div class="form-group">
	              	<label>Date of Birth</label>
	              	<div class="input-group">
	                    <div class="input-group-prepend">
	                      	<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
	                    </div>
	                    <input type="text" class="form-control" name="date_of_birth" placeholder="dd/mm/yyyy" value="{{ old('date_of_birth') ? old('date_of_birth') : $member['date_of_birth'] }}">
	              	</div>
	            </div>
	          	<div class="form-group">
	                <label>Gender</label>
	                <select class="form-control" name="gender">
	                  <option disabled selected>Choose One</option>
	                  <option {{ ($member['gender'] === 'Male') ? 'selected' : '' }}>Male</option>
	                  <option {{ ($member['gender'] === 'Female') ? 'selected' : '' }}>Female</option>
	                </select>
	          	</div>
	          	<div class="form-group">
	                <label>Prodi</label>
	                <select class="form-control" name="prodi">
	                	<option disabled selected>Choose One</option>
	                  	<option {{ ($member['prodi'] === 'TI') ? 'selected' : '' }}>TI</option>
	                 	<option {{ ($member['prodi'] === 'SI') ? 'selected' : '' }}>SI</option>
	                  	<option {{ ($member['prodi'] === 'MI') ? 'selected' : '' }}>MI</option>
	                </select>
	          	</div>
	        </div>
	        <div class="card-footer">
	          <button type="submit" class="btn btn-primary">Edit</button>
	          <a href="/data/member" class="btn btn-secondary">Cancel</a>
	        </div>
	  	</form>
	</div>
	<!-- /.card -->
@stop
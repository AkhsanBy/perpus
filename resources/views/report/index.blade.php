@extends('layouts.app')
@section('title', 'Report')
@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">
		            <h3 class="card-title">Report Transaction</h3>
		        </div>
		        <div class="margin mx-3 my-3">
					<div class="btn-group">
				        <button type="button" class="btn btn-primary">Export to</button>
				        <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
				          <span class="sr-only">Toggle Dropdown</span>
				          <div class="dropdown-menu" role="menu">
				            <a class="dropdown-item" href="#">PDF</a>
				            <a class="dropdown-item" href="#">Excel</a>
				          </div>
				        </button>
				    </div>
		        </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">
		            <h3 class="card-title">Report Book</h3>
		        </div>
		        <div class="margin mx-3 my-3">
					<div class="btn-group">
				        <button type="button" class="btn btn-primary">Export to</button>
				        <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
				          <span class="sr-only">Toggle Dropdown</span>
				          <div class="dropdown-menu" role="menu">
				            <a class="dropdown-item" href="#">PDF</a>
				            <a class="dropdown-item" href="#">Excel</a>
				          </div>
				        </button>
				    </div>
		        </div>
			</div>
		</div>
	</div>
@stop
@extends('layouts.admin')

@section('content')
	@include("partials.errors")
	<div class="row">
		<div class="col-lg-12">
			<form action="{{ route("admin.create") }}" method="post">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title">
				</div>

				<div class="form-group">
					<label for="">Content</label>
					<input type="text" name="content" id="content" class="form-control">
				</div>
				@csrf
				<input type="submit" class="btn btn-primary" value="Submit">
			</form>

		</div>
	</div>

@endsection
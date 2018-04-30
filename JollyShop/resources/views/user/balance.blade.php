@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">{{ $user->name }}'s balance</div>
	                <div class="card-body">
	                	<form method="POST" action="/account/">
							{{-- {{ method_field('PUT') }} --}}
							{{ csrf_field() }}
							<div class="form-group">
						    	<label for="balance">Top Up Ammount</label>
						    	<div class="form-check">
								    <input type="radio" name="topup" value="20"> 20
								</div>
								<div class="form-check">
								    <input type="radio" name="topup" value="50"> 50
								</div>
								<div class="form-check">
								    <input type="radio" name="topup" value="100"> 100
								</div>
						  	</div>
						  	<div class="form-group">
						  		<button type="submit" class="btn btn-primary">Top Up</button>
						  	</div>
						</form>
						@include('layouts.error')
						
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
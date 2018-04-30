@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Account</div>
                <div class="card-body">
                    <table class="table">
						<tr>
							<th>User ID</th>
							<td>{{ $user->id }}</td>
						</tr>
						<tr>
							<th>Nama</th>
							<td>{{ $user->name }}</td>
						</tr>
						<tr>
							<th>Email</th>
							<td>{{ $user->email }}</td>
						</tr>
						<tr>
							<th>Balance</th>
							<td>
								{{ $user->balance }}   
								<a class="btn btn-small btn-success" href="account/balance" role="button">Top Up</a>
							</td>
						</tr>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
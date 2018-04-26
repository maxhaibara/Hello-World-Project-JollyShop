<!DOCTYPE html>
<html>
<head>
	<title>JollyShop</title>
</head>
<h1>Your Account</h1>
<body>
<table border="1">
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
		<td>{{ $user->balance }}</td>
	</tr>
</table>
<a href="/home">Go Back To Home</a>
</body>
</html>
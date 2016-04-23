<!DOCTYPE html>
<html lang="en">
<head>
<title>justLaravel - Routing in Laravel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="fluid-container">
		<h2>Sample User details</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@foreach($details as $user)
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
	{!! $details->render() !!}
</body>
</html>
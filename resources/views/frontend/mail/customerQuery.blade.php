<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Customer Query</title>
	</head>
	<body>
		
		<table style="width: 100%;">
			<tr>
				<td width="10%">Name</td>
				<td width="2%">:</td>
				<td width="88%">{{$data['name']}}</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td>{{$data['phone']}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>{{$data['email']}}</td>
			</tr>
			<tr>
				<td>Message:</td>
				<td>:</td>
				<td>{{$data['message']}}</td>
			</tr>
		</table>
	</body>
</html>
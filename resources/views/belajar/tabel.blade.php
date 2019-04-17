@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>laravel</title>
</head>
<body>
	<center>
		<form action="/insert" method="post">
			<table>
				<tr>
					{{ csrf_field() }}
					<td>judul</td>
					<td><input type="text" name="judul"></td>
				</tr>
				<tr>
					<td>penerbit</td>
					<td><input type="text" name="penerbit"></td>
				</tr>
				<tr>
					<td>tahun terbit</td>
					<td><input type="text" name="tahun"></td>
				</tr>
				<tr>
					<td>pengarang</td>
					<td><input type="text" name="pengarang"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Add"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
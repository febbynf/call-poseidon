<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read</title>
</html>
	<style>
	table,thead,th,tr,td{
		border-collapse: collapse;
		border: 1px solid black;
		padding-left: 1.5cm;
	}
	</style>
</head>
<body>
	<form action="store" method="post">
		<label for="name">Jenis gelas</label>
		<input type="text" name="name"><br/>
		<label for="volume">Volume</label>
		<input type="text" name="volume">

		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<label for=""></label>
	<input type="submit" name="submit" value="Submit">


	</form>


	<table style="width:50%">
		<thead> 
			<th>Id</th>
			<th>Name</th>
			<th>Volume</th>

		</thead>
		@foreach($gelas as $gelases)
		<tr>
			<td>{{$gelases->id}}</td>
			<td>{{$gelases->name}}</td>
			<td>{{$gelases->volume}}</td>

		</tr>
		@endforeach
	</table>

<br><br>

</body>
</html>
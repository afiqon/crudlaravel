<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="row">\
	<div>
		<form method="post" action="{{route('biodata.store')}}">
			{{csrf_field()}}
			<h1>Tambah Biodata</h1>

			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" placeholder="nama" class="form-control">
			</div>

			<div class="form-group">
				<label>No Hp</label>
				<input type="text" name="hp" placeholder="hp" class="form-control">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<textarea class="form-control" name="alamat" rows="5"></textarea>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-info">Submit</button>
			</div>
		</form>
	</div>
</div>

<div class="row">
	<center><h1>Biodata</h1></center>
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nama</th>
					<th>No Hp</th>
					<th>Alamat</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($biodatas as $biodata)
				<tr>
					<td>{{$biodata->nama}}</td>
					<td>{{$biodata->hp}}</td>
					<td>{{$biodata->alamat}}</td>
					<td>
						<a href="#" class="btn btn-success">Edit</a>
						<a href="#" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
  	<script src="https://code.jquery.com/jquery-3.3.1.js"
  	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  	crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
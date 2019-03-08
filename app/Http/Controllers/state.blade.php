<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">st_name</th>
							<th scope="col">cn_id</th>
						</tr>
					</thead>
					<tbody>
				@foreach($postdata as $post)
				<tr>
					<th scope="row">{{$post->id}}</th>
					<td>{{$post->st_name}}</td>
					<td>{{$post->cn_id}}</td>
				</tr>
				@endforeach
			</tbody>
				</table>
				</div>
			</div>
</body>
</html>
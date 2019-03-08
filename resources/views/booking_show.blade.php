<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
			<div class="col-12">
				<table class="table" border="1">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">pack_id</th>
							<th scope="col">book_date</th>
							<th scope="col">user_id</th>
							<th scope="col">description</th>
						</tr>
					</thead>
					<tbody>
				@foreach($postdata as $post)
				<tr>
					<th scope="row">{{$post->id}}</th>
					<td>{{$post->pack_id}}</td>
					<td>{{$post->book_date}}</td>
					<td>{{$post->user_id}}</td>
					<td>{{$post->description}}</td>
				</tr>
				@endforeach
			</tbody>
			</table>
			</div>
</div>
</body>
</html>
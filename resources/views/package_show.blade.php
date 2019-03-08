<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">pack_name</th>
							<th scope="col">cat_id</th>
							<th scope="col">ct_id</th>
							<th scope="col">hotel_id</th>
							<th scope="col">pack_desc</th>
							<th scope="col">pack_price</th>
							<th scope="col">pack_image1</th>
							<th scope="col">pack_image2</th>
							<th scope="col">pack_image3</th>
							<th scope="col">source</th>
							<th scope="col">destination</th>
							<th scope="col">travel_by</th>
							<th scope="col">date-time</th>
							<th scope="col">delete</th>
							<th scop<e="col">update</th>
						</tr>
					</thead>
					<tbody>
				@foreach($postdata as $post)
				<tr>
					<th scope="row">{{$post->id}}</th>
					<td>{{$post->pack_name}}</td>
					<td>{{$post->cat_id}}</td>
					<td>{{$post->ct_id}}</td>
					<td>{{$post->hotel_id}}</td>
					<td>{{$post->pack_desc}}</td>
					<td>{{$post->pack_price}}</td>
					<td>{{$post->pack_image1}}</td>
					<td>{{$post->pack_image2}}</td>
					<td>{{$post->pack_image3}}</td>
					<td>{{$post->source}}</td>
					<td>{{$post->destination}}</td>
					<td>{{$post->travel_by}}</td>
					<td>{{$post->date_time}}</td>
					<td><a href="{{route('packagedeletepost',['id'=>$post->id])}}">delete</a></td>
					<td><a href="{{route('packageupdatepost',['id'=>$post->id])}}">update</a></td>
				</tr>
				@endforeach
			</tbody>
				</table>
				</div>
			</div>
		</div>
</body>
</html>
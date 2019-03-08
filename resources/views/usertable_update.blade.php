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
 			<form class="" action="{{route('usersaveupdatedpost')}}" method="post" >
 				{{csrf_field()}}
 				<input type="hidden" name="id" value="{{$post->id}}">
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">user_name</label>
 						<input type="text" name="user_name"  class="form-control" value="{{$post->user_name}}"/>
 					</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">user_address</label>
 						<input type="text" name="address"  class="form-control" value="{{$post->user_address}}"/>
 					</div>
 					</div>
 				</div>

 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">user_phoneno</label>
 						<input type="text" name="phoneno"  class="form-control" value="{{$post->user_phoneno}}"/>
 					</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">user_email</label>
 						<input type="email" name="email"  class="form-control" value="{{$post->user_email}}"/>
 					</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">user_password</label>
 						<input type="password" name="password"  class="form-control" value="{{$post->user_password}}"/>
 					</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">description</label>
 						<textarea name="description" rows="8" cols="80" class="form-control">{{$post->description}}</textarea>
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">hotel</label>
 						<select name="hotel_id">
 							<option value="1">2 star</option>
 							<option value="2">3 star</option>
 						</select>
 							</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<button type="submit" class="btn btn-primary">save</button>
 					</div>
 					</div>
 			</form>
 		</div>
 	</div>
 </div>
</body>
</html>
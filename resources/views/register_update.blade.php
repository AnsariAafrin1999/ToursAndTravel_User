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
 			<form class="" action="{{route('saveupdatedpost')}}" method="post" >
 				{{csrf_field()}}
 				<input type="hidden" name="id" value="{{$post->cat_id}}">
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">first_name</label>
 						<input type="text" name="name"  class="form-control" value="{{$post->first_name}}"/>
 					</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">last_name</label>
 						<input type="text" name="name"  class="form-control" value="{{$post->last_name}}"/>
 					</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">email_address</label>
 						<input type="text" name="email_address"  class="form-control" value="{{$post->email_address}}"/>
 					</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">password</label>
 						<input type="text" name="password"  class="form-control" value="{{$post->password}}"/>
 					</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">confirm_password</label>
 						<input type="text" name="name"  class="form-control" value="{{$post->cinfirm_password}}"/>
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
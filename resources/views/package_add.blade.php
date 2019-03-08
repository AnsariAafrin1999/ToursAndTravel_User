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
 			<form class="" action="{{route('packagesave')}}" method="post" >
 				{{csrf_field()}}
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">pack_name</label>
 						<input type="text" name="name" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">category</label>
 						<select name="cat_id">
 							<option value="1">group</option>
 							<option value="2">couple</option>
 							<option value="3">custome</option>
 							<option value="4">family</option>
 						</select>
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">city</label>
 						<select name="ct_id">
 							<option value="1">ahmedabad</option>
 							<option value="2">mumbai</option>
 							<option value="1">delhi</option>
 							<option value="1">rajasthan</option>
 						</select>
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
 						<div class="form-group">
 						<label for="">Pack_desc</label>
 						<input type="text" name="description" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">pack_price</label>
 						<input type="text" name="price" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">pack_image1</label>
 						<input type="text" name="text" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
  				</div>
  				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">pack_image2</label>
 						<input type="text" name="text1" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
  				</div>
  				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">pack_image3</label>
 						<input type="text" name="text2" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">source</label>
 						<input type="text" name="source" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
  				</div>
  				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">destination</label>
 						<input type="text" name="destination" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">travel_by</label>
 						<input type="text" name="travel_by" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<div class="form-group">
 						<label for="">date-time</label>
 						<input type="text" name="date_time" value="" class="form-control"/>	
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-12">
 						<button type="submit" class="btn btn-primary">add data</button>
 					</div>
 					</div>
 			</form>
 		</div>
 	</div>
 </div>
</body>
</html>
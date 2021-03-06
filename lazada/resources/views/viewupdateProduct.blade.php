<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="Thêm sản phẩm" class="tabcontent">
		<h1>Cập nhật sản phẩm</h1>
	<table>
	{{Form::open(['url'=>'updateProduct','files'=>'true'])}}
	<tr>
		<td>Product Name:</td>
		<td>{{ Form::text('name',$product->name,['disable'=>true]) }}</td>
	</tr>
	<tr>
		<td>Image</td>
		<td>{{Form::file('image')}}</td>
	</tr>
	<tr>
		<td>Description:</td>
		<td>{{ Form::textarea('description',$product->description) }}</td>
	</tr>
	<tr>
		<td>Price:</td>
		<td>{{ Form::text('price',$product->price) }}</td>
	</tr>
	<tr>
		<td>Sale:</td>
		<td>{{ Form::text('sale',$product->sale) }}%</td>
	</tr>
	<tr>
		<td>Category:</td>
		<td>{{ Form::select('category_id',$category_pluck,$product->category_id)}}</td>
	</tr>
	<tr>
		<td>Trademark:</td>
		<td>{{ Form::select('trademark_id',$trademark_pluck,$product->trademark_id)}}</td>
	</tr>
	<tr>
		<td></td>
		<td>{{Form::submit('Update')}}</td>
	</tr>
	
	{{Form::hidden('id',$product->id)}}
	{{Form::close()}}
	</table>
	<h2>Nhận xét hàng đầu</h2>
	@foreach($review_all as $review)
	<h4>{{$review->email_customer}}</h4>
	{{$review->comment}}<br>
	Vote:{{$review->vote }}*<br>
	<a href="{{url('deleteReview/'.$review->id)}}">Delete</a><br>
	@endforeach
	</div>

</body>
</html>
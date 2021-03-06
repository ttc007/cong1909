@extends('master')
@section('content')
<h1>MARKETPLACE/{{ $product->name }}</h1>
<img src="{{asset('images/'.$product->id.'.png')}}" style="width: 400px;height: 400px">

<h4>Đánh giá:chưa có đánh giá nào</h4>
<h3>Giá:{{ number_format($product->price )}}
<h4></h4>
@if($product->sale>0)<h4>Sale:<span style="font-size: 100%;background: red;padding: .3em" >-{{number_format($product->sale,0)}}%</span></h4>@endif</h3>
<br>
<a href="{{url('addtocart/'.$product->id)}}" id="muangay">Mua ngay</a>

<h4 style="clear: both;">{{ $product->description }}</h4>


<h2>Nhận xét hàng đầu</h2>
@foreach($review_all as $review)
<h4>{{$review->email_customer}}</h4>
{{$review->comment}}<br>
Vote:{{$review->vote }}*<br>
@endforeach

<h3>Nhận xét của bạn</h3>
{{Form::open(['url'=>'reviewProduct'])}}
<table>
	<tr>
		<td>Email:</td>
		<td>{{ Form::text('email_customer') }}</td>
	</tr>
	<tr>
		<td>Comment</td>
		<td>{{Form::textarea('comment')}}</td>
	</tr>
	<tr>
		<td>Vote</td>
		<td>{{ Form::select('vote',['1'=>'1*','2'=>'2*','3'=>'3*','4'=>'4*','5'=>'5*']) }}</td>
	</tr>
	<tr>
		<td></td>
		<td>{{Form::submit('Review')}}</td>
	</tr>
	
	{{Form::hidden('product_id',$product->id)}}
	{{Form::close()}}

</table>
@stop
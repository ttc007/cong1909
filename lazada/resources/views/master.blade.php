<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="{{'css/main.css'}}">
	
</head>
<body onload="openTab(event, 'Khyen mai')">
<header>
	<div>
			<ul>
			<li><a href="{{url('admin')}}" style="color:#f36f36;">Admin</a></li>
			<li><a href="">CHANGE LANGUAGE</a></li>
			<li><a href="">Dang ki</a></li>
			<li><a href="">Dang nhap</a></li>
			<li><a href="">Kiem Tra don Hang</a></li>
			<li><a href="">Cham Soc Khach Hang</a></li>
			<li><a href="" style="color:#0dfffa;">BAN HANG CUNG LAZADA</a></li>
			<li><a href="" style="color:#f36f36;">Tai APP LAZADA</a></li>
		</ul>
	</div>
	<nav>
		<a href=""><img src="{{'images/lazada.png'}}" style="float: left;margin-left: 4em;"></a>

		<input type="text" name="" placeholder="Tim kiem san pham ban mong muon..." id='inputSeach' >
		<a href=""><img src="{{'images/seachIcon.png'}}" style='margin-top:1.5em;'></a>
		<img src="{{'images/giohang.png'}}">
	</nav>
	<section>
		<ul>
			@foreach($industry_all as $industry)
				<li><a href="">{{ $industry->name }}</a>
					<ul>
				 	@foreach($category_all as $category)
				 		@if( $category->industry_id == $industry->id)
				 		<li><a href="">{{ $category->name }}</a></li>
				 		@endif
				 	@endforeach
				 	<h3 style="float: left;clear: left;margin-top: 1em">Thương hiệu hàng đầu</h3>
				 	@foreach($trademark_all as $trademark)
				 		@if( $trademark->industry_id == $industry->id)
				 		<li style="float: left;clear: left;"><a href="">{{ $trademark->name }}</a></li>
				 		@endif
				 	@endforeach
				 	</ul>
				</li>
			@endforeach
			
			<li><a href=""  style="color:#f36f36;">Khuyen mai</a></li>
			<li><a href="">Thương hiệu lớn</a></li>
		</ul>
	</section>
</header>
<main>
	<div>
		<ul>
			<li id='khuyenmaiTab' onmouseover="openTab(event, 'Khyen mai')" class="tablinks"><a href="" >Khyen mai</a></li>
			<li onmouseover="openTab(event, 'Thuong hieu noi bat')" class="tablinks"><a href="" >Thuong hieu noi bat</a></li>
			<li onmouseover="openTab(event, 'Danh muc nganh hang')" class="tablinks"><a href="" >Danh muc&nganh hang</a></li>
			<li id='samsungTab'onmouseover="openTab(event, 'Tuan le SamSumg')" class="tablinks"><a href="" >Tuan le SamSumg</a></li>
		</ul>
	</div>


<div id="Khyen mai" class="tabcontent">
  <h3>Khyen mai</h3>
  <p>Mac hang Khyen mai</p>
</div>

<div id="Thuong hieu noi bat" class="tabcontent">
  <h3>Thuong hieu noi bat</h3>
  <p>Cac Thuong hieu noi bat.</p> 
</div>

<div id="Danh muc nganh hang" class="tabcontent">
  <h3>Danh muc&nganh hang</h3>
  <p> Cac Danh muc&nganh hang</p>
</div>
<div id="Tuan le SamSumg" class="tabcontent">
  <h3>Tuan le SamSumg</h3>
  <p> Mac hang Tuan le SamSumg</p>
</div>

<script>
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

@foreach($product_all as $product)
<div style="width: 250px;height: 250px;float: left;">
<img src="{{'images/'.$product->id.'.png'}}" style="width: 200px;height: 200px">
<h1>{{ $product->name }}</h1><br>
<h3>Giá:{{ $product->price }}</h3>

</div>
@endforeach
</main>


<footer>
	<h2>Develop by PHP16's team</h2>
</footer>
</body>
</html>
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
			<li><a href="">Dien tu</a></li>
			<li><a href="">Thoi trang nu</a></li>
			<li><a href="">Thoi trang nam</a></li>
			<li><a href="">Nha cua & doi song</a></li>
			<li><a href="">Suc khoe & Sac dep</a></li>
			<li><a href="" >Tre em & do choi</a></li>
			<li><a href="">The thao & Du lich</a></li>
			<li><a href="">Xe may & Bach hoa</a></li>
			<li><a href=""  style="color:#f36f36;">Khuyen mai</a></li>
			<li><a href="">Thuong hieu lon</a></li>
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
</main>


<footer>
	<h2>Develop by PHP16's team</h2>
</footer>
</body>
</html>
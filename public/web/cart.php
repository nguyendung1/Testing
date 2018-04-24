<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		 <meta charset="utf-8">
		<title>Mobilestore Website Template | single :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
		<script src="js/jqzoom.pack.1.0.1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/jqzoom.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript">
			$(function() {
				$(".jqzoom").jqzoom();
			});
		</script>
		<script>
		$(document).ready(function(){
			$(".menu_body").hide();
			//toggle the componenet with class menu_body
			$(".menu_head").click(function(){
				$(this).next(".menu_body").slideToggle(600); 
				var plusmin;
				plusmin = $(this).children(".plusminus").text();
				
				if( plusmin == '+')
				$(this).children(".plusminus").text('-');
				else
				$(this).children(".plusminus").text('+');
			});
		});
		</script>
	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form>
					<input type="text"><input type="submit" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
	            	<ul>
				    <li><a href="#">Đăng Kí</a></li>
					<li><a href="#">Đăng Nhập</a></li>
					<li><a href="#">Phát Triển</a></li>
					<li><a href="#">Thanh Toán</a></li>
					<li><a href="#">Tài Khoản Của Tôi</a></li>
					<li><a href="#"><span>shopingcart &nbsp;: </span></a><lable> &nbsp;(Trống)</lable></li>

				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				 <li><a href="index.html">Trang Chủ</a></li>
				<li><a href="about.html">Giới Thiệu</a></li>
				<li><a href="store.html">Store</a></li>
				<li><a href="store.html">Đặc Trưng</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Liên Hệ</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
		<main>
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids" style="width: 100%;">
		    	<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="#">Home</a><img src="images/arrow.png" alt=""></li>
		    				
		    				
		    				<li><a href="#">Details</a><img src="images/arrow.png" alt=""></li>
		    				<li><a href="#">Cart</a><img src="images/arrow.png" alt=""></li>
		    			</ul>
		    		</div>
		    	</div>
		    	

		    	
		    	
		    	     <div class="detalis-image-details" style="width: 100%;">
		    	           <h3>Giỏ Hàng Của Bạn(1 sản phẩm)</h3>
                            
		    	           <table class="w3-table-all" style="width:60%;float: left;">
		    	           	   <tr>
		    	           	   	   <th>Hình Ảnh Sản Phẩm</th>
		    	           	   	   <th>Tên Sản Phẩm</th>
		    	           	   	   <th>Giá Tiền</th>
		    	           	   	   <th>Số Lượng</th>
		    	           	   </tr>
		    	           	   <tr>
		    	           	   	  <td><img class="w3-card" src="images/m4.jpg" height="250" width="200" style="height:auto;"></td>
		    	           	   	   <td style="padding-top: 4em;">Nonoka 32323</td>
		    	           	   	  <td style="padding-top: 4em;">23232 <sup><u>đ</u></sup></td>
		    	           	   	    <td style="padding-top: 4em;">1</td>
		    	           	   </tr>
		    	           	  
		    	           </table>

		    	         
		    	         	<table class="w3-table-all" style="width: 40%;">
		    	         		<tr>
		    	         			<th>Tạm Tính : </th>
		    	         			<th>3300,232 <sup><u>đ</u></sup></th>
		    	         		</tr>
		    	         		<tr>
		    	         			<th>Thành Tiền : </th>
		    	         			<th>3300,232 <sup><u>đ</u></sup></th>
		    	         		</tr>
		    	         		
		    	         		 
		    	         		
		    	         	</table>
		    	         	<td><a  style="background-color:brown;color: white;padding:.5em 4px;border-radius:5px;" href="#">Tiến Hành Đặt Hàng</a></td>
		    	         
					</div>
			</div>
			
		    	</div>
		    	
		    </div>
		    <div class="clear"> </div>
		    </div>

		</main>
		<div class="footer">
			<div class="wrap">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Our Info</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Latest-News</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Store Location</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<h3>Order-online</h3>
					<p>080-1234-56789</p>
					<p>080-1234-56780</p>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>News-Letter</h3>
					<input type="text"><input type="submit" value="go" />
					<h3>Fallow Us:</h3>
					 <ul>
					 	<li><a href="#"><img src="images/twitter.png" title="twitter" />Twitter</a></li>
					 	<li><a href="#"><img src="images/facebook.png" title="Facebook" />Facebook</a></li>
					 	<li><a href="#"><img src="images/rss.png" title="Rss" />Rss</a></li>
					 </ul>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>


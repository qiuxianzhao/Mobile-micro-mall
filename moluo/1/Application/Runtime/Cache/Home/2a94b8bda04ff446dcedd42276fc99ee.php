<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>微官网</title>
	<meta name="Keywords" content="" />
  <meta name="Description" content="" />
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">

	<!-- Mobile Devices Support @begin -->
	<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
	<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
	<meta content="no-cache" http-equiv="pragma">
	<meta content="0" http-equiv="expires">
	<meta content="telephone=no, address=no" name="format-detection">
	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<!-- Mobile Devices Support @end -->
	<link rel="stylesheet" href="./Public/Home/css/index.css" />
	<script src="./Public/Home/js/jquery-1.9.1.min.js"></script>
	<script src="./Public/Home/js/main.js"></script>
	<script src="./Public/Home/js/jquery.rotate.min.js"></script>
	<script src="./Public/Home/js/jQuery-jcMarquee.js"></script>
	<script src="./Public/Home/js/idangerous.swiper-1.9.1.min.js"></script>
	<script>
	$(function(){
		//Main Swiper
		var swiper = new Swiper('.swiper1', {
			pagination : '.pagination1',
			loop:true,
			autoPlay:5000,
			grabCursor: true
		});
		//Clickable pagination
		$('.pagination1 .swiper-pagination-switch').click(function(){
			swiper.swipeTo($(this).index())
		});		
	});
	</script>
</head>

<body>
<div class="main">
	<!--头部-->
	<div class="header" id="bktop">
		<div class="logo"><a href="index.html"><img src="./Public/Home/images/logo.gif" /></a></div>
		<div class="banner">
			<div class="close"><img id="img1" src="./Public/Home/images/banner01.gif" /></div>
			<div class="open hide"><img id="img2" src="./Public/Home/images/banner02.gif" /></div>
			<ul class="xla">
				<li>
					<a href="about.html"><font>关于123489我们</font><img src="./Public/Home/images/xiala.gif" /></a>
				</li>
				<li>
					<a class="dianj dj1" href="javascript:;"><font>最新1234567资讯</font><img id="ig1" src="./Public/Home/images/xiala.gif" /></a>
					<div class="zilan">
						<a href="<?php echo U('Admin/Index/news');?>">服饰搭配</a>
						<a href="<?php echo U('Admin/Index/news');?>">时尚家居</a>
						<a href="<?php echo U('Admin/Index/news');?>">美食特产</a>
					</div>
				</li>
				<li>
					<a class="dianj dj2" href="javascript:;"><font>图片墙</font><img id="ig2" src="./Public/Home/images/xiala.gif" /></a>
					<div class="zilan">
						<a href="images.html">服饰搭配</a>
						<a href="images.html">时尚家居</a>
						<a href="images.html">美食特产</a>
					</div>
				</li>
				<li>
					<a href="class.html"><font>分类查询</font><img id="ig3" src="./Public/Home/images/xiala.gif" /></a>
				</li>
				<li>
					<a class="dianj dj4" href="javascript:;"><font>推荐阅读</font><img id="ig4" src="./Public/Home/images/xiala.gif" /></a>
					<div class="zilan">
						<a href="#">服饰搭配</a>
						<a href="#">时尚家居</a>
						<a href="#">美食特产</a>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearBoth"></div>
	</div>
	<!--滚动图-->
	<div id="main">
		<div class="home-device">
			<a class="arrow-left" href="#"></a> 
			<a class="arrow-right" href="#"></a>
			<div class="swiper-main">
				<div class="swiper-container swiper1">
					<div class="swiper-wrapper">
					    <div class="swiper-slide"><img src="./Public/Home/images/product/14110601.jpg" width="100%"></div>
						<div class="swiper-slide"><img src="./Public/Home/images/product/14110601.jpg" width="100%"></div>
						<div class="swiper-slide"><img src="./Public/Home/images/product/14110601.jpg" width="100%"></div>
					</div>
				</div>
			</div>			
		</div>
		<div class="dian"><div class="pagination pagination1"></div></div>
	</div>	
	<!--资讯列表-->
	<div class="news">
		<!--滚动公告-->
		<div class="gongao">
			<div class="laba"><img src="./Public/Home/images/gongao.gif" /></div>
			<div class="wenzi" id="mrq">
				<div id="Marquee_x">
					<ul>
						<li>
							<div>微官网每天推出时尚家居、服饰搭配、美食特产及其他时尚前沿资讯等方面的精彩文章，是居家过日子好参谋。欢迎原创高手，踊跃投稿！</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="clearBoth"></div>
		</div>
		<!--资讯列表-->
		<div class="newslist">
			<div class="qtao">
				<div class="mg">
					<div class="mgl"><img src="./Public/Home/images/product/14110602.jpg" width="100%" /></div>
					<div class="mgr">
						<h3>卫衣</h3>
						<div class="what">
							<div class="time">
								<div class="tub"><img src="./Public/Home/images/time.gif" /></div>
								<div class="shij">2014-10-25</div>
								<div class="clearBoth"></div>
							</div>
							<div class="time hit">
								<div class="tub"><img src="./Public/Home/images/hit.gif" /></div>
								<div class="shij">1022</div>
								<div class="clearBoth"></div>
							</div>
							<div class="clearBoth"></div>
						</div>
						<div class="jianj">						卫衣，有着以一敌百的实用性、包容性和舒适度，信手拈来，搭配短裤短裙打底裤紧身裤等等都各具风情。它柔软而不柔弱，厚实而不厚重。
						</div>
						<div class="ydu">
							<div class="anniu"><a href="#"><img src="./Public/Home/images/ydu.gif" /></a></div>
							<div class="clearBoth"></div>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="qtao">
				<div class="mg">
					<div class="mgl"><img src="./Public/Home/images/product/14110603.jpg" width="100%"/></div>
					<div class="mgr">
						<h3>卫衣</h3>
						<div class="what">
							<div class="time">
								<div class="tub"><img src="./Public/Home/images/time.gif" /></div>
								<div class="shij">2014-10-25</div>
								<div class="clearBoth"></div>
							</div>
							<div class="time hit">
								<div class="tub"><img src="./Public/Home/images/hit.gif" /></div>
								<div class="shij">1022</div>
								<div class="clearBoth"></div>
							</div>
							<div class="clearBoth"></div>
						</div>
						<div class="jianj">						卫衣，有着以一敌百的实用性、包容性和舒适度，信手拈来，搭配短裤短裙打底裤紧身裤等等都各具风情。它柔软而不柔弱，厚实而不厚重。
						</div>
						<div class="ydu">
							<div class="anniu"><a href="#"><img src="./Public/Home/images/ydu.gif" /></a></div>
							<div class="clearBoth"></div>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="qtao">
				<div class="mg">
					<div class="mgl"><img src="./Public/Home/images/product/14110604.jpg" width="100%"/></div>
					<div class="mgr">
						<h3>卫衣</h3>
						<div class="what">
							<div class="time">
								<div class="tub"><img src="./Public/Home/images/time.gif" /></div>
								<div class="shij">2014-10-25</div>
								<div class="clearBoth"></div>
							</div>
							<div class="time hit">
								<div class="tub"><img src="./Public/Home/images/hit.gif" /></div>
								<div class="shij">1022</div>
								<div class="clearBoth"></div>
							</div>
							<div class="clearBoth"></div>
						</div>
						<div class="jianj">					卫衣，有着以一敌百的实用性、包容性和舒适度，信手拈来，搭配短裤短裙打底裤紧身裤等等都各具风情。它柔软而不柔弱，厚实而不厚重。
						</div>
						<div class="ydu">
							<div class="anniu"><a href="#"><img src="./Public/Home/images/ydu.gif" /></a></div>
							<div class="clearBoth"></div>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
		</div>
	</div>
	<!--底部-->
	<div class="bottom">
		<div class="bottom-top">
			<div class="linker">
				<a class="abq" href="#"><img src="./Public/Home/images/xlweibo.gif" /></a>
				<a class="abq" href="#"><img src="./Public/Home/images/txweibo.gif" /></a>
				<a class="abq" href="#"><img src="./Public/Home/images/weixin.gif" /></a>
				<div class="liuy">
					<a href="message.html">
						<div class="tubiao"><img src="./Public/Home/images/liuy.gif" /></div>
						<div class="wenzi">在线留言</div>
						<div class="clearBoth"></div>
					</a>
				</div>
				<div class="clearBoth"></div>
			</div>
		</div>
		<div class="bottom-bot">Powered By XXX</div>
	</div>
</div>
<script type="text/javascript">
  $('#Marquee_x').jcMarquee({ 'marquee':'x','margin_right':'300px','speed':20 });
</script>
</body>
</html>
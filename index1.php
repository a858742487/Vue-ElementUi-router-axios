<?php
$urls = array(
	'www.gf95.cn',
	'www.gf95.cn/index.php',
    'www.gf95.cn/video.html',
    'www.gf95.cn/picture.html',
    'www.gf95.cn/cangshan.html',
);
$api = 'http://data.zz.baidu.com/urls?site=www.gf95.cn&token=iTMeaTQbNmpGGRzS';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>


	<!DOCTYPE html>
	<html>
	<!--
    	作者：刘国富
    	时间：2017-12-12
    	描述：
    -->

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
		<meta name="keywords" content="漠河旅游公司,漠河旅游攻略,漠河旅游包车,漠河包车,漠河旅游网,漠河包车价格">
		<meta name="description" content="漠河旅游公司,专业的漠河旅游公司,漠河旅游包车,漠北旅游公司,漠河旅游攻略,漠北旅游公司,漠河住宿预定,自驾游线路。">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/index.css?v=1.0" />
		<title>漠河旅游_漠河旅游公司-漠河自由行-漠河旅游_漠北旅游公司</title>
		<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
	</head>

	<body>
		<!--头部导航栏-->
		<header class="header_bar">
			<div class="header">
				<div class="top_navs">
					<nav class="nav navbar-fixed-top plr20_pa" role="navgation">
						<div class="navbar-header">
							<div class="logo ">
								<img src="img/logo.png" />
							</div>
							<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="collapse navbar-collapse">
							<ul class="navbar-nav nav">
								<li>
									<a class="nonestyle" href="index.php" target="_self">发现漠河</a>
								</li>
								<li>
									<a class="navigation-link" href="video.html">游玩路线</a>
								</li>
								<li>
									<a class="navigation-link" href="picture.html" target="_self">漠河景点</a>
								</li>
								<li>
									<a class="navigation-link" href="chedui.html" target="_self">漠河包车</a>
								</li>
								<li>
									<a class="navigation-link" href="###" id="about_us_btn" target="_self">关于我们</a>
								</li>
								<li>
									<a class="navigation-link" href="###" id="about_us_btn" target="_self" style="color:red; font-size:2em;">&nbsp;&nbsp;电话/微信号：156 6373 1821</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<div style: "clear:both;"></div>

		<!--轮播图-->
		<section class="lunbotu">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/bg5.jpg" alt="">
						<div class="carousel-caption">
							<!--输入描述-->
						</div>
					</div>
					<div class="item">
						<img src="img/bg4.jpg" alt="">
						<div class="carousel-caption">
							<!--输入描述-->
						</div>
					</div>
					<div class="item">
						<img src="img/bg2.jpg" alt="">
						<div class="carousel-caption">
							<!--输入描述-->
						</div>
					</div>
					<div class="item">
						<img src="img/bg6.jpg" alt="">
						<div class="carousel-caption">
							<!--输入描述-->
						</div>
					</div>
				</div>


				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
		<div style: "clear:both;"></div>

		<!--正文内容-->
		<section id="site" class="mian_content">

			<!--正文简介-->
			<!-- 		<div class="introduce container">
			<h1 class="introduce_title title-font">中国漠河——漠北户外旅游</h1>
			<div class="introduce_content">
				<div class="introduce_txt">
					<p>
						漠河县隶属于黑龙江省大兴安岭地区，位于黑龙江省大兴安岭北麓、黑龙江上游南岸、中国东北地区版图的最北端，地理坐标位于东经121°07′～124°20′、北纬52°10′～53°33′之间，是中国纬度最高的县。东与塔河县接壤，西与内蒙古额尔古纳市交界，南与内蒙古根河市为邻，北与俄罗斯隔黑龙江相望。
					</p>
					<p>
						截至2011年，漠河县总面积18367平方千米，下辖四镇一乡和五个林场。截至2011年，漠河县共有86501人，境内聚集着汉、蒙、回、壮、彝、朝鲜、鄂温克、鄂伦春、锡伯、土家等17个民族。
					</p>
					<p>
						漠河资源丰富，黄金开采有百余年的历史，这里的金子为慈禧太后换过胭脂。[2] 漠河县所辖旅游景点北极村是中国最北部的村镇，是中国境内唯一可观赏到北极光现象的地方。
					</p>

					<p>
						2012年，漠河县生产总值实现28.6亿元，比2011年增长18%。漠河县境内有漠河火车站、漠河古莲机场，交通方便。
					</p>

				</div>
				<div class="introduce_btn">
					<a href="picture.html" target="_blank">走进漠河景点</a>
				</div>
			</div>
		</div> -->

			<!--正文视频-->
			<!-- <div class="video container">
			<div class="video_header">
				<h1 class="video_tile litter_title_font">发现漠河</h1>
			</div>
			<div class="video_content">
				<div class="row">
					<div class="video_txt col-md-3">
						<div class="video_txt_title">
							
						</div>
						<div class="video_txt_content">

							<p>
								漠河县位于中国版图的最北部、黑龙江省最北端，是中国纬度最高的县份。漠河县位于中国九大山系之一的大兴安岭山脉的北坡，黑龙江上游南岸。东与塔河县接壤，西和内蒙古自治区呼伦贝尔盟的额尔古纳右旗为邻，南以内蒙古自治区根河市和大兴安岭地区所属的呼中区交界，北隔黑龙江主航道与俄罗斯相望。地理坐标介于东经121°07′～124°20′、北纬52°10′～53°33′之间。
							</p>
						</div>
						<a href="video.html" class="button_a" target="_blank">
							<button class="video_txt_btn">发现更多景点</button>
						</a>
				
					</div>

					<div class=" col-md-9">
						<div class="video_play">
							<div class="embed-responsive embed-responsive-16by9 video_img">
								<video controls preload="metadata" poster="img/opacity.png">
									<source src="video/1.mp4" type='video/mp4'>
								</video>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

			<!--正文内容-->
			<div class="content container  ">
				<div class="content_header" style="padding-top:1px;">
					<div class="content_title ">
						<h1 class="litter_title_font">景点介绍</h1>
					</div>
				</div>
				<div class="content_mian">
					<div class="content_article_top">
						<div class="row">
							<div class="col-md-8">
								<div class="content_article_top_pic">
									<img src="img/beijicun.jpg" class="img-responsive" alt="Responsive image">
								</div>
							</div>
							<div class="col-md-4">
								<div class="content_article_top_txt">
									<span>“雪随人意落纷纷，梅感天时自蕴欣”</span>
									<h3 class="content_article_top_txt_title">漠河——北极村</h3>
									<div class="content_article_top_txt_content">
										<p>
											&nbsp; &nbsp; &nbsp; &nbsp; 北极村位于黑龙江省漠河县漠河乡，地处北纬53°33′30″、东经122°20'27.14"，是国家AAAAA级旅游景区，中国观测北极光最佳地点，中国“北方第一哨”所在地，也是中国最北的城镇。北极村凭借中国最北、神奇天象、极地冰雪等国内独特的资源景观，与三亚的天涯海角共列最具魅力旅游景点景区榜单前十名。
										</p>
										<p>
											&nbsp; &nbsp; &nbsp; &nbsp; 北极村民风纯朴，静溢清新，乡土气息浓郁，植被和生态环境保存完好。每年夏至前后，一天24小时几乎都是白昼，午夜向北眺望，天空泛白，像傍晚又像黎明。夏至前后以及深秋朗月夜常常万里晴空，是观赏北极光的最佳时节。北极村不仅是一个历史悠久的古镇，它逐渐成了一种象征、一个坐标，每年都有很多从世界各地到这里的游客，来体会那份最北的幸福。
										</p>
									</div>
									<a href="picture.html" class="button_a" target="_blank">
										<button class="content_article_top_txt_btn">发现更多景点</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="content_article_bottom blow_up_img">
						<div class="row">
							<div class="content_article_bottom col-md-6 col-xs-6">
								<div style="overflow: hidden;">
									<img src="img/shengdancun.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>“中国最北的边陲小镇北极村东面”</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>北极圣诞村</h3>
								</div>
								<div class="content_article_bottom_content lgfdpl">
									<p>“北极圣诞村”由英国工程设计研究院设计，位于中国最北的边陲小镇北极村东面，与北极村中心相距21．5公里，“北极圣诞村”占地面积100．6公顷，建筑面积为76582．01平方米，预计投资1．33亿元。</p>
								</div>
								<a href="cangshan.html" class="button_a lgfdpl" target="_blank">
									<button class="content_article_bottom_btn">查看更多景点介绍</button>
								</a>
							</div>

							<div class="content_article_bottom col-md-6 col-xs-6">
								<div style="overflow: hidden;">
									<img src="img/jiguangjie.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span> “北极光节”</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>漠河 “北极光节”</h3>
								</div>
								<div class="content_article_bottom_content lgfdpl">
									<p>北极光节的举办，旨在进一步加强漠河与外界的联系，增进友谊、加强合作、促进招商，让北极光节成为世界了解漠河的窗口，从而进一步加大招商引资力度，扩大漠河的影响力，带动漠河的大旅游、促进漠河的大开放、推动漠河的大发展。</p>
								</div>

							</div>
						</div>



					</div>

					<div class="content_cultural">

						<div class="row">
							<div class="content_header" style="padding-top:1px">
								<div class="content_title ">
									<h1 class="litter_title_font">旅游线路</h1>
								</div>
							</div>
							<div class="content_cultural_picture col-md-6 col-xs-6">
								<div class="content_cultural_picture_position">
									<img src="img/ly2tian3.jpg" class="img-responsive" alt="Responsive image">
									<div class="content_cultural_picture_mask">
										<h3 class="content_cultural_picture_mask_txt lgfdpl">【2晚3天】冬季中俄边境漠河深度行</h3>
										<a href="zaran2_3.html" class="content_cultural_picture_mask_link" target="_blank"></a>
									</div>
								</div>
							</div>
							<div class="content_cultural_picture col-md-6 col-xs-6">
								<div class="content_cultural_picture_position">
									<img src="img/ly3tian4.jpg" class="img-responsive" alt="Responsive image">
									<div class="content_cultural_picture_mask">
										<h3 class="content_cultural_picture_mask_txt lgfdpl">【3晚4天】漠河边境冰雪原生态
											<br>休闲深度行</h3>
										<a href="zaran3_4.html" class="content_cultural_picture_mask_link" target="_blank"></a>
									</div>
								</div>
							</div>
							<div class="content_cultural_picture col-md-6 col-xs-6">
								<div class="content_cultural_picture_position">
									<img src="img/xl34.jpg" class="img-responsive" alt="Responsive image">
									<div class="content_cultural_picture_mask">
										<h3 class="content_cultural_picture_mask_txt lgfdpl">【4晚5天】漠河冬季大环线五日游</h3>
										<a href="zaran4_5.html" class="content_cultural_picture_mask_link" target="_blank"></a>
									</div>
								</div>
							</div>
							<div class="content_cultural_video col-md-6 col-xs-6">
								<div class="content_cultural_picture_position">
									<img src="img/ly89.jpg" class="img-responsive" alt="Responsive image">
									<div class="content_cultural_picture_mask">
										<h3 class="content_cultural_picture_mask_txt lgfdpl">【6晚7天】漠河冬季呼伦贝尔
											<br>旅游自由行
										</h3>
										<a href="zaran6_7.html" class="content_cultural_picture_mask_link" target="_blank"></a>
									</div>
								</div>
							</div>
							<div class="content_cultural_picture col-md-6 col-xs-6">
								<div class="content_cultural_picture_position">
									<img src="img/shiwaiwenquan.jpg" class="img-responsive" alt="Responsive image">
									<div class="content_cultural_picture_mask">
										<h3 class="content_cultural_picture_mask_txt lgfdpl">【7晚8天】漠河中俄边境+雾凇之都+泡温泉自由行</h3>
										<a href="zaran7_8.html" class="content_cultural_picture_mask_link" target="_blank"></a>
									</div>
								</div>
							</div>
							<div class="content_cultural_picture col-md-6 col-xs-6">
								<div class="content_cultural_picture_position">
									<img src="img/baihualin.jpg" class="img-responsive" alt="Responsive image">
									<div class="content_cultural_picture_mask">
										<h3 class="content_cultural_picture_mask_txt lgfdpl">【4晚5天】漠河特色线路探寻神秘石林</h3>
										<a href="zaran4_5shilin.html" class="content_cultural_picture_mask_link" target="_blank"></a>
									</div>
								</div>
							</div>
							<div class="content_cultural_picture col-md-6 col-xs-6">
								<div class="content_cultural_picture_position">
									<img src="img/guanyinshan.jpg" class="img-responsive" alt="Responsive image">
									<div class="content_cultural_picture_mask">
										<h3 class="content_cultural_picture_mask_txt lgfdpl">【精品线】漠河冬季精品三日游</h3>
										<a href="zaran3jingpin.html" class="content_cultural_picture_mask_link" target="_blank"></a>
									</div>
								</div>
								<a href="video.html" class="button_a" target="_blank">
									<button class="content_article_bottom_btn">发现更多游玩路线</button>
								</a>
							</div>
							<div class="content_cultural_video col-md-6 col-xs-6">
								<div class="content_cultural_picture_position">
									<img src="img/songyuan.jpg" class="img-responsive" alt="Responsive image">
									<div class="content_cultural_picture_mask">
										<h3 class="content_cultural_picture_mask_txt lgfdpl">【常规线】漠河北极村冬季二日游
										</h3>
										<a href="zaran2jingpin.html" class="content_cultural_picture_mask_link" target="_blank"></a>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="content_article_bottom blow_up_img">
						<div class="row lgfdpl">
							<div class="content_header" style="padding-top:1px">
								<div class="content_title ">
									<h1 class="litter_title_font">漠河本地租车</h1>
								</div>
							</div>
							<a href="chedui.html"><div class="content_article_bottom col-md-3 col-xs-6">

								<div style="overflow: hidden;">
									<img src="img/chedui/1.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河旅游公司租车</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>金杯阁瑞斯九座</h3>
								</div>
							</div></a>

							<a href="chedui.html"><div class="content_article_bottom col-md-3 col-xs-6">
								<div style="overflow: hidden;">
									<img src="img/chedui/2.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河旅游公司租车</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>金杯阁瑞斯九座</h3>
								</div>
							</div></a>
							<a href="chedui.html"><div class="content_article_bottom col-md-3 col-xs-6">
								<div style="overflow: hidden;">
									<img src="img/chedui/fengtian3.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河旅游公司租车</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>丰田凯美瑞</h3>
								</div>
							</div></a>
							<a href="chedui.html"><div class="content_article_bottom col-md-3 col-xs-6">
								<div style="overflow: hidden;">
									<img src="img/chedui/guangqi4.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河旅游公司租车</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>广汽传祺</h3>
								</div>
							</div></a>
						</div>
						<div class="row lgfdpl" style="padding-top:20px;">
							<a href="chedui.html"><div class="content_article_bottom col-md-3 col-xs-6">
								<div style="overflow: hidden;">
									<img src="img/chedui/fengtian1.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河旅游公司租车</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>丰田凯美瑞</h3>
								</div>
								<a href="chedui.html" class="button_a lgfdpl" target="_blank" style="padding-top:20px;">
									<button class="content_article_top_txt_btn">更多漠河本地租车</button>
								</a>
							</div></a>


							<a href="chedui.html"><div class="content_article_bottom col-md-3 col-xs-6">
								<div style="overflow: hidden;">
									<img src="img/chedui/fengtian3.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河旅游公司租车</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>丰田凯美瑞</h3>
								</div>
							</div></a>
							<a href="chedui.html"><div class="content_article_bottom col-md-3 col-xs-6">
								<div style="overflow: hidden;">
									<img src="img/chedui/guangqi1.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河旅游公司租车</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>广汽传祺</h3>
								</div>
							</div></a>
							<a href="chedui.html"><div class="content_article_bottom col-md-3 col-xs-6">
								<div style="overflow: hidden;">
									<img src="img/chedui/guangqi3.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河旅游公司租车</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>广汽传祺</h3>
								</div>
							</div></a>
						</div>
						
						<div class="row " style="padding-top:20px;">
							<div class="content_header" style="padding-top:1px">
								<div class="content_title ">
									<h1 class="litter_title_font">特色住宿--火炕</h1>
								</div>
							</div>
							<a href="picture.html"><div class="content_article_bottom col-md-4">
								<div style="overflow: hidden;">
									<img src="img/huokang/huokang1.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河特色火炕</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>特色火炕</h3>
								</div>
								<a href="picture.html" class="button_a lgfdpl" target="_blank" style="padding-top:20px;">
									<button class="content_article_top_txt_btn">更多特色住宿</button>
								</a>
							</div></a>


							<a href="picture.html"><div class="content_article_bottom col-md-4">
								<div style="overflow: hidden;">
									<img src="img/huokang/huokang3.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河特色火炕</span>
								<div class="content_article_bottom_title lgfdpl lgfdpl">
									<h3>特色火炕</h3>
								</div>
							</div></a>
							<a href="picture.html"><div class="content_article_bottom col-md-4">
								<div style="overflow: hidden;">
									<img src="img/huokang/huokang4.jpg" class="img-responsive" alt="Responsive image">
								</div>
								<span>漠河特色火炕</span>
								<div class="content_article_bottom_title lgfdpl">
									<h3>特色火炕</h3>
								</div>
							</div></a>
						</div>
					</div>
				</div>
			</div>

		</section>
		<div style: "clear:both;"></div>

		<!--页脚信息--关于我们-->
		<footer id="about_us">
			<div class="fixed_bg bg_3 footer_padding">

				<div class="footnote container">
					<div class="footnote_title">
						<div class="row footnote_title_content">
							<div class="col-md-2 col-logo">
								<div class="footnote_title_logo">
									<div class="logo ">
										<img src="img/logo.png" />
									</div>
								</div>
							</div>
							<div class="col-md-3 col-title ">
								<span>漠</span>
								<span>北</span>
								<span>户</span>
								<span>外</span>
								<span>旅</span>
								<span>游</span>
							</div>
							<div class="col-md-7">
								<form id="subForm" class="letter" method="post" action="">
									<input type="text" class="form-control" placeholder="请输入您的电话号,我们会尽快联系您">
									<span class="letter_btn">
										<button class="letter_query">确认发送</button>
									</span>
								</form>

							</div>
						</div>
					</div>
					<div class="footnote_email">
						<p>若您有任何意见、建议或疑惑</p>
						<p class="footnote_email_p2">请联系我们</p>
						<p>549473150@qq.com</p>
						<p>电话:15663731821</p>
					</div>
					<div class="footnote_about lgfdpl">
						<div class="row">
							<div class="col-md-7 footnote_about_col7">
								<div class="footnote_about_center_l">
									<span>
										<p>地址：</p>
										<p>黑龙江省漠河县</p>
									</span>
									<span>
										<p>旅行社：</p>
										<p>漠北户外旅游</p>
									</span>
									<span>
										<p>网站备案号：</p>
										<p>黑ICP备17003272号-2</p>
									</span>
								</div>

							</div>
							<div class="col-md-5">
								<div class="footnote_about_center_r">
									<p>All right reserved © 2017 "发现漠河"</p>
									<p>隐私保护</p>
									<p>Crafted by LiFeng</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--页脚信息--关于我们-->

		<!--返回顶部组件-->
		<div class="scrollSite">
			<a href="javascript:void(0)" class="scrollSite_btn"></a>
		</div>
		<!--返回顶部组件-->

		<!--进入页面全屏播放视频-->
		<!-- <div id="video_mask"></div>
	<div id="default_video">
		<div class="overhid">
			<div class="embed-responsive embed-responsive-16by9 " style="opacity: 0.8;">
				<video controls autoplay="autoplay" preload="metadata" poster="img/opacity.png" id="mask_play">
					<source src="video/open_video.mp4" type='video/mp4'>
				</video>
			</div>
		</div>
	</div> -->
		<!--进入页面全屏播放视频-->

		<!-- <div id="addLianxi">
				<h4>QQ在线咨询</h4>
				<p>客服1<span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=858742487&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:858742487:51" alt="客服1" title="客服1"/></a></span></p>
				<p>客服2<span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=858742487&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:858742487:51" alt="客服2" title="客服2"/></a></span></p>
				<h5>电话/微信号</h5>
				<h4 class="lianxiPhone">15546377263</h4>
				<h5>电话咨询</h5>
				<h4 class="lianxiPhone">0451-8888888</h4>
		</div> -->
	</body>
	<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/base.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/addphone.js"></script>

	</html>
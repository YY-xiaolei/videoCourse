<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>详情页</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>self/base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>self/show.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>iconFont/iconfont.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>self/swerp.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>self/video.css">
	<script src="<?php echo JS_PATH;?>self/rems.js"></script>
</head>
<body id="course-show">
    <header>
		<script src='http://player.polyv.net/script/polyvplayer.min.js'></script>
		<!-- <?php echo var_dump($data);?> -->
		<div data-id="<?php echo $oId;?>" class="myVideo"></div>

		<nav class="navs">
			<ul>
				<li class="navs-active">介绍</li>
				<li>章节</li>
			</ul>
		</nav>
	</header>

	
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<main class="swiper-slide">
				<!-- 课程介绍开始 -->
				<!-- <?php echo var_dump($data);?> -->
				<div class="middle">
					<h3><?php echo $title;?></h3>
					<p><?php echo $content;?></p>
				</div>
				<!-- 课程介绍结束 -->

				<!-- 主讲老师介绍开始 -->
				<!-- <?php echo var_dump($data);?> -->
				<div class="middle teacher">
					<h3 class="teacher-title">主讲老师简介</h3>
					<div class="middle-left">
						<img src="<?php echo $teacher_img;?>" alt="">
					</div>
					<div class="middle-right">
						<h3><?php echo $teacher_name;?>老师</h3>
						<p><?php echo $teacher_position;?></p>
					</div>
					
				</div>
				<!-- 主讲老师介绍结束 -->
			</main>
			<main class="swiper-slide">
				<!-- 章节介绍开始 -->
				<section class="course-contain">
					<ul>
						<!-- 每章开始 -->
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d67b34ec42f0770398ec014b4a239f0e&action=lists&catid=%24catid&num=10&siteid=%24siteid&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'10',));}?>
						
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                         <!-- <?php echo var_dump($v.id);?> -->

                        
						<li>
							<ul class="course-section">
								<li data-url="video/1.mp4">
			                        <i class="iconfont icon-icon"></i>
			                        第<?php echo $v['number'];?>节
			                        <a href="#"><?php echo $v['title'];?></a>
			                      
			                    </li>
							</ul>
						</li>
						<?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<!-- 每章结束 -->
					</ul>
				</section>
				<!-- 章节介绍结束 -->
			</main>
		</div>
	</div>
	
</body>
<script src="<?php echo JS_PATH;?>self/jquery-1.10.1.min.js"></script>
<script>
	var myId = $('.myVideo').attr('data-id');
	var myIds = "plv_" + myId;
	$('.myVideo').attr('id',myIds);
	var player = polyvObject('#' + myIds).videoPlayer({
	    'width':'100%',
	     'height':'5rem',
	    'vid' : myId,
	   });
</script>
<script src="<?php echo JS_PATH;?>self/idangerous.swiper.min.js"></script>
<script src="<?php echo JS_PATH;?>self/show.js"></script>
<script>
  var tabsSwiper = new Swiper('.swiper-container',{
    onlyExternal : true,
    speed:500
  })
  $(".navs li").on('touchstart mousedown',function(e){
    e.preventDefault()
    $(".navs .navs-active").removeClass('navs-active')
    $(this).addClass('navs-active')
    tabsSwiper.swipeTo( $(this).index() )
  })
  $(".navs li").click(function(e){
    e.preventDefault()
  })
  </script>
</html>
<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>列表页</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>self/base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>self/list.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>iconFont/iconfont.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>self/swerp.css">
	<script src="<?php echo JS_PATH;?>self/rems.js"></script>
</head>
<body id="course-list">
   
    <?php if($catid==12) { ?>
	<header  style="background-color: #7BBFF0">
	<?php } elseif ($catid==13) { ?>
	<header  style="background-color: #F791C3">
	<?php } elseif ($catid==14) { ?>
	<header  style="background-color: #73AEDB">
	<?php } elseif ($catid==15) { ?>
	<header  style="background-color: #ACDB78">
	<?php } elseif ($catid==16) { ?>
	<header  style="background-color: #E65E5B">
	<?php } elseif ($catid==17) { ?>
	<header  style="background-color: #23CFF3">
	<?php } elseif ($catid==24) { ?>
	<header  style="background-color: #4A94DB">
	<?php } elseif ($catid==25) { ?>
	<header  style="background-color: #00B75A">
	<?php } else { ?>
	<header  style="background-color: #00C5C6">
	<?php } ?>



	<!-- <header  style="background-color: #F791C3"> -->
		<a href="" class="iconfont icon-arrowleft2 backTo" onClick="javascript :history.go(-1);"></a>
        <?php if($catid==12) { ?>
		<h1><img src="<?php echo $CATEGORYS['12']['image'];?>" alt=""></h1>
		<?php } elseif ($catid==13) { ?>
		<h1><img src="<?php echo $CATEGORYS['13']['image'];?>" alt=""></h1>
		<?php } elseif ($catid==14) { ?>
		<h1><img src="<?php echo $CATEGORYS['14']['image'];?>" alt=""></h1>
		<?php } elseif ($catid==15) { ?>
		<h1><img src="<?php echo $CATEGORYS['15']['image'];?>" alt=""></h1>
		<?php } elseif ($catid==16) { ?>
		<h1><img src="<?php echo $CATEGORYS['16']['image'];?>" alt=""></h1>
		<?php } elseif ($catid==17) { ?>
		<h1><img src="<?php echo $CATEGORYS['17']['image'];?>" alt=""></h1>
		<?php } elseif ($catid==24) { ?>
		<h1><img src="<?php echo $CATEGORYS['24']['image'];?>" alt=""></h1>
		<?php } elseif ($catid==25) { ?>
		<h1><img src="<?php echo $CATEGORYS['25']['image'];?>" alt=""></h1>
		<?php } else { ?>
		<h1><img src="<?php echo $CATEGORYS['26']['image'];?>" alt=""></h1>
		<?php } ?>


		<h3>
			<?php if($catid==12) { ?> <?php echo $CATEGORYS['12']['catname'];?> 
			<?php } elseif ($catid==13) { ?> <?php echo $CATEGORYS['13']['catname'];?> 
            <?php } elseif ($catid==14) { ?> <?php echo $CATEGORYS['14']['catname'];?> 
            <?php } elseif ($catid==15) { ?> <?php echo $CATEGORYS['15']['catname'];?> 
            <?php } elseif ($catid==16) { ?> <?php echo $CATEGORYS['16']['catname'];?>
            <?php } elseif ($catid==17) { ?> <?php echo $CATEGORYS['17']['catname'];?>
            <?php } elseif ($catid==24) { ?> <?php echo $CATEGORYS['24']['catname'];?> 
            <?php } elseif ($catid==25) { ?> <?php echo $CATEGORYS['25']['catname'];?> 
            <?php } else { ?> <?php echo $CATEGORYS['26']['catname'];?> <?php } ?>
		</h3>
		<nav class="navs">
			<ul>
				<li class="navs-active">全部</li>
				<li>基础</li>
				<li>案例</li>

			</ul>
		</nav>
	</header>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<main class="swiper-slide">
				<!-- 每个课程开始 -->
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=eb8fe603a764dd12405ce5e39666c498&action=lists&catid=%24catid&siteid=%24siteid&num=100&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'100',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <!-- <?php echo var_dump($data);?> -->
				<div class="middle">

					<a href="<?php echo $v['url'];?>">
						<div class="middle-left">
							<img src="<?php echo $v['poster'];?>" alt="">
						</div>	
						<div class="middle-right">
							<h3><?php echo $v['title'];?></h3>
							<div class="degree">等级难度<span><?php echo $v['dengji'];?></span></div>
						</div>
					</a>
				</div>
				<?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<!-- 每个课程结束 -->
			</main>

			<main class="swiper-slide">
				<!-- 每个课程开始 -->
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=eb8fe603a764dd12405ce5e39666c498&action=lists&catid=%24catid&siteid=%24siteid&num=100&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'100',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<div class="middle">
					<a href="<?php echo $v['url'];?>">
						<div class="middle-left">
							<img src="<?php echo $v['poster'];?>" alt="">
						</div>	
						<div class="middle-right">
							<h3><?php echo $v['title'];?></h3>
							<div class="degree">等级难度<span><?php echo $v['dengji'];?></span></div>
						</div>
					</a>
				</div>
				<?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<!-- 每个课程结束 -->
			</main>

			<main class="swiper-slide">
				<!-- 每个课程开始 -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=eb8fe603a764dd12405ce5e39666c498&action=lists&catid=%24catid&siteid=%24siteid&num=100&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'100',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<div class="middle">
					<a href="<?php echo $v['url'];?>">
						<div class="middle-left">
							<img src="<?php echo $v['poster'];?>" alt="">
						</div>	
						<div class="middle-right">
							<h3><?php echo $v['title'];?></h3>
							<div class="degree">等级难度<span><?php echo $v['dengji'];?></span></div>
						</div>
					</a>
				</div>
				<?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<!-- 每个课程结束 -->
			</main>
		</div>
	</div>
	
</body>
<script src="<?php echo JS_PATH;?>self/jquery-1.10.1.min.js"></script>
<script src="<?php echo JS_PATH;?>self/idangerous.swiper.min.js"></script>
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
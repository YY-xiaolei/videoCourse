<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>全部课程</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>self/base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>self/index.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>iconFont/iconfont.css">
	<script src="<?php echo JS_PATH;?>self/rems.js"></script>
</head>
<body>
	<!-- 头部开始 -->
	<header>
		<div class="head-left">课程</div>
		
	</header>
	<!-- 头部结束 -->

	<!-- 内容部分开始 -->
	<main>
		<!-- 每个分类开始 -->
		<div class="middle">
			<h2 class="title"><?php echo $CATEGORYS['9']['catname'];?></h2>
			<ul class="courses">
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0526ed5f03597d1fd64fbff8a9c71663&action=category&catid=9&num=20&siteid=%24siteid&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'20',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li>
					<a href="<?php echo $v['url'];?>">
						<div class="course-box"><img src="<?php echo $v['image'];?>" alt=""></div>
						<span><?php echo $v['catname'];?></span>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
			</ul>
		</div>
		<!-- 每个分类结束 -->

		<!-- 每个分类开始 -->
		<div class="middle">
			<h2 class="title"><?php echo $CATEGORYS['10']['catname'];?></h2>
			<ul class="courses">
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bf2e0f9fcd9cf87a55ef88dfb14d4eef&action=category&catid=10&num=20&siteid=%24siteid&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'20',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li>
					<a href="<?php echo $v['url'];?>">
						<div class="course-box"><img src="<?php echo $v['image'];?>" alt=""></div>
						<span><?php echo $v['catname'];?></span>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
		<!-- 每个分类结束 -->

		<!-- 每个分类开始 -->
		<div class="middle">
			<h2 class="title"><?php echo $CATEGORYS['11']['catname'];?></h2>
			<ul class="courses">
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=93e0dd3457bcefd63a2977b6e26013dd&action=category&catid=11&num=20&siteid=%24siteid&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'20',));}?>
			    <!-- <?php echo var_dump($data);?> -->
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li>
					<a href="<?php echo $v['url'];?>">
						<div class="course-box"><img src="<?php echo $v['image'];?>" alt=""></div>
						<span><?php echo $v['catname'];?></span>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
		<!-- 每个分类结束 -->
	</main>
	<!-- 内容部分结束 -->
    
	

</body>
</html>
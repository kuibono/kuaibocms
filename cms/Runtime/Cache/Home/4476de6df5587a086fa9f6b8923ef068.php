<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="-SKo43TiGRQj4nStV7okysj2cxy2M8iiSGqq0psZm4M" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>">
<meta name="description" content="<?php echo ($description); ?>">
<script language="javascript">var Root='<?php echo ($root); ?>';var Sid='<?php echo ($sid); ?>';var Cid='<?php echo ($list_id); ?>';<?php if($sid == 1): ?>var Id='<?php echo ($vod_id); ?>';<?php else: ?>var Id='<?php echo ($news_id); ?>';<?php endif; ?></script>
<script language="javascript" src="__PUBLIC__/js/jquery.js" charset="utf-8"></script>
<link href="<?php echo ($tpl); ?>css/reset.css" type="text/css" rel="stylesheet">
<link href="<?php echo ($tpl); ?>css/base.css" type="text/css" rel="stylesheet">
<link href="<?php echo ($tpl); ?>css/colorbox.css" type="text/css" rel="stylesheet">
<link href="<?php echo ($tpl); ?>css/qirebox.css" type="text/css" rel="stylesheet">
<link href="<?php echo ($tpl); ?>css/jquery.autocomplete.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
    $(function () { 
     $(".w960 img").error(function () {
        $(this).attr("src", "<?php echo ($tpl); ?>images/0.jpg");
    });   
    });
</script>
</head>
<body>
﻿<!-- // Header Start -->
<div class="header">
	<div class="topBar">
	<div class="w960 fn-clear">
    	<div class="fn-left">
        <div style="text-align:left;color:#e12160;">
		快播影视改版，更新更快更及时，清记住快播影视域名：kuaiboyingshi.com
		</div>
        </div>
		<div class="a-link fn-right">
			<p>
				<a id="a-home" class="a-clo home" href="javascript:void(0);" rel="nofollow">设置首页</a><em>&nbsp;</em>
				<a class="a-clo fav" href="javascript:void(0);" rel="nofollow">加入收藏</a><em>&nbsp;</em>
				<a id="a-lang" class="color" href="<?php echo ($tpl); ?>快播影视.url" target="_self" rel="nofollow">添加桌面快捷方式</a>
			</p>
		</div>
	</div>
	</div>
	<!-- // topBar Start -->
<div class="headBar w960 fn-clear">
	<div class="logo fn-left">
		<a href="<?php echo ($root); ?>" title="<?php echo ($sitename); ?>"><img class="png-img" src="<?php echo ($tpl); ?>images/logo.png" alt="<?php echo ($sitename); ?>"></a>
	</div>
	<!-- // Logo End -->
	<div class="searchBar fn-right">
		<div class="hisBox fn-left">
			<div class="looked-box" id="history">
				<span class="his-tip">历史观看记录</span>
			</div>
		</div>
		<!-- // hisBox End -->
		
		<div class="searchBox fn-right">
			<div class="search">
<form id="ffsearch" name="ffsearch" method="POST" action="<?php echo ($root); ?>index.php?s=vod-search" onSubmit="return qrsearch();">
<input type="text" id="wd" name="wd" class="input-txt input-clear" value="<?php echo ($wd); ?>" />
<input type="submit"   class="input-btn" value="" />
</form>
			</div>
		</div>
		<!-- // searchBox End -->
		<div class="hotKeys">
			<strong>热门搜索：</strong>
			<?php echo ($hotkey); ?>
		</div>
		 <!-- // hotKeys End -->
	</div>
	<!-- // searchBar End -->	
</div>
<!-- // headBar End -->
<div class="menuBar">
	<div class="menu w960 fn-clear">
		<ul>
			<li <?php if(__SELF__=='/'): ?>class="current"<?php endif; ?>><a href="<?php echo ($root); ?>"><span>首页</span></a></li>
            <?php if(is_array($list_menu)): $i = 0; $__LIST__ = $list_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li <?php if(($ppvod["list_id"])  ==  $list_id): ?>class="current"<?php endif; ?><?php if(($ppvod["list_id"])  ==  $list_pid): ?>class="current"<?php endif; ?>>
                <a href="<?php echo ($ppvod["list_url"]); ?>">
                <span><?php echo ($ppvod["list_name"]); ?></span>
                </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
			<li <?php if(strchr(__SELF__,'hot')): ?>class="current"<?php endif; ?>><a href="<?php echo ff_mytpl_url('my_hot.html');?>"><span>排行榜</span></a></li>
			<li <?php if(strchr(__SELF__,'new')): ?>class="current"<?php endif; ?>><a href="<?php echo ff_mytpl_url('my_new.html');?>"><span>最近更新</span></a></li>
			<li><a href="/special-show-p.html"><span>专题</span></a></li>
           
		</ul>
		<p class="help-link">
			<a class="gb" href="<?php echo ($url_guestbook); ?>" target="_blank">给我留言</a>
		</p>
	</div>
	<!-- // Menu End -->
</div>
<div class="navBar">	
		<div class="nav w960 fn-clear">				
			<div class="index-tags fn-clear">
				<div class="index-tags-tv fn-left">
                <label class="tv">电视剧：</label>
                <?php if(is_array($list_menu)): $i = 0; $__LIST__ = $list_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(in_array(($ppvod["list_id"]), explode(',',"2"))): ?><?php if(is_array($ppvod["son"])): $i = 0; $__LIST__ = $ppvod["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvodson["list_url"]); ?>"><?php echo ($ppvodson["list_name"]); ?></a><em>|</em><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="index-tags-movie fn-right">
                <label class="movie">电影：</label>
                <?php if(is_array($list_menu)): $i = 0; $__LIST__ = $list_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(in_array(($ppvod["list_id"]), explode(',',"1"))): ?><?php if(is_array($ppvod["son"])): $i = 0; $__LIST__ = $ppvod["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvodson["list_url"]); ?>"><?php echo ($ppvodson["list_name"]); ?></a><em>|</em><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
			</div>
		</div>
		<!-- // Nav End -->
</div>
</div>
<!-- // wrap Start -->
<div class="wrap w960">
	<div style="margin-top:10px; clear:both;"></div>
	<div class="maxBox" id="latest-focus">
		<div class="latest-tab">
			<ul>
				<li id="latest1" onMouseOver="setTab('latest',1,5);" class="active">热门影片推荐</li>
				<li id="latest2" onMouseOver="setTab('latest',2,5);" class="">最新电视剧更新</li>
				<li id="latest3" onMouseOver="setTab('latest',3,5);" class="">最新电影更新</li>
				<li id="latest4" onMouseOver="setTab('latest',4,5);" class="">最新动漫更新</li>
				<li id="latest5" onMouseOver="setTab('latest',5,5);" class="">最新综艺更新</li>				
			</ul>
		</div>
		<div class="box box-blue-bold">
			<div id="con_latest_1" class="hot-latest active" style="display: block; ">
            	<?php $news=ff_mysql_vod('limit:7;order:vod_stars desc,vod_addtime desc'); ?>
				<ol class="pic-list">
                	<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                    <a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>">

                    <img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_title"]); ?>">
                    <label class="time"><?php echo ($ppvod["vod_title"]); ?></label></a>
                    <p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?></a></p></li><?php endforeach; endif; else: echo "" ;endif; ?>				
				</ol>
				<!-- // pic-list End -->
				<ul class="txt-list">
                	<?php $news_2=ff_mysql_vod('limit:7,12;order:vod_stars desc,vod_addtime desc'); ?>
                	<?php if(is_array($news_2)): $i = 0; $__LIST__ = $news_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                    <span><?php if($i < 10): ?>0<?php echo ($i); ?><?php else: ?><?php echo ($i); ?><?php endif; ?>.</span>
                    <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>			
				</ul> 
				<!-- // txt-list End -->
			</div>
            <?php $arr=array(2,1,3,4) ?>
            <?php if(is_array($arr)): $k = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$k;$mod = ($k % 2 )?><div id="con_latest_<?php echo($k+1) ?>" class="hide" style="display:none;">
				<ol class="pic-list">
                	<?php $vod_gold = ff_mysql_vod('cid:'.$ppcid.';limit:7;order:vod_addtime desc,vod_gold desc'); ?>
                    <?php if(is_array($vod_gold)): $i = 0; $__LIST__ = $vod_gold;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                    <a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>">
                    <img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
                    <label class="time"><?php echo ($ppvod["vod_title"]); ?></label></a>
                    <p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?></a></p></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ol>
				<!-- // pic-list End -->
				<ul class="txt-list">
                	<?php $vod_gold=ff_mysql_vod('cid:'.$ppcid.';limit:7,12;order:vod_addtime desc,vod_gold desc'); ?>
                	<?php if(is_array($vod_gold)): $i = 0; $__LIST__ = $vod_gold;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                    <span><?php if($i < 10): ?>0<?php echo ($i); ?><?php else: ?><?php echo ($i); ?><?php endif; ?>.</span>
                    <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>			
				</ul> 
				<!-- // txt-list End -->
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<!-- // maxBox End -->	
	<div class="maxBox" id="tv">
		<div class="box ui-qire fn-clear">
			<div class="conBox ui-tab fn-left" id="qire-tv">
				<div class="caption fn-clear">	
					<h2 class="hide-txt"><a href="<?php echo getlistname(2,'list_url');?>">电视剧<em>TV</em></a></h2>
					<ul class="ui-tab-nav">
					    <li id="tv1" onMouseOver="setTab('tv',1,6);" class="active">推荐</li>
                        <?php $menu=M('list')->where(array('list_pid'=>2))->order(array('list_id'=>'asc'))->select(); ?>
                        <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu1): ++$i;$mod = ($i % 2 )?><li style="width:69px;" id="tv<?php echo($i+1) ?>" onMouseOver="setTab('tv',<?php echo($i+1) ?>,6);"><?php echo (msubstr($menu1["list_name"],0,3)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<div class="content">
                    <div id="con_tv_1" class="ui-tab-item  ui-tab-item-hot">
						<div class="sideRow fn-left">
                        	<?php $focus=ff_mysql_vod('limit:1;cid:2;order:vod_stars desc,vod_addtime desc') ?>
                            <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="ui-focus">
								<a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>">
									<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
									<label class="time"><?php echo ($ppvod["vod_name"]); ?></label>
								</a>
								<ul class="ui-focus-text">
									<li><strong>状态：</strong><?php echo ($ppvod["vod_title"]); ?></li>
									<li style="height:20px; overflow:hidden;"><strong>主演：</strong><?php echo (ff_search_url($ppvod["vod_actor"])); ?>
									</li>
									<li>
										<strong>简介：</strong><?php echo (msubstr($ppvod["vod_content"],0,76)); ?>...
									</li>
								</ul>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<!-- // ui-focus End -->
							<div class="ui-will">
								<h4>今日好看的电视剧</h4>
								<ul class="ui-will-cnt">
                                	<?php $today_tv_hot=ff_mysql_vod('cid:2;limit:5;order:vod_hits_day desc,vod_id desc;'); ?>
                                    <?php if(is_array($today_tv_hot)): $i = 0; $__LIST__ = $today_tv_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span style="float:right; color:#C06"><?php echo ($ppvod["vod_hits_day"]); ?>℃</span>
                                    <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a><span style="padding-left:5px; color:#999;"><?php echo ($ppvod["vod_title"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
							<!-- // ui-synch End -->
						</div>
						<!-- // sideRow End -->
                        <?php $tv_hot=ff_mysql_vod('cid:2;limit:1,6;order:vod_stars desc,vod_addtime desc'); ?>
						<ol class="pic-list pic-list-focus fn-right">
                        	<?php if(is_array($tv_hot)): $i = 0; $__LIST__ = $tv_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
								<a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>">
									<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
									<label class="time"><?php echo ($ppvod["vod_title"]); ?></label>
								</a>
								<p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?></a></p>
								<p class="txt"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
								<p class="txt">
									<span class="ratbar">
										<span class="ratbar-item" style="width:<?php echo($ppvod['vod_gold']*10) ?>%;">&nbsp;</span>
									</span>
									<strong class="ratbar-num"><?php echo ($ppvod["vod_gold"]); ?></strong>
								</p>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ol>
		                <!-- // pic-list End -->
					</div>
					<!-- // ui-tab-item End -->
                   	<!-- 大陆电视剧 tab 开始-->
                    <?php if(is_array($menu)): $k = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu2): ++$k;$mod = ($k % 2 )?><div id="con_tv_<?php echo($k+1) ?>" class="ui-tab-item fn-hide">
                    	<?php $menu_vod=ff_mysql_vod('cid:'.$menu2['list_id'].';limit:10;order:vod_stars desc,vod_addtime desc'); ?>
						<ol class="pic-list">
                            <?php if(is_array($menu_vod)): $i = 0; $__LIST__ = $menu_vod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
								<a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>">
									<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
									<label class="time"><?php echo ($ppvod["vod_title"]); ?></label>
								</a>
								<p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?></a></p>
								<p class="txt"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
								<p class="txt">
									<span class="ratbar">
										<span class="ratbar-item" style="width:<?php echo($ppvod['vod_gold']*10) ?>%;">&nbsp;</span>
									</span>
									<strong class="ratbar-num"><?php echo ($ppvod["vod_gold"]); ?></strong>
								</p>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ol>
				    <!-- // pic-list End -->
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
            </div>
			<!-- // conBox End -->
			<div class="sideBar fn-right">
				<div class="ui-sort">
					<div class="caption fn-clear">
						<span><a href="<?php echo getlistname(2,'list_url');?>">更多</a></span>
						<h3>电视剧分类</h3>
					</div>
					<div class="content">
						<dl class="taglist">
                        <?php $vod_type=M('list')->where(array('list_pid'=>2))->select() ?>
                        	<?php if(is_array($vod_type)): $i = 0; $__LIST__ = $vod_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><dd><a href="<?php echo getlistname($ppvodson['list_id'],'list_url');?>"><?php echo (msubstr($ppvodson["list_name"],0,3)); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
						</dl>
								<?php
$s_area=array('大陆','香港','台湾','港台','欧美','日本','韩国','日韩','新加坡','泰国','俄罗斯','其他');
$s_language=array('国语','粤语','韩语','日语','英语','其他');
$s_year=array('2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','1999');
if($_GET[year]) $u_year="-year-".$_GET[year];else $u_year=NULL;if($_GET[area]) $u_area="-area-".$_GET[area];else $u_area=NULL;if($_GET[language]) $u_language="-language-".$_GET[language];else $u_order=NULL;if($_GET[order]) $u_order="-order-".$_GET[order];else $u_order=NULL;
?>
          <dl class="taglist">
<dt>年份</dt>

<?php foreach($s_year as $yid=>$yvalue){ if($_GET[year]==$yvalue) $class=" class='active'";else $class=NULL;echo "<dd><a href=".$root."vod-show-id-2".$_GET[id]."-year-".$yvalue.$u_area.$u_language.$u_order.".html>".$yvalue."</a></dd>";} ?>
     </dl>
					</div>
				</div>
				<!-- // ui-sort End -->	
			   	<div class="ui-top-tab fn-right">
					<div class="caption">
						<h3><a href="<?php echo getlistname(2,'list_url');?>">电视剧排行榜</a></h3>
					</div>
					<div class="content">
                    	<?php $hot_tv=ff_mysql_vod('cid:2;limit:10;order:vod_gold desc,vod_hits desc'); ?>			
						<ul class="ul-top">
                        	<?php if(is_array($hot_tv)): $i = 0; $__LIST__ = $hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><strong><?php echo ($ppvod["vod_gold"]); ?></strong></span><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
						<!-- // ul-top End -->
					</div>
				</div>
				<!-- // topBox End -->	
			</div>
		</div>
	</div>
	<!-- // maxBox End -->	
	<div class="maxBox" id="movie">
		<div class="box ui-qire fn-clear">
			<div class="conBox fn-left" id="qire-movie">
				<div class="caption fn-clear">		
					<h2 class="hide-txt"><a href="<?php echo getlistname(1,'list_url');?>">电影<em>Movie</em></a></h2>
					<ul class="ui-tab-nav">
					    <li id="mv1" onMouseOver="setTab('mv',1,9);" class="active">推荐</li>
                        <?php $menu_m=M('list')->where(array('list_pid'=>1))->order(array('list_id'=>'asc'))->select(); ?>
                        <?php if(is_array($menu_m)): $i = 0; $__LIST__ = $menu_m;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_m1): ++$i;$mod = ($i % 2 )?><li id="mv<?php echo($i+1) ?>" onMouseOver="setTab('mv',<?php echo($i+1) ?>,9);"><?php echo (msubstr($menu_m1["list_name"],0,2)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
	            <div class="content">
					<div id="con_mv_1" class="ui-tab-item ui-tab-item-hot">
						<div class="sideRow fn-left">
							<?php $focus=ff_mysql_vod('limit:1;cid:1;order:vod_stars desc,vod_addtime desc') ?>
                            <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="ui-focus">
								<a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>">
									<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
									<label class="time"><?php echo ($ppvod["vod_name"]); ?></label>
								</a>
								<ul class="ui-focus-text">
									<li><strong>状态：</strong><?php echo ($ppvod["vod_title"]); ?></li>
									<li style="height:20px; overflow:hidden;"><strong>主演：</strong><?php echo (ff_search_url($ppvod["vod_actor"])); ?>
									</li>
									<li>
										<strong>简介：</strong><?php echo (msubstr($ppvod["vod_content"],0,76)); ?>...
									</li>
								</ul>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<!-- // ui-focus End -->
 
							<div class="ui-will">
								<h4>今日好看的电影</h4>
								<ul class="ui-will-cnt">
                                	<?php $today_tv_hot=ff_mysql_vod('cid:1;limit:5;order:vod_hits_day desc,vod_id desc;'); ?>
                                    <?php if(is_array($today_tv_hot)): $i = 0; $__LIST__ = $today_tv_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span style="float:right; color:#C06"><?php echo ($ppvod["vod_hits_day"]); ?>℃</span>
                                    <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a><span style="padding-left:5px; color:#999;"><?php echo ($ppvod["vod_title"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
							<!-- // ui-synch End -->
						</div>
						<!-- // sideRow End -->
 
						<!-- 热门电影开始 -->
						<?php $tv_hot=ff_mysql_vod('cid:1;limit:1,6;order:vod_stars desc,vod_addtime desc'); ?>
						<ol class="pic-list pic-list-focus fn-right">
                        	<?php if(is_array($tv_hot)): $i = 0; $__LIST__ = $tv_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
								<a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>">
									<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
									<label class="time"><?php echo ($ppvod["vod_title"]); ?></label>
								</a>
								<p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?></a></p>
								<p class="txt"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
								<p class="txt">
									<span class="ratbar">
										<span class="ratbar-item" style="width:<?php echo($ppvod['vod_gold']*10) ?>%;">&nbsp;</span>
									</span>
									<strong class="ratbar-num"><?php echo ($ppvod["vod_gold"]); ?></strong>
								</p>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ol>
						<!-- 热门电影结束 -->
                    </div>
					<!-- // ui-tab-item End -->
					
					<!-- 动作片 tab 开始-->
                    <?php if(is_array($menu_m)): $k = 0; $__LIST__ = $menu_m;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_m2): ++$k;$mod = ($k % 2 )?><div id="con_mv_<?php echo($k+1) ?>" class="ui-tab-item fn-hide">
                    	<?php $menu_vod=ff_mysql_vod('cid:'.$menu_m2['list_id'].';limit:10;order:vod_stars desc,vod_addtime desc'); ?>
						<ol class="pic-list">
                            <?php if(is_array($menu_vod)): $i = 0; $__LIST__ = $menu_vod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
								<a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>">
									<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
									<label class="time"><?php echo ($ppvod["vod_title"]); ?></label>
								</a>
								<p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?></a></p>
								<p class="txt"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
								<p class="txt">
									<span class="ratbar">
										<span class="ratbar-item" style="width:<?php echo($ppvod['vod_gold']*10) ?>%;">&nbsp;</span>
									</span>
									<strong class="ratbar-num"><?php echo ($ppvod["vod_gold"]); ?></strong>
								</p>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ol>
				    <!-- // pic-list End -->
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					
                </div>
			</div>
			<!-- // conBox End -->
            <div class="sideBar fn-right">
				<div class="ui-sort">
					<div class="caption fn-clear">
						<span><a href="<?php echo getlistname(1,'list_url');?>">更多</a></span>
						<h3>电影分类</h3>
					</div>
					<div class="content">
						<dl class="taglist">
                        <?php $vod_type=M('list')->where(array('list_pid'=>1))->select() ?>
                        	<?php if(is_array($vod_type)): $i = 0; $__LIST__ = $vod_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><dd><a href="<?php echo getlistname($ppvodson['list_id'],'list_url');?>"><?php echo (msubstr($ppvodson["list_name"],0,2)); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
						</dl>
								<?php
$s_area=array('大陆','香港','台湾','港台','欧美','日本','韩国','日韩','新加坡','泰国','俄罗斯','其他');
$s_language=array('国语','粤语','韩语','日语','英语','其他');
$s_year=array('2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','1999');
if($_GET[year]) $u_year="-year-".$_GET[year];else $u_year=NULL;if($_GET[area]) $u_area="-area-".$_GET[area];else $u_area=NULL;if($_GET[language]) $u_language="-language-".$_GET[language];else $u_order=NULL;if($_GET[order]) $u_order="-order-".$_GET[order];else $u_order=NULL;
?>
          <dl class="taglist">
<dt>年份</dt>

<?php foreach($s_year as $yid=>$yvalue){ if($_GET[year]==$yvalue) $class=" class='active'";else $class=NULL;echo "<dd><a href=".$root."vod-show-id-1".$_GET[id]."-year-".$yvalue.$u_area.$u_language.$u_order.".html>".$yvalue."</a></dd>";} ?>
     </dl>

					</div>
				</div>
				<!-- // ui-sort End -->	
 
			   	<div class="ui-top-tab fn-right">
					<div class="caption">
						<h3><a href="<?php echo getlistname(1,'list_url');?>">电影排行榜</a></h3>
					</div>
					<div class="content">
                    	<?php $hot_tv=ff_mysql_vod('cid:1;limit:10;order:vod_gold desc,vod_hits desc'); ?>			
						<ul class="ul-top">
                        	<?php if(is_array($hot_tv)): $i = 0; $__LIST__ = $hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><strong><?php echo ($ppvod["vod_gold"]); ?></strong></span><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
						<!-- // ul-top End -->
					</div>
				</div>
				<!-- // topBox End -->	
			</div>
		</div>
		
	</div>
	<!-- // maxBox End -->
    <!-- 动漫内容开始 -->
	<div class="maxBox" id="comic">
		<div class="box ui-qire fn-clear">
			<div class="conBox fn-left" id="qire-comic">
				<div class="caption fn-clear">		
					<h2 class="hide-txt fn-left"><a href="<?php echo getlistname(3,'list_url');?>">经典动漫<em>Comic</em></a></h2>
				</div>
				<div class="content">
				
				  <!-- 经典动漫热门开始 -->
				    <div class="ui-tab-item">
						<?php $menu_vod=ff_mysql_vod('cid:3;limit:10;order:vod_stars desc,vod_addtime desc'); ?>
						<ol class="pic-list">
                            <?php if(is_array($menu_vod)): $i = 0; $__LIST__ = $menu_vod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
								<a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>">
									<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
									<label class="time"><?php echo ($ppvod["vod_title"]); ?></label>
								</a>
								<p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?></a></p>
								<p class="txt"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
								<p class="txt">
									<span class="ratbar">
										<span class="ratbar-item" style="width:<?php echo($ppvod['vod_gold']*10) ?>%;">&nbsp;</span>
									</span>
									<strong class="ratbar-num"><?php echo ($ppvod["vod_gold"]); ?></strong>
								</p>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ol>
						<!-- // pic-list End -->
					</div>
					<!-- // ui-tab-item End -->
				  <!-- 经典动漫热门结束 -->
             	</div>
			</div>
			<!-- // conBox End -->
			<div class="sideBar fn-right">
				<div class="ui-sort">
					<div class="caption fn-clear">
						<span><a href="<?php echo getlistname(3,'list_url');?>">更多</a></span>
						<h3>动漫分类</h3>
					</div>
								<?php
$s_area=array('大陆','香港','台湾','港台','欧美','日本','韩国','日韩','新加坡','泰国','俄罗斯','其他');
$s_language=array('国语','粤语','韩语','日语','英语','其他');
$s_year=array('2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','1999');
if($_GET[year]) $u_year="-year-".$_GET[year];else $u_year=NULL;if($_GET[area]) $u_area="-area-".$_GET[area];else $u_area=NULL;if($_GET[language]) $u_language="-language-".$_GET[language];else $u_order=NULL;if($_GET[order]) $u_order="-order-".$_GET[order];else $u_order=NULL;
?>
          <div class="content">
            <dl class="taglist">
              <dt>地区</dt>
<?php 
            foreach($s_area as $aid=>$avalue){ if($_GET[area]==$avalue) $class=" class='active'";else $class=NULL;echo "<dd $class><a href=".$root."vod-show-id-3".$_GET[id].$u_year."-area-".urlencode($avalue).$u_language.$u_order.".html>".$avalue."</a></dd>";} ?>
            </dl></eq>
            <dl class="taglist">
              <dt>年份</dt>
<?php foreach($s_year as $yid=>$yvalue){ if($_GET[year]==$yvalue) $class=" class='active'";else $class=NULL;echo "<dd $class><a href=".$root."vod-show-id-3".$_GET[id]."-year-".$yvalue.$u_area.$u_language.$u_order.".html>".$yvalue."</a></dd>";} ?>
            </dl>
					</div>
				</div>
				<!-- // ui-sort End -->	
				<div class="ui-top-tab fn-right">
					<div class="caption">
						<h3><a href="<?php echo getlistname(3,'list_url');?>">动漫排行榜</a></h3>
					</div>
					<div class="content">
                    	<?php $hot_tv=ff_mysql_vod('cid:3;limit:10;order:vod_gold desc,vod_hits desc'); ?>			
						<ul class="ul-top">
                        	<?php if(is_array($hot_tv)): $i = 0; $__LIST__ = $hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><strong><?php echo ($ppvod["vod_gold"]); ?></strong></span><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
						<!-- // ul-top End -->
					</div>
				</div>
				<!-- // topBox End -->	
			</div>
		</div>
		
	</div>
	<!-- // maxBox End -->

	<!-- 动漫内容结束-->
    <!-- 综艺娱乐内容开始 -->
	<div class="maxBox" id="variety">
		<div class="box ui-qire fn-clear">
			<div class="conBox fn-left" id="qire-variety">
				<div class="caption fn-clear">		
					<h2 class="hide-txt fn-left"><a href="<?php echo getlistname(4,'list_url');?>">综艺娱乐<em>Variety Show</em></a></h2>
				</div>
				<div class="content">
					<div class="ui-tab-item ui-tab-item-hot">
						<div class="sideRow fn-left">
							<?php $focus=ff_mysql_vod('limit:1;cid:4;order:vod_stars desc,vod_addtime desc') ?>
                            <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="ui-focus">
								<a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>">
									<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
									<label class="time"><?php echo ($ppvod["vod_name"]); ?></label>
								</a>
								<ul class="ui-focus-text">
									<li><strong>状态：</strong><?php echo ($ppvod["vod_title"]); ?></li>
									<li style="height:20px; overflow:hidden;"><strong>主持人：</strong><?php echo (ff_search_url($ppvod["vod_actor"])); ?>
									</li>
									<li>
										<strong>简介：</strong><?php echo (msubstr($ppvod["vod_content"],0,76)); ?>...
									</li>
								</ul>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<!-- // ui-focus End -->
							<div class="ui-will">
								<h4>今日好看的综艺节目</h4>
								<ul class="ui-will-cnt">
                                	<?php $today_tv_hot=ff_mysql_vod('cid:4;limit:5;order:vod_hits_day desc,vod_id desc;'); ?>
                                    <?php if(is_array($today_tv_hot)): $i = 0; $__LIST__ = $today_tv_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span style="float:right; color:#C06"><?php echo ($ppvod["vod_hits_day"]); ?>℃</span>
                                    <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a><span style="padding-left:5px; color:#999;"><?php echo ($ppvod["vod_title"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
							<!-- // ui-synch End -->
						</div>
						<!-- // sideRow End -->
						
						<!-- 综艺娱乐热门开始-->
						<?php $tv_hot=ff_mysql_vod('cid:4;limit:1,6;order:vod_stars desc,vod_addtime desc'); ?>
						<ol class="pic-list pic-list-focus fn-right">
                        	<?php if(is_array($tv_hot)): $i = 0; $__LIST__ = $tv_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
								<a class="play-pic" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>">
									<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
									<label class="time"><?php echo ($ppvod["vod_title"]); ?></label>
								</a>
								<p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?></a></p>
								<p class="txt"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
								<p class="txt">
									<span class="ratbar">
										<span class="ratbar-item" style="width:<?php echo($ppvod['vod_gold']*10) ?>%;">&nbsp;</span>
									</span>
									<strong class="ratbar-num"><?php echo ($ppvod["vod_gold"]); ?></strong>
								</p>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ol>
						<!-- // pic-list End -->
					</div>
					<!-- // ui-tab-item End -->
					   <!-- 综艺娱乐热门结束 -->
			  </div>
			</div>
			<!-- // conBox End -->
 
            <div class="sideBar fn-right">
				<div class="ui-sort ui-sort-variety">
					<div class="caption fn-clear">
						<span><a href="<?php echo getlistname(4,'list_url');?>">更多</a></span>
						<h3>综艺推荐</h3>
					</div>
					<div class="content">
						<dl class="long">
                        	<?php $tuijian_zy=ff_mysql_vod('limit:15;stars:1;order:vod_id desc;cid:4') ?>
                            <?php if(is_array($tuijian_zy)): $i = 0; $__LIST__ = $tuijian_zy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><dd><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,6)); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
						</dl>
					</div>
				</div>
				<!-- // ui-sort End -->	
				<div class="ui-top-tab fn-right">
					<div class="caption">
						<h3><a href="<?php echo getlistname(4,'list_url');?>">综艺排行榜</a></h3>
					</div>
					<div class="content">
                    	<?php $hot_tv=ff_mysql_vod('cid:4;limit:10;order:vod_gold desc,vod_hits desc'); ?>			
						<ul class="ul-top">
                        	<?php if(is_array($hot_tv)): $i = 0; $__LIST__ = $hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><strong><?php echo ($ppvod["vod_gold"]); ?></strong></span><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
						<!-- // ul-top End -->
					</div>
				</div>
				<!-- // topBox End -->	
			</div>
		</div>
		
	</div>
	<!-- // maxBox End -->
	<!-- 综艺约了内容结束-->
    <div class="maxBox" id="index">
    <div class="box box-blue silder-max">
        <div class="silder-box" id="index-silder">
        <ol class="index-list">
        	<?php if(is_array($list_menu)): $i = 0; $__LIST__ = $list_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(in_array(($ppvod["list_id"]), explode(',',"1,2"))): ?><li>
                <dl>
                    <dt><?php echo ($ppvod["list_name"]); ?></dt>
                    <?php if(is_array($ppvod["son"])): $i = 0; $__LIST__ = $ppvod["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><dd><a target="_blank" href="<?php echo ($ppvodson["list_url"]); ?>"><?php echo ($ppvodson["list_name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                </dl>
            </li><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
            <li>
            	<?php $hot_dm=ff_mysql_vod('cid:3;limit:8;order:vod_hits desc;vod_addtime desc'); ?>
                <dl class="dm">
                    <dt>动漫</dt>
                    <?php if(is_array($hot_dm)): $i = 0; $__LIST__ = $hot_dm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><dd><a target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,6)); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                </dl>
            </li>
            <li>
            	<?php $hot_dm=ff_mysql_vod('cid:4;limit:16;order:vod_hits desc;vod_addtime desc'); ?>
                <dl class="zy">
                    <dt>综艺娱乐</dt>
                    <?php if(is_array($hot_dm)): $i = 0; $__LIST__ = $hot_dm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><dd><a target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,5)); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>		
                </dl>
            </li>
        </ol>
        </div>
        <div class="index-search fn-clear">
        <!-- // search End -->
            <div class="search fn-left">
                <form id="ffsearch" name="ffsearch" method="post" action="<?php echo ($root); ?>index.php?s=vod-search">
                    <input type="text" id="wd" name="wd" class="input-txt" value="请在此处输入影片片名或演员名称。" onfocus="if(this.value=='请在此处输入影片片名或演员名称。'){this.value='';}" onblur="if(this.value==''){this.value='请在此处输入影片片名或演员名称。';};">
                    <input type="submit" class="input-btn" value="" />
                </form>
            </div>
        <!-- // search End -->
            <div class="hotKeys fn-right">
                <strong>热门搜索：</strong>
                <?php echo ($hotkey); ?>
            </div>
        <!-- // hotKeys End -->
        </div>
	<!-- // searchBox End -->
	</div>
</div>
	<div class="maxBox" id="links">
		<div class="caption fn-clear">
			<span><a href="mailto:<?php echo ($email); ?>" target="_blank" rel="nofollow">申请友链</a></span>
			<h2>友情链接</h2>
		</div>
		<div class="content">
			<ul class="ul-link">
            	<?php if(is_array($list_link)): $i = 0; $__LIST__ = $list_link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["link_url"]); ?>" target="_blank"><?php echo ($ppvod["link_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<!-- // ul-link End -->
		</div>
	</div>
	<!-- // maxBox End -->
</div>
<div class="back-to-top" id="back-to-top" style="display: block; "><a href="javascript:void(0);">Back to Top</a></div>
<!-- // wrap End -->
<!-- // Footer Start -->
<div class="footer">
	<div class="w960">
		<div class="foot-nav">
			<a href="/?s=gb-show.html" target="_blank" title="给我留言">给我留言</a>-<a href="mailto:<?php echo ($email); ?>" target="_blank" title="联系我们" rel="nofollow">联系我们</a>-<a href="/?s=map-show-id-baidu-limit-100.html" target="_blank" title="网站地图">网站地图</a>-<a href="/?s=map-show-id-rss-limit-30.html" target="_blank" title="RSS订阅">RSS订阅</a>
		</div>
		<!-- // foot-nav End -->
		<div class="copyright">
			<p>版权声明：本网站为非赢利性站点，本网站所有内容均来源于互联网相关站点自动搜索采集信息，相关链接已经注明来源。</p>
			<p>免责声明：本站所有信息均为采集引用,不存有资源,若有侵权行为,请联系站长删除。请大家支持正版。</p>
            <p><?php echo ($keywords); ?></p>
			<p>Copyright © 2007-2012 <a class="color" href="<?php echo ($root); ?>"><?php echo ($title); ?></a> <?php echo ($tongji); ?></p>
		</div>
		<!-- // copyright End -->
        	</div>
</div>
<!-- // Footer End -->
<script language="javascript" src="<?php echo ($tpl); ?>js/jquery-autocomplete.js" charset="utf-8"></script>
<script language="javascript" src="__PUBLIC__/js/jquery-lazyload.js" charset="utf-8"></script>
<script language="javascript" src="<?php echo ($tpl); ?>js/jquery.base.js" charset="utf-8"></script>
<script language="javascript" src="<?php echo ($tpl); ?>js/home.js" charset="utf-8"></script>
<div style="display: none; position: absolute; " class="acResults"></div>
</body>
</html>
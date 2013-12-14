<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>百度影音《<?php echo ($vod_name); ?>》在线观看-<?php echo ($vod_name); ?>剧情介绍-<?php echo ($sitename); ?>-最新最快的百度影音电影网！</title>
<meta name="keywords" content="<?php echo ($vod_name); ?>全集在线,<?php echo ($vod_name); ?>百度影音,<?php echo ($vod_name); ?>剧情介绍,<?php echo ($vod_name); ?>高清影片">
<meta name="description" content="<?php echo ($vod_name); ?>剧情:<?php echo (msubstr(h($vod_content),0,80)); ?>">
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
	<!-- // wrap Start -->
	<div class="position w960 fn-clear">
		<div class="fn-left">您现在的位置：<a href="<?php echo ($root); ?>">首页</a>〉<a href="<?php echo ($list_url); ?>"><?php echo ($list_name); ?></a>〉<a href="<?php echo ($vod_readurl); ?>"><?php echo ($vod_name); ?></a>
		</div>
		<div class="share fn-right">
			<!-- Baidu Button BEGIN -->
                <div id="bdshare" class="bdshare_b" style="line-height: 12px;"><img src="http://bdimg.share.baidu.com/static/images/type-button-1.jpg" />
                    <a class="shareCount"></a>
                </div>
            <script type="text/javascript" id="bdshare_js" data="type=button&uid=802316" ></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script type="text/javascript">
                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
            </script>
            <!-- Baidu Button END -->
		</div>
	</div>
	<!-- // position End -->    
    <div id="detail-nav">
        <ul class="highlight">
            <li id="back-detail-top" class="back-to-top">
                <a href="javascript:void(0);">Back to Top</a>
            </li>
            <li id="detail-list-nav" class="nav-item">
                <p>在线观看</p>
                <a href="#detail-list">在线观看</a>
            </li>
            <li id="latest-focus-nav" class="nav-item">
                <p>相关推荐</p>
                <a href="#latest-focus">相关推荐</a>
            </li>
            <li id="comment-nav" class="nav-item">
                <p>网友评论</p>
                <a href="#Comment">网友评论</a>
            </li>
        </ul>		
    </div>
    <div class="maxBox" id="detail-box">
		<div class="box box-blue">
			<div class="detail-cols fn-clear">
				<div class="detail-pic fn-left">
					<img width="225" height="300" src="<?php echo ($vod_picurl); ?>" alt="<?php echo ($vod_name); ?>">	
				</div>	
				<!-- // detail-pic End -->
				<div class="detail-title fn-right" style="position:relative;">
					<h2><?php echo ($vod_name); ?></h2>
					<div class="rating-box fn-right" style="position:absolute; right:0px; top:3px;">
						<div class="rating-panle">
							<div class="rating-self">
                            	<div class="gold">
                                    <div>
                                    <span class="Gold"></span>
                                    <span class="Goldnum"><?php echo ($vod_gold); ?></span><span class="golder">[<span class="Golder"><?php echo ($vod_golder); ?></span>人]</span></div>
                                </div>
							</div>
						</div>
					</div>
					<!-- // rating-box End -->
				</div>
				<!-- // detail-title End -->
				<div class="detail-info fn-left">
					<div class="info fn-clear">
						<dl style="height:24px; overflow:hidden;">
							<dt>主演：</dt>
							<dd><?php echo (ff_search_url($vod_actor)); ?></dd>
						</dl>	
						<dl style="height:24px; overflow:hidden;">
							<dt>状态：</dt>
							<dd><span class="color">
                            <?php if(in_array(($list_id), explode(',',"3,4,15,16,17,18,19,20,21,22"))): ?><?php if(!empty($vod_continu)): ?>连载至<?php echo ($vod_continu); ?><?php if(($list_pid)  ==  "4"): ?>期<?php else: ?>集<?php endif; ?></p><?php endif; ?>
                            <?php else: ?>
                            <?php echo ($vod_title); ?><?php endif; ?>
                            </span>
                            </dd>
						</dl>
						<dl class="fn-left">
							<dt>类型：</dt>
							<dd><a href="<?php echo ($list_url); ?>"><?php echo ($list_name); ?></a></dd>
						</dl>
						<dl class="fn-right">
							<dt>导演：</dt>
							<dd><?php echo (($vod_director)?($vod_director):'未知'); ?></dd>
						</dl>
						<dl class="fn-left">
							<dt>语言：</dt>
							<dd><span><?php echo (($vod_language)?($vod_language):'未知'); ?></span></dd>
						</dl>
						<dl class="fn-right">
                        	<?php $count=M('cm')->where(array('cm_cid'=>$vod_id))->select(); ?>
							<dd><a class="link" href="#Comment"><strong id="commnum"><?php echo count($count);?></strong>条评论</a></dd>
						</dl>
						<dl class="fn-left">
							<dt>时间：</dt>
							<dd><span id="addtime"><?php echo (date('Y-m-d h:m:s',$vod_addtime)); ?></span></dd>
						</dl>
						<dl class="fn-right">
							<dt>年份：</dt>
							<dd><span><?php echo (($vod_year)?($vod_year):'未知'); ?></span></dd>
						</dl>	
						<dl>	
							<dt>剧情：</dt>
							<dd><?php echo (msubstr($vod_content,0,65)); ?>...<a class="link detail-desc cboxElement" href="#detail-intro">详细剧情</a></dd>
						</dl>
					</div>
					<!-- // info End -->
						
					<div class="detail-sect">
						<div class="interest-sect fn-left user-bt">
							<a class="sect-btn fav" href="javascript:void(0);"><span>收藏</span></a>						
						</div>
						<!-- // interest_sect End -->
						<div class="interest-rss fn-left user-bt">
							<a class="rss-btn sect-btn" id="dingyue" href="<?php echo ($vod_rssurl); ?>"><span>订阅</span></a>
						</div>
					</div>	
					<!-- // detail-sect End -->
 
					<div class="play-mode">
						<dl class="play-mode-list">
                        	<?php if(is_array($vod_playlist)): $i = 0; $__LIST__ = $vod_playlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><dd><a title="<?php echo ($ppvod["playername"]); ?>" id="<?php echo ($ppvod["playname"]); ?>-pl" href="#<?php echo ($ppvod["playname"]); ?>-pl-list"><span><?php echo ($ppvod["playername"]); ?></span></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                        </dl>
					</div>
					<!-- // play-mode End -->
				</div>
				<!-- // detail-info End -->
			</div>	
			<!-- // detail-cols End -->	
		</div>
        <div style="margin-top:10px; clear:both;"></div>
		<div class="maxBox" id="detail-list">
            <div class="box">
            		<?php if(is_array($vod_playlist)): $i = 0; $__LIST__ = $vod_playlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><a name="<?php echo ($ppvod["playname"]); ?>"></a>  
                    <div class="play-list-box" id="<?php echo ($ppvod["playname"]); ?>-pl-list">
                    <div class="caption fn-clear">
                        <h4><a href="#body"><img src="<?php echo ($tpl); ?>images/playlogo/<?php echo ($ppvod["playname"]); ?>.gif" alt=""></a></h4>
                        <div class="play-page fn-right"></div>
                    </div>
                    <div class="content">
						<p class="play-list">
                        <?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a target="_blank" href="<?php echo ($ppvodson["playurl"]); ?>"><?php echo ($ppvodson["playname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </p>
                    </div>
                	</div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
		</div>
        <div class="maxBox" id="detail-intro">
		<div class="box box-blue">
			<div class="caption bigCaption">
				<h2>《<strong><?php echo ($vod_name); ?></strong>》简介：</h2>
			</div>
			<p style="margin:8px 15px; line-height:22px;"><?php echo ff_content_url($vod_content,$Tag);?><br /><a href="<?php echo ($root); ?>"><?php echo ($sitename); ?></a></p>
		</div>
		</div>
    	<div class="maxBox" id="latest-focus">
		<div class="box box-blue">
			<div class="caption bigCaption">
				<h2>喜欢看"<strong><?php echo ($vod_name); ?></strong>"的人也喜欢：</h2>
			</div>
			<ol class="pic-list">
            	<?php $hot_up = ff_mysql_vod('cid:'.$list_id.';limit:7;order:vod_up desc,vod_addtime desc'); ?>
                <?php if(is_array($hot_up)): $i = 0; $__LIST__ = $hot_up;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if($i < 8): ?><li>
					<a class="play-pic" target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>">
						<img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>">
						<span class="play-icon">&nbsp;</span>
						<label class="bg">&nbsp;</label>
						<label class="time"><?php echo ($ppvod["vod_title"]); ?></label>
					</a>
					<p><a target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?></a></p>
				</li><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
			<!-- // pic-list End -->
			<ul class="txt-list txt-list-small">
            <?php $hot_up1 = ff_mysql_vod('cid:'.$list_id.';limit:8,15;order:vod_up desc,vod_addtime desc'); ?>
            	<?php if(is_array($hot_up1)): $i = 0; $__LIST__ = $hot_up1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php if($i < 10): ?>0<?php echo ($i); ?><?php else: ?><?php echo ($i); ?><?php endif; ?>.</span><a target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,7)); ?> / <?php echo ($ppvod["vod_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
			<!-- // txt-list End -->
		</div>
		</div>
        <div id="Comment" class="maxBox">评论加载ING...</div>
	</div>
</div>
<?php echo ($vod_hits_insert); ?>
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
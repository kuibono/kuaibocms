<?php if (!defined('THINK_PATH')) exit();?><div class="box">
        <div class="ui-tab-nav-box fn-clear">
            <ul class="ui-tab-nav fn-left">
                <li class="active"><a href="javascript:void(0);">网友评论</a></li>
            </ul>
        </div>		
        <div class="ui-tab-box">
            <div class="acitve" id="con_cmt_1" style="display: block;">
                <div class="ui-form" id="cmt-input-bd" style="">
                    <div class="ui-form-item">
                        <div class="ui-form-field ui-form-area">
                            <textarea cols="60" rows="5" class="ui-input ui-textarea" id="comment_content" name="comment_content" onfocus="if(this.value=='请在这里发表您的个人看法，最多200个字。'){this.value='';}" onblur="if(this.value==''){this.value='请在这里发表您的个人看法，最多200个字。';};"></textarea>
                        </div>	
                    </div>
                    <div class="ui-form-info fn-clear">
                        <p class="fn-left">请勿提交非法信息和广告，违反者查封ID，甚至永久删除！谢谢合作~</p>
                        <div class="ui-link-cnt fn-right">
                            <a class="ui-link" id="subcomm" href="javascript:void(0);" onclick="FF.Comment.Post();">提交</a>
                        </div>	
                    </div>
                </div>
                <!-- // ui-form End -->
                <!-- // ui-form End -->
                <div class="sortBox fn-clear">
                    <p>
                        <a class="active" href="#body"><span>最新评论</span></a>
                    </p>
                    <div class="pages commpage fn-right" id="pagebox">
                        
                    </div>					
                </div>
                <!-- // sortBox End -->
                <!-- // ui-comment-box End -->
                <?php if(!empty($cm_list)): ?><div class="ui-comment-box">
                    <ul class="ui-comment" id="commbox">
                    	<?php if(is_array($cm_list)): $i = 0; $__LIST__ = $cm_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="cmt-post fn-clear">
                            <div class="cmt-time">
                                <p class="date-time">
                                    <span><?php echo (date('m-d',$ppvod["cm_addtime"])); ?> <?php echo (date('H:i',$ppvod["cm_addtime"])); ?></span>
                                </p>
                            </div>
                            <div class="cmt-post-self">
                                <div class="cmt-post-arrow"></div>
                                <div class="cmt-post-cnt">
                                    <div class="cmt-avatar">
                                        <img src="<?php echo ($tpl); ?>images/face/noavatar_small.gif" alt="kkpy">
                                    </div>	
                                    <div class="cmt-body">
                                        <p class="cmt-txt">
                                            <span class="cmt-user">“粪青”</span>：<em><em><?php echo (remove_xss(htmlspecialchars($ppvod["cm_content"]))); ?></em></em>	
                                        </p>
                                        <div class="cmt-ft fn-clear">
                                            <p class="fn-left">
                                                <span class="digg"><a href="javascript:void(0)" class="sup" data="/user-Comm-digg-id-1598-type-sup">支持(<strong>0</strong>)</a></span>
                                                <span class="digg"><a href="javascript:void(0)" class="opp" data="/user-Comm-digg-id-1598-type-opp">反对(<strong>0</strong>)</a></span>
                                            </p>
                                            <p class="fn-right">
                                            <a href="javascript:void(0)" data="1598" class="reply">#<?php echo ($ppvod["cm_floor"]); ?></a></p>										
                                        </div>
                                        <div id="rep1598"></div>	
                                    </div>
                                </div>
                                <div class="fn-clear"></div>
                            </div>
                        <!-- // cmt-post-self end -->
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <!-- // i-list End -->
                </div>
                <?php else: ?>
                <div class="ui-comment-box">
                    <ul class="ui-comment" id="commbox"><li class="kong">当前没有评论，赶紧抢个沙发！</li></ul>
                    <!-- // i-list End -->
                </div><?php endif; ?>
                <div class="sortBox">
                    <div class="pages commpage" id="pageboxx">
                        <?php echo ($cm_pages); ?>
                    </div>					
                </div>
                <!-- // list-page End -->
            </div>	
            <!-- // comment-box End -->	
        </div>	
        <!-- // comment End -->
    </div>
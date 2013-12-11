<?php
class ApiAction extends Action{
    public function fav(){
    	$name=$_POST['name'];
    	$Vod=M('Vod');
    	$Vod->where('vod_name like \'%'.$name.'%\'')->order('LENGTH( vod_play) DESC, LENGTH( vod_url) DESC , LENGTH( vod_title ) DESC')->find();
    	//$vods->setField('vod_stars',5);
    	if($vods->vod_stars<5)
    	{
    		$Vod->vod_stars=$Vod->vod_stars+1;
    		//$data["vod_stars"]=$vods->vod_stars+1;
    	}
    	
    	//$hits=$vods->vod_hits;
    	
    	//$vods->vod_hits=$hits+300;
    	$Vod->vod_hits_lasttime=time();
    	$Vod->vod_hits_day+=300;
    	$Vod->vod_hits_week+=300;
    	$Vod->vod_hits_month+=300;
    	
    	//$this->trace('hits',$vods->vod_hits);
    	
    	//$data['vod_hits']=$vods->vod_hits+300;
    	//$data['vod_hits_lasttime']=time();
    	
    	//$vods->setField('vod_hits','vod_hits'+300); 
    	$Vod->save();
    	//$vods->save();
    	
    	$this->trace("dd",$data);
    	//$this->display('./Public/plus/api/debug.html');
		$this->ajaxReturn("success",true);
	}
}
?>
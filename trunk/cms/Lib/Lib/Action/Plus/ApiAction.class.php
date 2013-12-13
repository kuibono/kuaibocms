<?php
class ApiAction extends Action{
    public function fav(){
    	$name=$this->filter($_POST['name']);
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
    	$Vod->vod_hits_day+=30;
    	$Vod->vod_hits_week+=30;
    	$Vod->vod_hits_month+=30;
    	$Vod->save();
		$this->ajaxReturn($name,true);
	}
	
	public function filter($s){
		$s=strtolower($s);
		$s=str_replace("-","",$s);
		$s=str_replace("_","",$s);
		$s=str_replace(".","",$s);
		$s=str_replace("+","",$s);
		$s=str_replace("(","",$s);
		$s=str_replace(")","",$s);
		$s=str_replace(" ","",$s);
		$s=str_replace("rmvb","",$s);
		$s=str_replace("rm","",$s);
		$s=str_replace("avi","",$s);
		$s=str_replace("qvm","",$s);
		$s=str_replace("scr","",$s);
		$s=str_replace("ts","",$s);
		$s=str_replace("dvd","",$s);
		$s=str_replace("hdtv","",$s);
		$s=str_replace("hd","",$s);
		$s=str_replace("bd","",$s);
		$s=str_replace("国语","",$s);
		$s=str_replace("英语","",$s);
		$s=str_replace("日语","",$s);
		$s=str_replace("韩语","",$s);
		$s=str_replace("日语","",$s);
		$s=str_replace("首发","",$s);
		$s=str_replace("中字","",$s);
		$s=str_replace("中文","",$s);
		$s=str_replace("高清","",$s);
		$s=str_replace("清晰","",$s);
		$s=str_replace("抢先","",$s);
		$s=str_replace("版本","",$s);
		$s=str_replace("版","",$s);
		$s=str_replace("第1集","",$s);
		$s=str_replace("1024","",$s);
		$s=str_replace("1280","",$s);
		$s=str_replace("2008","",$s);
		$s=str_replace("2009","",$s);
		$s=str_replace("2010","",$s);
		$s=str_replace("2011","",$s);
		$s=str_replace("2012","",$s);
		$s=str_replace("2013","",$s);
		$s=str_replace("2014","",$s);
		$s=str_replace("2015","",$s);
		$s=str_replace("2016","",$s);
		$s=preg_replace("/\[.*\]/i","",$s);
		$s=preg_replace("/\【.*\】/i","",$s);
		return $s;
	}

	public function addKuaibo($url){
		
	}
}
?>
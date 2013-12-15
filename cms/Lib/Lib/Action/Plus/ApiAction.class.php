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
    
    function get_extension($file)
    {
        return pathinfo($file, PATHINFO_EXTENSION);
    }

    
    public function addFav()
    {
        $url=$_POST["url"];
        //$url="qvod%3A%2F%2F976911282%7C65CFE912F8719A9B41B18805B4E44C06F9BD2C94%7C%E5%A4%9C%E5%85%B3%E9%97%A8%E4%B9%8B%E6%AC%B2%E6%9C%9B%E4%B9%8B%E8%8A%B1BD%E4%B8%AD%E5%AD%97.rmvb%7C";
        $url=urldecode($url);
        //dump($url);
        $name=$_POST["name"];
        $hasError=false;
        
        $m=M("File");
        
        
        if(strpos($url,"qvod://")===0)
        {
            $data["file_type"]=1;
            //以qvod://开头
            //如： qvod://307474681|593F9EDAB509C7ECC47FB21E964C3345BFF89A48|My盛Lady粤语05.rmvb|
            $url=str_replace("qvod://","",$url);
            if(substr($url,-1)!="|")
            {
                $url=$url+"|";
            }
            $names=explode("|",$url);
            $len=count($names);
            if($len==4)
            {
                //307474681|593F9EDAB509C7ECC47FB21E964C3345BFF89A48|My盛Lady粤语05.rmvb|
                $data["file_length"]=$names[0];
                //trace($names[0]);
                $data["file_name"]=$names[1];
                if($name===null)
                {
                    $data["file_title"]=$this->filter($names[2]);
                }
                else
                {
                    $data["file_title"]=$this->filter($name);
                }
                $data["file_ext"]=$this->get_extension($names[2]);
            }
            else if($len==3)
            {
                //593F9EDAB509C7ECC47FB21E964C3345BFF89A48|My盛Lady粤语05.rmvb|
                $data["file_length"]=0;
                $data["file_name"]=$names[0];
                 if($name===null)
                {
                    $data["file_title"]=$this->filter($names[1]);
                }
                else
                {
                    $data["file_title"]=$this->filter($name);
                }
                $data["file_ext"]=$this->get_extension($names[1]);
            }
            else{
                //有错的格式
                $hasError=true;
            }
            
        }
        else if(strpos($url,"bdhd://")===0)
        {
            $data["file_type"]=2;
            //以bdhd://开头
            //如： bdhd://277246698|7522A0A0A1EC43496262F59399F7D7FB|My盛Lady[高清TV粤语]01.rmvb
            $url=str_replace("bdhd://","",$url);

            $names=explode("|",$url);
            $len=count($names);
            if($len==3)
            {
                //277246698|7522A0A0A1EC43496262F59399F7D7FB|My盛Lady[高清TV粤语]01.rmvb
                $data["file_length"]=$names[0];
                $data["file_name"]=$names[1];
                if($name===null)
                {
                    $data["file_title"]=$this->filter($names[2]);
                }
                else
                {
                    $data["file_title"]=$this->filter($name);
                }
                $data["file_ext"]=$this->get_extension($names[2]);
            }
            else if($len==2)
            {
                //7522A0A0A1EC43496262F59399F7D7FB|My盛Lady[高清TV粤语]01.rmvb
                $data["file_length"]=0;
                $data["file_name"]=$names[0];
                 if($name===null)
                {
                    $data["file_title"]=$this->filter($names[1]);
                }
                else
                {
                    $data["file_title"]=$this->filter($name);
                }
                $data["file_ext"]=$this->get_extension($names[1]);
            }
            else{
                //有错的格式
                $hasError=true;
            }
            
        }
        
        if($hasError==true){
            $this->ajaxReturn("erroe format");
        }
        else{
            $f=$m->where('file_name=\''.$data["file_name"].'\'')->find();
            if($f!==null)
            {
                if(strtotime(date("Y-m-d"))>$f["file_last_share_time"])//今天0:00
                {
                    $data["file_last_share_time"]=0;
                }

                if(mktime(0,0,0,date('m'),date('d')-date('w')+1,date('Y'))>$f["file_last_share_time"]){//周一0:00
                    $data["file_share_week"]=0;
                }
                if(mktime(0,0,0,date('m'),1,date('Y'))>$f["file_last_share_time"]){
                    $data["file_share_month"]=0;
                }
                $data["file_share"]=$f["file_share"]+1;
                //dump($f["file_share"]);
                $data["file_share_day"]=$f["file_share_day"]+1;
                $data["file_share_week"]=$f["file_share_week"]+1;
                $data["file_share_month"]=$f["file_share_month"]+1;
                $data["file_last_share_time"]=time();
                
                $m->where('file_name=\''.$data["file_name"].'\'')->save($data);
            }
            else{
                $data["file_time"]=time();
                $data["file_read"]=0;
                $data["file_read_day"]=0;
                $data["file_read_week"]=0;
                $data["file_read_month"]=0;
                $data["file_share"]=0;
                $data["file_share_day"]=0;
                $data["file_share_week"]=0;
                $data["file_share_month"]=0;
                $data["file_last_read_time"]=time();
                $data["file_last_share_time"]=time();
                $m->data($data)->add();
            }
            //$this->ajaxReturn("成功");
            $this->display('./Public/plus/api/debug.html');
        }
    }
	public function add(){
		$url=$_POST["url"];
        //$url="qvod://307474681|593F9EDAB509C7ECC47FB21E964C3345BFF89A48|My盛Lady粤语05.rmvb|";
        $hasError=false;
        
        $f=M("File");
        $data["file_time"]=time();
        $data["file_read"]=0;
        $data["file_read_day"]=0;
        $data["file_read_week"]=0;
        $data["file_read_month"]=0;
        $data["file_share"]=0;
        $data["file_share_day"]=0;
        $data["file_share_week"]=0;
        $data["file_share_month"]=0;
        $data["file_last_read_time"]=time();
        $data["file_last_share_time"]=time();
        
        if(strpos($url,"qvod://")===0)
        {
            $data["file_type"]=1;
            //以qvod://开头
            //如： qvod://307474681|593F9EDAB509C7ECC47FB21E964C3345BFF89A48|My盛Lady粤语05.rmvb|
            $url=str_replace("qvod://","",$url);
            if(substr($url,-1)!="|")
            {
                $url=$url+"|";
            }
            $names=explode("|",$url);
            $len=count($names);
            if($len==4)
            {
                //307474681|593F9EDAB509C7ECC47FB21E964C3345BFF89A48|My盛Lady粤语05.rmvb|
                $data["file_length"]=$names[0];
                //trace($names[0]);
                $data["file_name"]=$names[1];
                $data["file_title"]=$this->filter($names[2]);
                $data["file_ext"]=$this->get_extension($names[2]);
            }
            else if($len==3)
            {
                //593F9EDAB509C7ECC47FB21E964C3345BFF89A48|My盛Lady粤语05.rmvb|
                $data["file_length"]=0;
                $data["file_name"]=$names[0];
                $data["file_title"]=$this->filter($names[1]);
                $data["file_ext"]=$this->get_extension($names[1]);
            }
            else{
                //有错的格式
                $hasError=true;
            }
            
        }
        else if(strpos($url,"bdhd://")===0)
        {
            $data["file_type"]=2;
            //以bdhd://开头
            //如： bdhd://277246698|7522A0A0A1EC43496262F59399F7D7FB|My盛Lady[高清TV粤语]01.rmvb
            $url=str_replace("bdhd://","",$url);

            $names=explode("|",$url);
            $len=count($names);
            if($len==3)
            {
                //277246698|7522A0A0A1EC43496262F59399F7D7FB|My盛Lady[高清TV粤语]01.rmvb
                $data["file_length"]=$names[0];
                $data["file_name"]=$names[1];
                $data["file_title"]=$this->filter($names[2]);
                $data["file_ext"]=$this->get_extension($names[2]);
            }
            else if($len==2)
            {
                //7522A0A0A1EC43496262F59399F7D7FB|My盛Lady[高清TV粤语]01.rmvb
                $data["file_length"]=0;
                $data["file_name"]=$names[0];
                $data["file_title"]=$this->filter($names[1]);
                $data["file_ext"]=$this->get_extension($names[1]);
            }
            else{
                //有错的格式
                $hasError=true;
            }
            
        }
        
        if($hasError==true){
            $this->ajaxReturn("输入地址格式有错");
        }
        else{
            $f->data($data)->add();
            //$this->ajaxReturn("成功");
            $this->display('./Public/plus/api/debug.html');
        }
	}
}
?>
﻿function $Showhtml(){
	player='<object classid="CLSID:ef0d1a14-1033-41a2-a589-240c01edc078" id="pplive_ikan_player" width="100%" height="'+Player.Height+'" onerror="Player.Install();"><param name="logourl" value="http://static1.pplive.cn/ikan3/100519/images/live_bg.jpg"><param name="logoposition" value="center"><param name="dbclicktofullscreen" value="true"><param name="showcontextmenu" value="true"><param name="showstateinfo" value="true"><param name="showchannelname" value="true"><param name="showplayerbuffer" value="true"><param name="showdownloadbuffer" value="true"><param name="showdownloadrate" value="true"><param name="showplaycontroller" value="true"><param name="showplayprogress" value="true"><param name="showloadingad" value="false"><param name="showadcountdown" value="false"><param name="adcfgurl" value=""><param name="enableupdate" value="true"><param name="enableupdatetip" value="true"><param name="updateurl" value=""><param name="url" value="'+Player.Url+'"><param name="forceversion" value="1.0.0.51"><param name="skinpath" value="skins\Default"><param name="type" value="1"></object>';
	return player;
}
Player.Show();
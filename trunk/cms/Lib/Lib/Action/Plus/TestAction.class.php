<?php
class TestAction extends Action{
	public function Test()
	{
		$m=M("File");
		$data["Type"]=1;
		$data["name"]="123456.rmvb";
		
		$m->add($data);
		
		$this->display('./Public/plus/api/debug.html');
	}
}

?>
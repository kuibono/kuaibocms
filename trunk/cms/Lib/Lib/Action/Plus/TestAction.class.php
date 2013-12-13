<?php
class TestAction extends Action{
	public function Test()
	{
		$m=M("File");
		$data["file_type"]=1;
		$data["file_name"]="123456.rmvb";
		
		$m->data($data)->add();
		
		$this->display('./Public/plus/api/debug.html');
	}
}

?>
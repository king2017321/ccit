<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


//检测数据长度
function checkLen($str,$len=5){
	if (mb_strlen($str) > $len) {
		$str = mb_substr($str, 0,$len);
		$str .= "..";
	}
	return $str;
}

//返回用户session
function userSession($param) {
	return $_SESSION["User"][$param];
}

//校园网验证
function xyw($time){
	if(empty($time)) {
		return "未办理校园网服务";
	}
	if(strtotime($time) >= time()){
		return "校园网剩余".ceil((strtotime($time)-time())/60/60/24).'天';
	}
	if(strtotime($time) < time()) {
		return "校园网已到期";
	}
}

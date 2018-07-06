<?php
//判断浏览器的类型
  header("Content-Type:text/html;charset=UTF-8");
  $header = getallheaders();
  $userAgent = $header['User-Agent'];
  if(strstr($userAgent,'Chrome')){
    echo "你使用的是google浏览器";
  }else if(strstr($userAgent,'Firefox')){
    echo "你使用的是火狐浏览器";
  }else{
    echo "你使用的是其它浏览器";
  }
?>

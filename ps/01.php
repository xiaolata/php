<?php
//图片上传服务端处理
  header("Content-Type:text/html;charset=utf-8;");
  $files = $_FILES;
  $fileName = $files['photo']['name'];
  $tmpName = $files['photo']['tmp_name'];
  move_uploaded_file($tmpName,'images/'.$fileName);
  echo "上传成功！"
?>

<?php
//网页自动跳转
  header("Content-Type:text/html;charset=UTF-8");
  header("Refresh:5;url=https://www.baidu.com");
  echo "<span>5</span>秒钟后跳转网页";
?>
<script type="text/javascript">
  window.onload=function(){
    let time = 5;
    let timer = setInterval(function(){
      time--;
      if(time<0){
        window.clearInterval(timer);
        return;
      }
      document.querySelector('span').innerHTML = time;
    },1000);
  }

</script>

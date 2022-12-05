<?php
    $value=$_REQUEST["type"];   //接受前端传来的数据
    if($value=="篮球"){
        echo "小黑子是不是香精煎鱼";//分号不能省 省了容易出错
    }else if($value=="足球"){
        echo "超能足球 天下第一";
    }else if($value=="排球"){
        echo "中国女排 冲出亚洲";
    }else{
        echo "我只是条咸鱼 别这样好吗";
    }
?>
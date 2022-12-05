<?php
    $province=$_REQUEST["provinceName"];
    if($province=="山东省"){
        echo "青岛市,济南市,威海市,烟台山市";
    }
    else if($province=="湖南省"){
        echo "长沙市,岳阳市,株洲市,邵阳市";
    }
    else if($province=="浙江省"){
        echo "杭州市,宁波市,温州市,嘉兴市";
    }
    else if($province=="广东省"){
        echo "揭阳市,深圳市,广州市,中山市";
    }

?>
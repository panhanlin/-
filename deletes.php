<?php
header("Content-type:text/html;charset=utf8");
include ("coon.php");
//print_r($_GET["select"]);
if(count($_GET["select"])){
    $arr = $_GET["select"];
    for ($i=0;$i<count($arr);$i++){
        $sql = "delete from tb_demo01 where id=" .$arr[$i];
        mysqli_query($lk,$sql);}
echo "<script>alert('删除成功！');location.href='lists.php';</script>";

}
else{
       echo "<script>alert('您未选择任何数据');location.href='lists.php';</script>";
  }

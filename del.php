<?php
if(isset($_GET["id"])){
    $sid=$_GET["id"];
    include ("coon.php");
    $sql = "delete from tb_demo01 where id=".$sid;
    $result= mysqli_query($lk,$sql);
    if($result){
        echo "<script>location.href='list.php';</script> ";
    }
    else{
        echo "<script>location.href='list.php';</script> ";
    }
}
else{
    //header("Location:list.php");
    echo "<script>location.href='list.php';</script> ";
}
?>
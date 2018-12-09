<?php

if(isset($_POST["btnUpdate"])){
    $sid=$_GET["id"];
    include("coon.php");
    $name = $_POST["name"];
    $price = $_POST["price"];
    $date = $_POST["date"];
    $type = $_POST["type"];
    $sql="update tb_demo01 set name='$name',price='".$price."', date='$date',type='$type' where id=".$sid;
    $result = mysqli_query($lk,$sql);
    if($result){
        echo "<script>alert('数据修改成功！');location.href='list.php';</script>";
    }
    if (!$result) {
        printf("Error: %s\n", mysqli_error($lk));
        exit();
    }
    mysqli_close($lk);
}

?>
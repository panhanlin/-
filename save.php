<?php
include("coon.php");
if(isset($_POST["btnSave"])){
    $name = $_POST["name"];
    $price=$_POST["price"];
    $date=$_POST["date"];
    $type=$_POST["type"];
    $sql="insert into tb_demo01(name,price,date,type) values('".$name."','".$price."".'元'."','".$date."','".$type."')";
    $result = mysqli_query($lk,$sql);
//    var_dump($sql);
    if($result){
//        echo "<script>alert('添加数据成功！');location.href='addBooks.php';</script>";
        echo "<script>alert('添加数据成功！');location.href='';</script>";
//        var_dump($sql);
    }
    else{
      echo "<script>alert('尚未添加图书');location.href='addBooks.php';</script>";

    }

}

mysqli_close($lk);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        section{
            text-align: center;
        }
        a:link{
            color: #666666;
        }
        a:visited{
            color: #666;
        }
    </style>
    <link rel="stylesheet" href="nav.css">
</head>
<body>
<?php
include("header.php");
?>
<section>
    <a href="lists.php">点击查看图书</a>
</section>
<?php include ("footer.php"); ?>

</body>
</html>

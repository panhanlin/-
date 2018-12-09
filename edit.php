<?php
if(isset($_GET["id"])){
    include ("coon.php");

    $sid=$_GET["id"];
    $sql="select*from tb_demo01 where id=".$sid;
    $result = mysqli_query($lk,$sql);

    if($rs=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $name =$rs["name"];
        $price=$rs["price"];
        $date=$rs["date"];
        $type=$rs["type"];
    }


} else{
    echo "<script> alert('没有修改的数据!');location.href='lists.php'</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
    <style>
        section p{
            text-align: center;
            margin-top: 10px;
            margin-bottom: 3px;
        }
        label{
            display: inline-block;
            width: 100px;
            text-align: right;
            margin-right: 20px;
        }
        input{
            width: 150px;
        }
        .btn{
            width: 50px;
        }
    </style>
</head>
<body>
<?php include ("header.php")?>

<section>
    <form action="update.php?id=<?php echo $sid; ?>" method="post">
        <p><label for="name">书名：</label><input type="text" name="name" id="name" minlength="2"  value="<?php echo $name;?>"></p>
        <p><label for="price">价格：</label><input type="text" name="price" id="price"  value="<?php echo "$price";?>" pattern="[0-9]{0-3}"</p>
        <p><label for="date">出版时间：</label><input type="date" name="date" id="date"  value="<?php echo $date;?>"></p>
        <p><label for="type">所属类别：</label><input type="text" name="type" id="type" value="<?php echo $type;?>"></p>
        <p><input type="submit" value="更新" name="btnUpdate">
            <input type="reset" value="返回" onclick="history.back()">
        </p>
    </form>
</section>


<?php include ("footer.php")?>
</body>
</html>

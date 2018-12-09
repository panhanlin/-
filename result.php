
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="nav.css">
<style>
    table{
        margin: 0 auto;
        text-align: center;
        width: 800px;
    }

</style>
<body>

<?php
include ('header.php');
?>
<table width="800" border="1" cellspacing="0">
    <tr>
        <td width="15%">id</td>
        <td width="30%">书名</td>
        <td width="20%">价格</td>
        <td width="20%">出版时间</td>
        <td width="15%">类别</td>
    </tr>
<?php
if (isset($_GET["btnSearch"])){
    if (!empty($_GET["key"])){
        $key=$_GET["key"];
        $sql = "select * from tb_demo01 where name like '%$key%' or type like binary '%$key%' or date like  binary '%$key%'  ";
    }
    else{

        $sql = "select * from tb_demo01";
    }
}
else{
    echo "<script>alert('你还没有输入关键字');</script> ";
     echo "<script>location.href='search.php';</script> ";
}

include("coon.php");
//		$sql = "select * from tb_info";
$result = mysqli_query($lk,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($lk));
    exit();
}
$nums =mysqli_num_rows($result);
if($nums == 0 ){
    echo "<tr><td colspan='6'>没有查询到相关数据
                </td></tr>";
}
// var dump($rs);s



while($rs=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    ?>

    <tr>
        <td width="15%"><?php echo $rs['id'] ?></td>
        <td width="30%"><?php echo $rs['name'] ?></td>
        <td width="20%"><?php echo $rs['price'] ?></td>
        <td width="20%"><?php echo $rs['date'] ?></a></td>
        <td width="15%"><?php echo $rs['type'] ?></a></td>



<?php 	} ?>



</table>
<?php
include ('footer.php');
?>
</body>
</html>
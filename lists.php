<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>列表</title>
</head>
<link rel="stylesheet" href="nav.css">
<style>
    table{
        margin: 0 auto;
        text-align: center;
    }

</style>
<body>
<?php  include("header.php")?>
<table width="800" border="1" cellspacing="0">

    <tr>
        <td name="select" id="sel" width="5%"></td>
        <td width="10%">id</td>
        <td width="25%">书名</td>
        <td width="15%">价格</td>
        <td width="20%">出版时间</td>
        <td width="10%">类别</td>
        <td width="15%">操作</td>
    </tr>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="get">
        <tr>
            <td colspan="7">输入关键字: <input type="text" name="key" id="key">
                <input type="submit" value="查询" name="btnSearch">
            </td>
        </tr>
    </form>
    <form action="deletes.php" method="get" name="form">
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
        $sql = "select * from tb_demo01";
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
        echo "<tr><td colspan='7'>没有查询到相关数据
                </td></tr>";
    }
    // var dump($rs);
    while($rs=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>

        <tr>
            <td  width="5%">
                <input type="checkbox" name="select[]"  id="sel" value="<?php echo $rs['id'] ?>">
            </td>
            <td width="10%"><?php echo $rs['id'] ?></td>
            <td width="25%"><?php echo $rs['name'] ?></td>
            <td width="15%"><?php echo $rs['price'] ?></td>
            <td width="20%"><?php echo $rs['date'] ?></a></td>
            <td width="10%"><?php echo $rs['type'] ?></a></td>
            <td>
            <a href="javascript:edit(<?php echo $rs['id'] ?>)">修改</a>
            /
            <a href=<?php echo "del.php?id='$rs[id]'";?> onclick="javascript:return del()" >删除</a>
            </td>
        </tr>
    <?php 	} ?>
    <tr class="allDel">
        <td colspan="7">
            <a href="#" onclick="javascript:allDel(true)">全部选择</a>
            /
            <a href="#" onclick="javascript:allDel(false)">取消</a>
            <input type="submit" value="删除选择" onclick="javascript:return del()">
        </td>
    </tr>
        </form>
</table>
<script>
    var $ = function (sel) {
        return document.querySelectorAll(sel);
    };
    var $sel = $("#sel");
    function del() {
        return confirm("您确定删除数据吗？");
    }
    function allDel($change){
        for (var i=0;i<$sel.length;i++){
            $sel[i].checked = $change;
        }
    }
    function edit(did){
        if(confirm("修改")){
            location.href="edit.php?id="+did;
            return false;
        }
    }
</script>
<?php include("footer.php")?>
</body>
</html>
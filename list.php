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
        <td width="10%">id</td>
        <td width="30%">书名</td>
        <td width="15%">价格</td>
        <td width="20%">出版时间</td>
        <td width="10%">类别</td>
        <td width="15%">操作</td>
    </tr>


    <?php
    // var dump($rs);s
    include ('coon.php');
    $sqlstr="select * from tb_demo01 order by id";
    $pagesize=2;
    $total= mysqli_query($lk,$sqlstr);
    $totalNum=mysqli_num_rows($total);
    $pagecount=ceil($totalNum/$pagesize);
    if(!isset($_GET["page"])){
        $page=1;
    }
    else{
        $page=$_GET["page"];
    }
    $f_pageNum=$pagesize*($page-1);
//    $sqlstr1=$sqlstr."limit".$f_pageNum.",".$pagesize;
    $sqlstr1="select * from tb_demo01 order by id limit ".$f_pageNum.",".$pagesize;
    $result =mysqli_query($lk,$sqlstr1);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($lk));
        exit();
    }
    while($rs=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>

        <tr>
            <td width="10%"><?php echo $rs['id'] ?></td>
            <td width="30%"><?php echo $rs['name'] ?></td>
            <td width="15%"><?php echo $rs['price'] ?></td>
            <td width="20%"><?php echo $rs['date'] ?></a></td>
            <td width="10%"><?php echo $rs['type'] ?></a></td>
            <td width="15%"><a href="javascript:del(<?php echo $rs['id'] ?>)">删除</a>/
                <a href="javascript:edit(<?php echo $rs['id'] ?>)">修改</a></td>
        </tr>


    <?php 	} ?>

    <tr>
        <td colspan="6">
            <?php
        echo "共".$totalNum."本图书&nbsp;&nbsp;";
        echo "第".$page."页/共".$pagecount."页&nbsp;";
        ?>
            <?php
            if($page >1){?>
                <a href='list.php?page=1'>首页 </a>
                <a href='list.php?page=<?php echo $page-1;?>'>上页 </a>
            <?php 	} ?>
            <?php
            if($page < $pagecount){?>
                <a href='list.php?page=+1'>下页 </a>
                <a href='list.php?page=<?php echo $pagecount;?>'>末页 </a>
            <?php 	} ?>


        </td>
    </tr>
<!--    <tr>-->
<!--        <td colspan="6">-->
<!--            <input type="text" name="page">-->
<!--            <input type="submit" value="go">-->
<!--        </td>-->
<!--    </tr>-->



</table>
<script>
    function del(did){
        if(confirm("确定删除？")){
            location.href="del.php?id="+did;
            return false;
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
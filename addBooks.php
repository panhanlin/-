<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Document</title>
</head>
<body>
<?php include ("header.php") ?>
<section>
    <form action="save.php" method="post">
        <p><label for="name">书名：</label><input type="text" name="name" id="name" minlength="2" required></p>
        <p><label for="price">价格：</label><input type="number" name="price" id="price" required pattern="[0-9]{0-3}"</p>
        <p><label for="date">出版时间：</label><input type="date" name="date" id="date"  required></p>
        <p><label for="type">所属类别：</label><input type="text" name="type" id="type" required></p>
        <p><input type="submit" value="添加" name="btnSave" class="btn">
            <input type="reset" value="重置" name="btnCnl" class="btn">
        </p>
    </form>
</section>
<?php include ("footer.php"); ?>
<?php include ("coon.php"); ?>
</body>
</html>
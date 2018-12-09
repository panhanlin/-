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

    }

</style>
<body>
<?php  include("header.php")?>
<?php
include ('coon.php');
?>
<table width="800" border="1" cellspacing="0">
    <form action="result1.php" method="get">
        <tr>
            <td colspan="6">输入关键字: <input type="text" name="key" id="key" required>
                <input type="submit" value="查询" name="btnSearch">
            </td>
        </tr>
    </form>
</table>
<?php
include ('footer.php');
?>
</body>
</html>
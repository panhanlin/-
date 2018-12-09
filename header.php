<header>
    <img src="banner.jpg" alt="">
    <nav>
        <ul>
            <li><?php
                date_default_timezone_set('prc');echo date('Y-m-j');?></li>
            <li><a href="lists.php">浏览数据</a></li>
            <li><a href="addBooks.php">添加图书</a></li>
            <li><a href="search.php">简单查询</a></li>
            <li><a href="SearchBooks.php">高级查询</a></li>
            <li><a href="total.php">分组统计</a></li>
            <li><a href="exit.php">退出系统</a></li>
        </ul>
    </nav>
</header>
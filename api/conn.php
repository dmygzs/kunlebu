<?php
    $servername = "localhost";
    $username = "test";
    $password = "123456";
     
    // 创建连接
    $conn = mysqli_connect($servername, $username, $password);

    mysqli_query($conn,"set names 'utf-8'");
    mysqli_select_db($conn,"test");
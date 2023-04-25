<?php
    include("conn.php");

    // header("Content-type:text/json");
    $output = array();

    $query = mysqli_query($conn,"select * from post");
    if (mysqli_num_rows($query) > 0){
        $i = 0;
        while($row = mysqli_fetch_assoc($query)){
            $temp = array();

            $temp["name"] = $row["name"];
            $temp["url"] = $row["url"];
            $temp["site"] = $row["site"];
            $temp["author"] = $row["author"];

            $output[$i] = $temp;
            $i ++;
        }
    }
    die(json_encode($output));

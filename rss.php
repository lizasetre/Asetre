<?php
    $rss = '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $con = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820704") or die (mysqli_error($con));
    $sql = "SELECT * FROM tbl_books";
    $q = mysqli_query($con, $sql) or die (mysqli_error($con));

    while($r= mysqli_fetch_assoc($q)){
        extract($r);
        
        $rss .= '<Books>';
        $rss .= '<bookname>' . $bookname . '</bookname>';
        $rss .= '<author>' . $author . '</author>';
        $rss .= '<genre>' . $genre . '</genre>';
        $rss .= '</Books>';
    }
    $rss .= '</channel>';
    $rss .= '</rss>';

    echo $rss;
?>

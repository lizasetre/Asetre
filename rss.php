<?php
    $rss = '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820704") or die (mysqli_error($connect));
    $sql = "SELECT * FROM tbl_books";
    $q = mysqli_query($connect, $sql) or die (mysqli_error($connect));

    while($records= mysqli_fetch_assoc($query)){
        extract($records);
        
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

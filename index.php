<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://asetre.herokuapp.com/rss.php");
 
 $cnt = $domOBJ->getElementsByTagName("Books");
?>

 <h2> Best Book to read </h2>

<?php
 foreach( $cnt as $data ){
     $BookName = $data->getElementsByTagName("bookname")->item(0)->nodeValue;
     $Author = $data->getElementsByTagName("author")->item(0)->nodeValue;
     $Genre = $data->getElementsByTagName("genre")->item(0)->nodeValue;
     echo "<ul>
            <h3>$name</h3>
              <ul>
                  <li>Book Name: $BookName </li>
                  <li>Author: $Author </li>
                  <li>Genre: $Genre </li>
              </ul>
          </ul>";
 }
?>

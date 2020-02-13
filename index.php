<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://asetre.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("Books");

?>

 <h2> Best Book to read </h2>

<?php
 foreach( $content as $data )
 {
     $BookName = $data->getElementsByTagName("bookname")->item(0)->nodeValue;
     $Author = $data->getElementsByTagName("author")->item(0)->nodeValue;
     $Genre = $data->getElementsByTagName("genre")->item(0)->nodeValue;
     
  echo "<ul>
            <h3>$name</h3>
              <ul>
                  <li>BookName: $BookName </li>
                  <li>Author: $Author </li>
                  <li>Genre: $Genre </li>
              </ul>
          </ul>";
 }
?>

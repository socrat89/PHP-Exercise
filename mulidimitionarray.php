<?php 

$listarr = array(
            "musicals" => array("Oklahoma", "The Music Man", "South Pacific"),
            "dramas" => array("Lawrence of Arabia", "To Kill a Mockingbird", "Casablanca"),
            "mysteries" => array("The Maltese Falcon", "Rear Window", "North by Northwest")
 );
// echo count($listarr[0][1]);
// for ($i=0;$i < count($list); $i++) { 
//     for ($j=0; $j < count(); $j++) { 
//         # code...
//     }
// }

 foreach($listarr as $key => $values) {
    echo strtoupper($key);
    echo "<br>";
    foreach($values as $i => $value) {
      echo "----> $i = $value";
      echo "<br>";
    }
  }
 echo "<hr>";
 echo "<hr>";
 echo "<hr>";
  krsort($listarr);
  foreach($listarr as $key => $values) {
    echo strtoupper($key);
    echo "<br>";
    foreach($values as $i => $value) {
      echo "----> $i = $value";
      echo "<br>";
    }
  }
 
 ?>
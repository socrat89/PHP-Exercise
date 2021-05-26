<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <form action="palindrome.php" method=post>
<label > enter your word <input type="text" name="word"></label><br>
<input type="submit" value="Check" ></a><br>
<?php echo palindrome($_POST["word"]);?>
</form>
  </body>
</body>
</html>
<?php 
function palindrome($st) {
  $revers = strrev($st);

  if ($revers=== $st) {
    echo "True: ";
    return "$st is a palindrome";
  } else {
    echo "False: ";
    return "$st is not a palindrome";
  }
}
?>
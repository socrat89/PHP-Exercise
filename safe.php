<?php
$socrat=array('Socrat Alnajjad', 'socrat89' , '123' ,'81851305', '14/1/1989');

if(isset($_POST['reg'])){
    $A=$_POST["Fullname"];
    $B=$_POST["User_Name"];
    $C=$_POST["Password"];
    $D=$_POST["Confirm"];
    $E=$_POST["Email"];
    $F=$_POST["Mobile"];
    $G=$_POST["Date_Of_Birth"];
}elseif(isset($_POST['sinin'])){
    if(($_POST["User_Name_sin"]==$socrat[1]) && ($_POST["Password_sin"]==$socrat[2]))
    {
    echo "welcome socrat<br>";
    $A=$socrat[0];
    $B=$socrat[1];
    $C=$socrat[2];
    $D=$socrat[2];
    $E=$socrat[3];
    $F=$socrat[4];
    $G=$socrat[5];

    }else{ echo "this user is not found <br>";}
}else{
    $A="";
    $B="";
    $C="";
    $D="";
    $E="";
    $F="";
    $G="";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe</title>
    <link rel="stylesheet" href="home.css">

</head>
<div class="L_R">
      <form action="Home.php" method="POST">
        
          <table  cellpadding = "10">

            <!----- Full Name ---------------------------------------------------------->
            <tr>
            <td>Full NAME</td>
            <td><?php echo $A ?>
            </td>
            </tr>
            
            <!----- User Name---------------------------------------------------------->
            <tr>
            <td>User Name</td>
            <td><?php echo $B ?>
            </td>
            </tr>
            <!----- Password -------------------------------------------------------->
            <tr>
              <td>Password</td>
              <td><?php echo $C?>
              </td>
              </tr>
            <!----- Email Id ------------------------------------------------------->
            <tr>
            <td>EMAIL</td>
            <td><?php echo $D?>
            </tr>
            
            <!----- Mobile Number ---------------------------------------------------------->
            <tr>
            <td>MOBILE NUMBER</td>
            <td><?php echo $E?>
            </td>
            </tr>
            <!----- Date Of Birth -------------------------------------------------------->
            <tr>
              <td>DATE OF BIRTH</td>
              <td><?php echo $F?>
              </td>
              </tr> 

            <!-----Social Security Number---------------------------------------------------------->
            <tr>
              <td>Social Security Number</td>
              <td><?php echo $G?>
              </td>
              </tr> 
            <!----- Submit ------------------------------------------------->
            <tr>
              <td colspan="2">
                <input type="submit" value="Submit" onclick="location.href='Home.php';">
              </td>
            </tr>
          </table>
       </form>
</div>
<body>
    
</body>
</html>
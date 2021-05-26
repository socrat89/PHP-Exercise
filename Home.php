
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<h3>REGISTRATION FORM</h3>
    <div class="L_R">
      <form action="safe.php" method="POST">
        
          <table  cellpadding = "10">

            <!----- Full Name ---------------------------------------------------------->
            <tr>
            <td>Full NAME</td>
            <td><input type="text" name="Fullname" maxlength="30"/>
            </td>
            </tr>
            
            <!----- User Name---------------------------------------------------------->
            <tr>
            <td>User Name</td>
            <td><input type="text" name="User_Name" maxlength="30"/>
            </td>
            </tr>
            <!----- Password -------------------------------------------------------->
            <tr>
              <td>Password</td>
              <td><input type="password" name="Password" maxlength="30"/>
              </td>
              </tr>
              <!----- Confirm Password----------------------------------------------------------->
            <tr>
              <td>Confirm Password</td>
              <td><input type="password" name="Confirm" maxlength="30"/>
              </td>
              </tr> 

            <!----- Email Id ------------------------------------------------------->
            <tr>
            <td>EMAIL</td>
            <td><input type="text" name="Email" maxlength="100" /></td>
            </tr>
            
            <!----- Mobile Number ---------------------------------------------------------->
            <tr>
            <td>MOBILE NUMBER</td>
            <td>
            <input type="text" name="Mobile" maxlength="10" />
            </td>
            </tr>
            <!----- Date Of Birth -------------------------------------------------------->
            <tr>
              <td>DATE OF BIRTH</td>
              <td><input type="text" name="Date_Of_Birth" maxlength="30"/>
              </td>
              </tr> 

            <!-----Social Security Number---------------------------------------------------------->
            <tr>
              <td>Social Security Number</td>
              <td><input type="text" name="Social_Security_Number" maxlength="30"/>
              </td>
              </tr> 
            <!----- Submit ------------------------------------------------->
            <tr>
              <td colspan="2">
                <input type="submit" value="Submit" name="reg" onclick="location.href='safe.php';"></a>
              </td>
            </tr>
          </table>
       </form>
       <!-- sine in ------------------------------->
       <form action="safe.php" method="POST">
        <table  cellpadding = "10">
            <tr>
              <td>User Name</td>
              <td><input type="text" name="User_Name_sin" maxlength="30"/>
              </td>
            </tr>
            <!----- Password -------------------------------------------------------->
            <tr>
              <td>Password</td>
              <td><input type="password" name="Password_sin" maxlength="30"/>
              </td>
            </tr> 
            <!---Submit--->
          <tr>
          <td colspan="2">
          <input type="submit" value="Submit" name="sinin" onclick="location.href='safe.php';">
          </td>
        </tr>
       </table>
 </form>
    </div>
    <!-- validation -->
<?php

// if($_SERVER["REQUEST_METHOD"] == "POST") {
//   if(empty($_POST["Fullname"])) {
//     exit("Can't Be Empty!");
//   } elseif(empty($_POST["User_Name"])){
//     exit("Can't Be Empty!");
//   } elseif(empty($_POST["Password"])){
//     exit("Can't Be Empty!");
//   }
//   elseif(empty($_POST["Confirm"])){
//     exit("Can't Be Empty!");
//   }elseif($_POST["Confirm"]==$_POST["Password"]){
//     exit("Password does not match!");
//   }
//   elseif(empty($_POST["Email"])){
//     exit("Can't Be Empty!");
//   } elseif(empty($_POST["Mobile"])){
//     exit("Can't Be Empty!");
//   } elseif(empty($_POST["Date_Of_Birth"])){
//     exit( "Can't Be Empty!");
//   } elseif(empty($_POST["Social_Security_Number"])){
//     exit("Can't Be Empty!");
//   }
// }
?>





</body>
</html>


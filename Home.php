
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
              <td><input type="text" name="Social Security Number" maxlength="30"/>
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
<?php
// echo "hdshsdh/n";

$fullname =$_POST["Fullname"];
// echo $fullname;

// $user=array($_POST["Fullname"],$_POST["User_Name"],
//             $_POST["Password"],$_POST["Confirm"],$_POST["Email"],
//             $_POST["Mobile"],$_POST["Date_Of_Birth"]);
// echo $user[1];
// foreach($user as $value){
//     print $value;
//     print "";
// }
// $All_users=array();
// array_push($All_users ,$user);
//  foreach($All_users as $value){
//          print $value;
//     }
?>
</body>
</html>


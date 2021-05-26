<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Income Tax Calculator</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <h3>Income Tax Calculator</h3>
        <div class="L_R">
        <form action="tax.php" method="POST">
            
            <table  cellpadding = "10">

                <!----- Salary in USD---------------------------------------------------------->
                <tr>
                <td>Salary in USD</td>
                <td><input type="text" name="tax-usd" required/>
                </td>
                </tr>
                
                <!----- User Name---------------------------------------------------------->
                <tr>
                <td>Tax Free Allowance </td>
                <td><input type="text" name="tax-free" required />
                </td>
                </tr>
                <tr>
                    <td>
                    <input id='monthly' type='radio' name='rad' value='monthly' checked>
                    <label for='monthly'>Monthly</label>"
                     <input id='yearly' type='radio' name='rad' value='yearly' >
                     <label for='yearly'>Yearly</label>"
                    </td>
                </tr>
                <td colspan="2">
                <button type="submit" name="calc">Calculat</button>
                </td>
                </tr>
             </table>
            </form>
            <table>
                <tr>
                    <th></th>
                    <th>Monthly</th>
                    <th>Yearly</th>
                    
                </tr>
                
                <tr>
                    <td>Salary</td>
                    
                    <?php if($_POST["rad"]=="monthly")
                            {
                            echo "<td>".$_POST['tax-usd']."</td>";
                            }else
                            {
                                            $a=M_calc($_POST['tax-usd']) ;
                                echo "<td>". $a ."</td>";
                            }
                    ?>
                    <?php if($_POST["rad"]=="yearly")
                            {
                            echo "<td>".$_POST['tax-usd']."</td>";
                            }else
                            {               $a = Y_calc($_POST['tax-usd']) ;
                                echo "<td>". $a ."</td>";
                            }
                    ?>
                    
                </tr>
                <tr>
                    <td>Tax</td>
                    <?php
                    // $tax_c=tax_calc($_POST['tax-usd']);
                    if($_POST["rad"]=="monthly")
                    {
                       echo "<td>".tax_calc($_POST['tax-usd'])."</td>";
                    }else
                    {
                        
                    echo "<td>". tax_calc($a) ."</td>";
                     }
                    ?>
                     <?php
                    if($_POST["rad"]=="yearly")
                    {
                        echo "<td>".tax_calc($_POST['tax-usd'])."</td>";
                    }else
                    {
                    echo "<td>". tax_calc($a) ."</td>";
                     }
                    ?>
                    
                </tr>
                <tr>
                    <td>Social security fee</td>
                    <?php
                    // $tax_c=tax_calc($_POST['tax-usd']);
                    if($_POST["rad"]=="monthly")
                    {
                       echo "<td>". social_security_fee_calc($_POST['tax-usd'])."</td>";
                    }else
                    {
                    echo "<td>". social_security_fee_calc($a) ."</td>";
                     }
                    ?>
                     <?php
                    if($_POST["rad"]=="yearly")
                    {
                        
                        echo "<td>". social_security_fee_calc($_POST['tax-usd']) ."</td>";
                    }else
                    {
                    echo "<td>" . social_security_fee_calc($a) . "</td>";
                     }
                    ?>
                    
                </tr>
                <tr id="line">
                    <td>Net Salary </td>
                    <?php
                    
                    if($_POST["rad"]=="monthly")
                    {
                       echo "<td>". salary_after_tax_calc($_POST['tax-usd'],tax_calc($_POST['tax-usd']),
                                                                        social_security_fee_calc($_POST['tax-usd']),
                                                                         $_POST['tax-free'])."</td>";
                    }else
                    {
                    echo "<td>" . salary_after_tax_calc($a,tax_calc($a),
                    social_security_fee_calc($a),
                     $_POST['tax-free']) . "</td>";
                     }
                    ?>
                     <?php
                    if($_POST["rad"]=="yearly")
                    {
                        echo "<td>". salary_after_tax_calc($_POST['tax-usd'],tax_calc($_POST['tax-usd']),
                        social_security_fee_calc($_POST['tax-usd']), $_POST['tax-free']) ."</td>";
                    }else
                    {
                    echo "<td>" . salary_after_tax_calc($a,tax_calc($a),
                    social_security_fee_calc($a), $_POST['tax-free']) ."</td>";
                     }
                    ?>
                </tr>
             </table>        
    </div>
</body>
</html>

<?php
function M_calc($sal)
{
    $m_sal=$sal/12;
    return $m_sal ;
}
function Y_calc($sal)
{
    $y_sal=$sal*12;
    return $y_sal ;
}
function tax_calc($sal)
    {   if($sal<10000){
        $tax=0;
    }
    elseif ($sal > 10000 && $sal <= 25000) {
        $tax = $sal * 0.11;
    } elseif ($sal > 25000 && $sal <= 50000) {
        $tax = $sal * 0.3;
    } elseif ($sal > 50000) {
        $tax = $sal * 0.45;
    }
    // $net_sal=$sal-$social_security_fee-$tax;
    return $tax;

}
function social_security_fee_calc($sal)
{   $social_security_fee=0; 
    if ($sal>10000)
    {
    $social_security_fee=$sal*0.04;
    }
    return $social_security_fee;
}
function salary_after_tax_calc($sal,$tax,$social_security_fee,$taxFreeAllowance)
{
    $salary_after_tax=$sal-$social_security_fee-$tax;
    $salary_after_tax +=$taxFreeAllowance;
    return $salary_after_tax;
}
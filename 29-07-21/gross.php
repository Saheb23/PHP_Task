<html>
    <head>
        <title>PHP Program To find the gross salary of an Employee</title>
    </head>
    <body>
    <form method="post">
        <table border="0">
            <tr>
                <td> <input type="text" name="salary" value="" placeholder="Enter basic salary"/>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
<?php
if(isset($_POST['submit']))
{
    $basic_salary = $_POST['salary'];
    if($basic_salary<= 10000)
    {
        $da = 0.8 * $basic_salary;
        $hr = 0.2 * $basic_salary;
    }
    elseif($basic_salary<= 20000)
    {
        
        $da = 0.9 * $basic_salary;
        $hr = 0.25 * $basic_salary;
    }
    else
    {
    
        $da = 0.95 * $basic_salary;
        $hr = 0.3* $basic_salary;
    }
}
$gross_salary = $basic_salary + $da + $hr;
echo " Basic Salary : ".$basic_salary."/-" ;
echo "</br>";
echo " DA: " .$da."/-";
echo "</br>";
echo " HR: " .$hr ."/-";
echo "</br>";
echo " Gross Salary : " .$gross_salary ."/-";
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table border="0">
            <tr>
                <td> <input type="text" name="sides_1" value="" placeholder="Enter value of first sides"/>
                </td>
            </tr>
            <tr>
                <td> <input type="text" name="sides_2" value="" placeholder="Enter value of second sides"/>
                </td>
            </tr>
            <tr>
                <td> <input type="text" name="sides_3" value="" placeholder="Enter value of third sides"/>
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
        $value1 = $_POST['sides_1'];
        $value2 = $_POST['sides_2'];
        $value3 = $_POST['sides_3'];
        echo " value of first sides : " .$value1."/-";
        echo "</br>";
        echo " value of second sides : " .$value2."/-";
        echo "</br>";
        echo " value of third sides : " .$value3."/-";
        echo "</br>";
        
        if($value1==$value2 and $value2==$value3)
            {
                echo"This is an equilateral triangle";
            }
        else if($value1==$value2 or $value1==$value3 or $value2==$value3)
            {
                echo"This is an isosceles triangle";
            }
        else
            {
                echo"This is an scalene triangle";
            }
     }
     
        
       


     ?>
</body>
</html>
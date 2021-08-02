<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form method="POST">
            <table border="0" >
                
                <tr>
                    <th>Enter values of a quadratic equation</th>
                    <th><input type="number" name="a" value="" placeholder="Enter values of a"/></th>
                </tr> 
                <tr>
                    <th>Enter values of b quadratic equation</th>
                    <th><input type="number" name="b" value="" placeholder="Enter values of b"/></th>
                </tr>
                <tr>
                    <th>Enter values of c quadratic equation</th>
                    <th><input type="number" name="c" value="" placeholder="Enter values of c"/></th>
                </tr>
                <tr>
                    
                    <th colspan="2">
                    <input type="submit" name="submit" value="submit"/>
                    </th>
                </tr>
                
            </table>
        </form>

        <?php
                if(isset($_POST['submit']))
                    {
                    $a1 = $_POST['a'];
                    $b1 = $_POST['b'];
                    $c1 = $_POST['c'];

                    $discriminant = ($b1 * $b1) - (4 * $a1 * $c1);

                    if($discriminant > 0)
                    {
                        $root1 = (-$b1 + sqrt($discriminant)) / (2*$a1);
                        $root2 = (-$b1 - sqrt($discriminant)) / (2*$a1);
                        echo " Root 1 =  " .$root1; 
                        echo "</br>";
                        echo " Root 1 =  " .$root2;
                    }
                    else if($discriminant == 0)
                    {
                        $root1 = $root2 = -$b1 / (2 * $a1);
                        echo " Root 1 =  " .$root1; 
                        echo "</br>";
                        echo " Root 1 =  " .$root2;
                    }
                    else if($discriminant < 0)
                    {
                        $root1 = $root2 = -$b1 / (2 * $a1);
                        $imaginary = sqrt(-$discriminant) / (2 * $a1);
                        echo " Root 1 =  " .$root1; 
                        echo "</br>";
                        echo " Root 1 =  " .$root2;
                    }

                }
        ?>
    </body>
</html>
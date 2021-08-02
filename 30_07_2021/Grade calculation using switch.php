<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <h1>Grade calculation</h1>
            <table border="0">
                <tr>
                    <td> <input type="text" name="phys" value="" placeholder="Enter marks of phys"/>
                    </td>
                </tr>
                <tr>
                    <td> <input type="text" name="chem" value="" placeholder="Enter marks of chem"/>
                    </td>
                </tr>
                <tr>
                    <td> <input type="text" name="bios" value="" placeholder="Enter marks of bios"/>
                    </td>
                </tr>
                <tr>
                    <td> <input type="text" name="math" value="" placeholder="Enter marks of math"/>
                    </td>
                </tr>
                <tr>
                    <td> <input type="text" name="com" value="" placeholder="Enter marks of com"/>
                    </td>
                </tr>

                <tr>
                    <td> <input type="submit" name="submit" value="Submit"/>
                    </td>
                </tr>
            </table>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $sub1= $_POST['phys'];
            $sub2= $_POST['chem'];
            $sub3= $_POST['bios'];
            $sub4= $_POST['math'];
            $sub5= $_POST['com'];

            $sum=($sub1+$sub2+$sub3+$sub4+$sub5);
            $s_per=$sum/5;
            echo "Percentage:".$s_per;
            echo "<br>";
            $avg=$s_per/10;
            // echo "Avarage:".$avg;
            $int_value = intval($avg);
            // echo $int_value;
            echo "<br>";

            switch($int_value)
            {
                case 10:
                    echo "Grade AA";
                    break;
                case 9:
                    echo "Grade A";
                    break;
                case 8:
                case 7:
                    echo "Grade B";
                    break;
                case 6:
                case 5:
                    echo "Grade C";
                    break;
                default:
                    echo "Grade D";
                
            }
        }

    ?>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"action="<?php echo $_SERVER['PHP_SELF']?>">
        <table border="0">
                <tr>
                    <td> <input type="text" name="num1" value="" placeholder="Enter the first number:"/>
                    </td>
                </tr>
                <tr>
                    <td> <input type="text" name="num2" value="" placeholder="Enter the second number:"/>
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
            $fnum=$_POST['num1'];
            $snum=$_POST['num2'];

            switch($fnum < $snum)
            {
                case 0: 
                    echo "maximum is: " .$fnum;
                    break;
                case 1: 
                    echo "maximum is: " .$snum;
                    break;
            }
        }

    ?>
</body>
</html>
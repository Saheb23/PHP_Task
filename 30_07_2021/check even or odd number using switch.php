<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <table border="0">
                <tr>
                    <td> <input type="text" name="num" value="" placeholder="Enter any number to check even or odd:"/>
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
            $cnum=$_POST['num'];

            switch($cnum % 2)
            {
                case 0: 
                    echo "Number is Even.";
                    break;
                case 1: 
                    echo "Number is Odd.";
                    break;
            }
        }

    ?>
</body>
</html>
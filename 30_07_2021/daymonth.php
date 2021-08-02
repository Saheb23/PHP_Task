<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Of Month</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <table border="0">
            <tr>
                <td><input type="text" name="month" placeholder="Enter Month Number[1-12]"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="check"></td>
                
            </tr>
        </table>   

    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $month=$_POST['month'];
        switch($month)
        {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                echo" 31 Days";
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                echo" 30 Days";
                break;
            case 2:
                echo" 28/29 Days";
                break;
            default:
                echo" Enter Valid Number";

        }
    }
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeekDay</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <table border="0">

            <tr>
                <th><input type="text" name="days" placeholder="Enter The Day Number[1 - 7] :"></th>
            </tr>
            <tr>
                <th><input type="submit" name="submit" value="check"></th>
            </tr>
        </table>
        
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $week=$_POST['days'];
            
            switch($week)
            {
                case 1:
                    echo "SunDay";
                    break;
                case 2:
                    echo "MonDay";
                    break;    
                case 3:
                    echo "TuesDay";
                    break;   
                case 4:
                    echo "WednesDay";
                    break;   
                case 5:
                    echo "ThrusDay";
                    break;   
                case 6:
                    echo "FriDay";
                    break;   
                case 7:
                    echo "SatureDay";
                    break;
                default:
                    echo "Enter Valid Number ";
                    

            }
        }
    ?>
    
</body>
</html>
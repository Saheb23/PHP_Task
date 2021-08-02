<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post">
        <table border="0">
            <tr>
                <td> <input type="text" name="units" value="" placeholder="Enter consumed unit"/>
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
        $c_units = $_POST['units'];
        if($c_units<=50)
            {
             $amt=$c_units*0.05;  
            }
        else if($c_units<=150)
            {
             $amt=25+(($c_units-50)*0.75);  
            }
        else if($c_units<=250)
            {
             $amt=100+(($c_units-150)*1.20);  
            }
    }
        $sur_charge=$amt*0.20;
        $total_amts=$amt+$sur_charge;
        echo " Total consumd units : " .$c_units."/-";
        echo "</br>";
        echo " Total Electric Bill : " .$total_amts."/-";
    
    ?>
</body>
</html>
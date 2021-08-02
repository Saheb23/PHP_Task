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
                    <td> <input type="text" name="ch" value="" placeholder="Enter any alphabet:"/>
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
            $chs=$_POST['ch'];

            switch($chs)
            {
                case 'a': 
                    echo "Vowel";
                    break;
                case 'e': 
                    echo "Vowel";
                    break;
                case 'i': 
                    echo "Vowel";
                    break;
                case 'o': 
                    echo "Vowel";
                    break;
                case 'u': 
                    echo "Vowel";
                    break;
                case 'A': 
                    echo "Vowel";
                    break;
                case 'E': 
                    echo "Vowel";
                    break;
                case 'I': 
                    echo "Vowel";
                    break;
                case 'O': 
                    echo "Vowel";
                    break;
                case 'U': 
                    echo "Vowel";
                    break;
                default: 
                    echo "Consonant";
            }
        }

    ?>
</body>
</html>

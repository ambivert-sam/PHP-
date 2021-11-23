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
        Enter your favorite colour - <input type="text" name="favcolor" >
        <input type="submit" name="submit" value="Check now">
    </form>
    <p>
        My favourite color is <br/>
    <?php
         
         if(isset($_POST['submit'])){
            $favcolor=$_POST['favcolor'];
         
         switch($favcolor){
            case "red" : echo 'Your favorite color is red';
            break;
            case "blue" : echo 'Your favorite color is blue';
            break;
            case "white" :echo 'Your favorite color is white';
            break;
            case "black" : echo 'Your favorite color is black';
            break;
            case "lilac" : echo 'Your favorite color is lilac';
            break;
            default: echo "Sorry I'm not sure about your favorite color";

         }
        }
       

    ?>
    </p>
</body>
</html>
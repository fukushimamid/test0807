<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <?php 
            for ($i = 5; $i < 101; $i++) {
                $body="";
                if($i%7==0){
                    $body = "Fizz";
                }
                if($i%5==0){
                    $body += "Buzz";
                }
                if($body==""){
                    $body =$i;
                }
                echo $body;
            }
        ?>
    </body>
</html>
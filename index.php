<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavný nadpis</h1>
    <?php
        echo "<h2>Nadpis 2</h2>";
        
        $x = 10;
        echo $x;
        
        $meno = 'Peter';
        echo $meno;
        echo '<br>';
        var_dump($meno);
        
        $farby = array("cervena","modra","zelena");
        echo $farby[0];
        echo("<br>");
        
        foreach($farby as $farba){
            echo "Farba:". $farba. "<br>";
        }
        $data = array("Peter" => 25,
                "Jana" => 30,
                "Marek" => 20
            );
        foreach($data as $name => $age){
            echo "$name ma $age rokov <br>";
        }


        

    ?>
</body>
</html>
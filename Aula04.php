<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid purple;
        }
        img{
            width: 190px;
            height: 200px;
        }
    </style>


</head>
<body>
<?php

echo "<h1>Galeria de imagens</h1>";
echo "<table><tr>";
for($x=1; $x<=5; $x++){
    echo "<td><img src= 'fotos/foto$x.jpg'></td>";

}
echo "</tr>";
echo "<tr>";
for($x=6; $x<=10; $x++){
    echo "<td><img src= 'fotos/foto$x.jpg'></td>";
}

echo "</tr></table>";

?>
</body>
</html>
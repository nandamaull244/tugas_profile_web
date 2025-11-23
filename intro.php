<?php
echo "hello world";

//single line comment

/* multi line comment
line 1
line 2
*/
$name = "Nanda Maulana";
$number = 15;
$string1 = "ini adalah string 1";
$string2 = "ini string 2".$string1;
echo "<br>".$string2;
$no = '1';
echo (int)$no;
define("phi", 3.14);
echo "<br>".$phi;
$array = array();
$array[] = "nanda";

echo "<br><h2><strong>text bold</strong></h2>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cobba html</title>
</head>
<body>
    text html
    <br>
    <?php
        echo "ini adalah sintaks php"
    ?>
    <form action="">
        <input type="text" value="<?php $name?>"/>
    </form>
</body>
</html>
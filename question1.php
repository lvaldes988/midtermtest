1: Lion bit my finger!
Part 1: Lion will bite your finger exactly 50% of the time. First,
 write a function isBitten() that returns TRUE with 50% probability, 
 and FALSE otherwise. Hint: You may find the rand() function useful.
Part 2: Below the function, write code to generate a webpage that displays
 “Lion bit your finger!” or “Lion did not bite your finger!” using the isBitten() function.

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <?php 
    $output = isBitten();
    echo $output;
    ?>
    </div>

 <?php
function isBitten() {
    $random = rand(0, 1);
    if ($random === 0){
        return 'Lion bit your finger!';
    } else {
        return 'Lion did not bite your finger!';
    }
    return $random;
}
$result = isBitten();
// var_dump(isBitten());
?>

</body>
</html>
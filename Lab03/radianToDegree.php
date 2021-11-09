<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function Convert($radian)
    {
        $pi = 3.14159;
        return($radian * (180 / $pi));
    }
    
    $radian = $_POST["radian"]; $degree = $_POST["degree"];
    $res_degree = Convert((float)$radian);
    print "<br> Radian conver to degree: $res_degree" ;
    $res_radian = deg2rad((float)$degree);
    print "<br> Degree conver to radian: $res_radian"; 
    
    ?>
</body>

</html>
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
        $date = $_POST["date"];
        $date2 = $_POST["date2"];
        $name = $_POST["name"];
        $name1 = $_POST['name1'];
        function printDate($date, $date2)
        {
            $date = DateTime::createFromFormat('Y-m-d', $date);
            $date2 = DateTime::createFromFormat('Y-m-d', $date2);
            $mess = $date->format('l,d-m-Y');
            $mess2 = $date2->format('l, d-m-Y');
            print " $mess <br>";
            print " $mess2 <br>";
            $today   = new DateTime('today');
            $old = date_diff($date, $today);
            print (" Tuổi của $name là:  ");
            echo  $old->format("%Y");
            print "<br>";

            $old2 = date_diff($date2, $today);
            print " Tuổi của $name1 là:  ";
            echo  $old2->format("%Y");
            print "<br>";

            $diff = date_diff($date, $date2);
            print "Date1 va Date2 cach nhau:  ";
            echo  $diff->format("%R%a days");
        }
        printDate($date, $date2);

?>
</body>

</html>
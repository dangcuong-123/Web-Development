<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$fav_language = $_POST['fav_language'];

$submitted = $_POST['submitted'];
$sort_type = $_POST['sort_type'];

function user_sort($a, $b)
{
    // smarts is all-important, so sort it first
    if ($b == 'smarts') {
        return 1;
    } else if ($a == 'smarts') {
        return -1;
    }
    return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
}
$values = array(
    'firstname' => $firstname,
    'lastname' => $lastname,
    'gender' => $gender,
    'country' => $country,
    'subject' => $subject,
    'fav_language' => $fav_language
);

if ($submitted) {
    if ($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
        $sort_type($values, 'user_sort');
    } else {
        $sort_type($values);
    }
}
?>

<body>
    <ul>
        <?php
        foreach ($values as $key => $value) {
            echo "<li><b>$key</b>: $value</li>";
        }
        ?>
    </ul>
</body>
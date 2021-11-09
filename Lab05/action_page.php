<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];
    $fav_language = $_POST['fav_language'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous" />
        <link rel="stylesheet" href="style2.css">
    </head>

    <body>
        <div class="container">
            <h1 class="text-center">Thank for your submission !!!</h1>
            <div id="form">
                <p>Firstname : <?php echo $firstname ?> </p>
                <p>Lastname : <?php echo $lastname ?> </p>
                <p>Gender : <?php echo $gender ?> </p>
                <p>Country : <?php echo $country ?> </p>
                <p>Subject : <?php echo $subject ?> </p>
                <p>Your favorite Web language: </p>
                <ul>
                    <?php
                        foreach ($fav_language as $value){
                           print("<li>$value</li>");
                        }
                    ?>
                    
                </ul>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"></script>

</html>
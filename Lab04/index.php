<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="style1.css" rel="stylesheet">
</head>

<body>
    <h2>Profile</h2>
    <div class="container">
        <form action="./User_Sorting.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Gender</label>
                </div>
                <div class="col-75">
                    <input type="radio" id="Male" name="gender" value="Male" checked='checked'>
                      <label for="Male">Male</label>
                      <input type="radio" id="Female" name="gender" value="Female">
                      <label for="Female">Female</label>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Country</label>
                </div>
                <div class="col-75">
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                        <option value="vietnam">VietNam </option>
                        <option value="japan">Japan </option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Choose your favorite Web language:</label>
                </div>
                <div class="col-75">
                    <input type="radio" id="html" name="fav_language" value="HTML" checked="checked">
                      <label for="html">HTML</label>
                      <input type="radio" id="css" name="fav_language" value="CSS">
                      <label for="css">CSS</label>
                      <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                      <label for="javascript">JavaScript</label>
                </div>
            </div>
            <div class="col-25">
                <label>Choose your sort:</label>
            </div>
            <br />
            <br />
            <p>
                <input type="radio" name="sort_type" value="sort" checked="checked" /> Standard sort<br />
                <input type="radio" name="sort_type" value="rsort" /> Reverse sort<br />
                <input type="radio" name="sort_type" value="usort" /> User-defined sort<br />
                <input type="radio" name="sort_type" value="ksort" /> Key sort<br />
                <input type="radio" name="sort_type" value="krsort" /> Reverse key sort<br />
                <input type="radio" name="sort_type" value="uksort" /> User-defined key sort<br />
                <input type="radio" name="sort_type" value="asort" /> Value sort<br />
                <input type="radio" name="sort_type" value="arsort" /> Reverse value sort<br />
                <input type="radio" name="sort_type" value="uasort" /> User-defined value sort<br />
            </p>
            <p align="center">
                <input type="submit" value="Sort" name="submitted" />
            </p>
        </form>
    </div>
</body>

</html>
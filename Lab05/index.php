<?php 
    require 'page.php';
    $firstPage = new Page('Profile', date('Y'), 'Cuong');
    $firstPage->addContent("
    <div class=\"container\">
        <form action=\"./action_page.php\" method=\"POST\">
            <div class=\"row\">
                <div class=\"col-25\">
                    <label for=\"fname\">First Name</label>
                </div>
                <div class=\"col-75\">
                    <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Your name..\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-25\">
                    <label for=\"lname\">Last Name</label>
                </div>
                <div class=\"col-75\">
                    <input type=\"text\" id=\"lname\" name=\"lastname\" placeholder=\"Your last name..\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-25\">
                    <label>Gender</label>
                </div>
                <div class=\"col-75\">
                    <input type=\"radio\" id=\"Male\" name=\"gender\" value=\"Male\">
                      <label for=\"Male\">Male</label>
                      <input type=\"radio\" id=\"Female\" name=\"gender\" value=\"Female\">
                      <label for=\"Female\">Female</label>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-25\">
                    <label for=\"country\">Country</label>
                </div>
                <div class=\"col-75\">
                    <select id=\"country\" name=\"country\">
                        <option value=\"australia\">Australia</option>
                        <option value=\"canada\">Canada</option>
                        <option value=\"usa\">USA</option>
                        <option value=\"vietnam\">VietNam </option>
                        <option value=\"japan\">Japan </option>
                    </select>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-25\">
                    <label for=\"subject\">Subject</label>
                </div>
                <div class=\"col-75\">
                    <textarea id=\"subject\" name=\"subject\" placeholder=\"Write something..\"
                        style=\"height:200px\"></textarea>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-25\">
                    <label>Choose your favorite Web language:</label>
                </div>
                <div class=\"col-75\">
                    <input type=\"checkbox\" id=\"html\" name=\"fav_language[0]\" value=\"HTML\">
                      <label for=\"html\">HTML</label>
                      <input type=\"checkbox\" id=\"css\" name=\"fav_language[1]\" value=\"CSS\">
                      <label for=\"css\">CSS</label>
                      <input type=\"checkbox\" id=\"javascript\" name=\"fav_language[2]\" value=\"JavaScript\">
                      <label for=\"javascript\">JavaScript</label>
                </div>
            </div>
            <div class=\"row\">
                <input type=\"submit\" value=\"Submit\">
            </div>
        </form>
    </div>");

echo $firstPage->get();
?>
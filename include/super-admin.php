<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/8/2018
 * Time: 11:28 PM
 */
echo "<div class=\"row\">
        <form class=\"col s12\" action=\"include/addAdmin.php\" method=\"post\">
            <h3>Add Admin Form</h3>
            <div class=\"row\">
                <label class=\"input-help col l12 s12\" for=\"temp\" style=\"color: #00C853\">EG/2017/XXX</label>
                <div class=\"input-field col s10 l10\">
                    <input name=\"tempNo\" id=\"tempNo\" type=\"text\" class=\"validate col l10 s10\" onkeydown=\"return isNumber(event)\" onkeyup=\"validTempNo()\">
                    <label for=\"last_name\">Temp No</label>
                </div>
                <h6 id=\"tempRange\" class=\"input-help col l2 s2\" style=\"color: #00695c\">001-226</h6>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s10 l10\">
                    <input name=\"name\" id=\"name\" type=\"text\"  onkeydown=\"return isLetter(event)\" class=\"validateName\" >
                    <label for=\"last_name\">Admin Name</label>
                </div>
            </div>
            <button id=\"adminsubmitbtn\" class=\"btn-large waves-light waves-effect\" name=\"submitAdmin\">Submit</button>
        </form>
    </div>";
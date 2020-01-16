
<?php
include 'dbConnection.php';

$sql='select DISTINCT District from members order by 1 asc;';;
$result=mysqli_query($connection,$sql);
$rows=mysqli_num_rows($result);
echo mysqli_error($connection);



if($rows>0){
    echo "<form action=\"include/show-members.php\" method=\"get\">
            <div class=\"row\">
                <div class=\"input-field col s10 l10\">
                   <select name=\"district\">
                        <option value=\"\" disabled selected>Choose your option</option>";
        while($row=mysqli_fetch_assoc($result)){
        $district=$row['District'];
                        echo "<option value=\"$district\">$district</option>";

    }
    echo  "        </select>
                   <label>District</label>
                </div>
             </div>
            <button id=\"submitbtn\" class=\"btn-large waves-light waves-effect\" name=\"submit\">Submit</button>
         </form>";
}else{
    echo '<p id="sharing">No members here</p>';
}

?>
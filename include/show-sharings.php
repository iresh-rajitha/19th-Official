<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/8/2018
 * Time: 5:43 PM
 */
include 'dbConnection.php';

$sql="SELECT postName,Topic,link
FROM Admin a,Sharings s
where a.AID=s.AID
order by SID desc;";
$result=mysqli_query($connection,$sql);
$rows=mysqli_num_rows($result);
if($rows>0){
    while($row=mysqli_fetch_assoc($result)){
        $name=$row['postName'];
        $topic=$row['Topic'];
        $link=$row['link'];
        echo "<div class=\"coupon\">
    <div class=\"container\">
        <h5>$name</h5>
    </div>
    <div class=\"container\" style=\"background-color:white\">
        <h4><b>$topic</b></h4>
        <a href=$link class='btn waves-effect waves-light'>Link</a>
    </div>
</div>";
    }
}else{
    echo '<p id="sharing">No Sharings here</p>';
}
?>
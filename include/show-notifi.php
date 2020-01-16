<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/8/2018
 * Time: 5:43 PM
 */
include 'dbConnection.php';

$sql="SELECT postName,Topic,NtfDetail,date
FROM Admin a,Notifications n
where n.AID=a.AID
order by NID desc";
$result=mysqli_query($connection,$sql);
$rows=mysqli_num_rows($result);

if($rows>0){
    while($row=mysqli_fetch_assoc($result)){
        $name=$row['postName'];
        $topic=$row['Topic'];
        $notification=$row['NtfDetail'];
        $date=$row['date'];
        echo "<div class=\"coupon\">
    <div class=\"container\">
        <h5>$name</h5>
    </div>
    <div class=\"container\" style=\"background-color:white\">
        <h4><b>$topic</b></h4>
        <p>$notification</p>
    </div>
    <div class=\"container\">
        <p class=\"expire\">Date:$date</p>
    </div>
</div>";
    }
}
?>
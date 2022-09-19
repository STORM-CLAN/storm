<!DOCTYPE html>
    <style>
        .nickname,.go,.nick,.hs,h5{display:none;}
        
    </style>
<div class ="result">
    <form class="container">
<?php

include("players.php");


$sql=" select * from players where ID='$_POST[ID]'          ";

$result = mysqli_query($database, $sql);


while( $row = mysqli_fetch_array($result) ){
    echo "<h2>"."Name: ". "<b>". $row['playername']."</b>"."</h2>";
    echo "<h2>"."Nickname: "."<span>".$row['nickname']."</span>"."</h2>";
    echo "<h2>"."Games you play: "."<b>".$row['games']."</b>"."</h2>";
    echo "<h2>"."Fortnite rank: "."<b>".$row['fortrank']."</b>"."</h2>";
    echo "<h2>"."Rocket League rank: "."<b>".$row['rocketrank']."</b>"."</h2>";
    echo "<h2>"."PUBG rank: "."<b>".$row['pubgrank']."</b>"."</h2>";
    echo "<h2>"."FreeFire rank: "."<b>".$row['freerank']."</b>"."</h2>";
    echo "<h2>"."Minecraft rank: "."<b>".$row['minerank']."</b>"."</h2>";
    echo "<h2>"."FIFA rank: "."<b>".$row['fifarank']."</b>"."</h2>";
    echo "<h2>"."Other data: "."<b>".$row['playerdata']."</b>"."</h2>";
}
mysqli_close($database);

?>
</form>
</div>
</html>
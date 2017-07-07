<?php
if(!isset($_POST['find'])){
    header("location:index.php");
}
include "connect.php";
$title=$_POST['title'];
$sql="SELECT * FROM Movies WHERE Title LIKE :title OR Secondtitle LIKE :title";

$stmt=$pdo->prepare($sql);
$stmt->bindValue(':title',"%".$title."%");
$stmt->execute();
$res=$stmt->fetchall();

    if($res){
    foreach($res as $row){
        ?><a href="streaming.php?idmovie=<?php echo $row['ID'];?>">
    <?php
        if($row['Secondtitle']!=""){
        echo $row['Title']." - ".$row['Secondtitle']."<br>";
        }
        else{
            echo $row['Title']."<br>";
        }
    ?>
        </a>
<?php
    }
    }
   else{
       echo "Nothing found.<br>";
   }
?>
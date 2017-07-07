<?php
if(!isset($_GET['idmovie'])){
    header("location:index.php");
}
include "connect.php";
$idmovie=($_GET['idmovie']);
$sql="SELECT Title ,Extension,Secondtitle,Directory FROM Movies WHERE ID=:idmovie";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(':idmovie',$idmovie);
$stmt->execute();
$ris=$stmt->fetchall();

    foreach($ris as $row){
        $title=$row['Title'];
        $ext=$row['Extension'];
        $dir=$row['Directory']."/";
        if($row['Secondtitle']!=""){
        $secondtitle="-".$row['Secondtitle'];
        }
        else{
            $secondtitle="";
        }
    }

$title=str_replace(" ","_",$title);
if(isset($secondtitle)){
$secondtitle=str_replace(" ","_",$secondtitle);
}
$file=$title . $secondtitle.".".$ext;
$path=$directory1.$dir.$file;
?>

<html>
<head>
    <title>Streaming Page</title>
</head>
<body>
<arcticle>

    <video widht="720" height="480" controls>
    <source src="<?php echo $path; ?>" type="video/mp4">
       this movie player is not suppored by your browser
    </video>
    
</arcticle>    
</body>
</html>
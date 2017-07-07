<?php
include "connect.php";
session_start();



//open the directories
if(!is_dir($directory1)){
    echo " the directory is not a folder";
                       }
$resource1=opendir($directory1) or die('Unable to open the folder');

while(($directory = readdir($resource1)) !==FALSE){
    if ($directory==".." or $directory=="."){
        $directory="";
    }
$directory2 = $directory1.$directory;
    
if(!is_dir($directory2)){
    echo " the directory is not a folder";
                       }
 $resource2= opendir($directory2) or die('Unable to open the folder');
while(($file2 = readdir($resource2)) !==FALSE)
{
 if((!is_dir($file2))&($file2!=".")&($file2!=".."))
 {
 if(strpos($file2,".") and !strpos($file2,".ini"))
 {
     
     
     //istro
     list($filename,$ext)=explode(".",$file2);     
     if(strpos($filename,"-")){
        list($title,$secondtitle)=explode("-",$filename);
         $secondtitle=str_replace("_"," ",$secondtitle);
     }
     
else{
         $title=$filename;
         $secondtitle=NULL;
         
     }
     $title=str_replace("_"," ",$title);
     
     
     //movie control
     if($secondtitle===NULL){
    $query="SELECT * FROM Movies WHERE Title=:title AND Secondtitle IS NULL";
    $stmt=$pdo->prepare($query);
    $stmt->bindValue(':title',$title);
    $stmt->execute();
    }
     
    
    if($secondtitle!=NULL){
        $query="SELECT * FROM Movies WHERE Title=:title AND Secondtitle=:secondtitle";
    $stmt=$pdo->prepare($query);
    $stmt->bindValue(':title',$title);
    $stmt->bindValue(':secondtitle',$secondtitle);
    $stmt->execute();
    }
     
     
    $result = $stmt->fetch(PDO::FETCH_ASSOC);    
     //insert INTO
    if(!$result and $title!=NULL){
     $sql="INSERT INTO Movies(Title,Secondtitle,Extension,Directory) VALUES(:title,:secondtitle,:ext,:directory)";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(':title',$title);
$stmt->bindValue(':ext',$ext);
$stmt->bindValue(':secondtitle',$secondtitle);
$stmt->bindValue(':directory',$directory);
$stmt->execute();

}   
     
}
     
     
     
 }
 }
    closedir();
}

closedir();
?>

<html>
<head><title>Main page of streaming</title></head>
<body>
<form action="movie.php" method=post>
    <label>Insert the movie's name: </label><br>
    <input type="text" name="title" required><br><br>
    <button type="submit" name="find">find</button><br><br><br>
    
</form>
</body> 
</html>
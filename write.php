<?php
session_start();

$title=$_POST['title'];
$contents=$_POST['contents'];  
$id = $_SESSION['id'];
$pw = $_SESSION['pw'];
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO board
(no, title, content, date, hit, id, password)
values
(null, '" . $title . "', '" . $contents . "', '" . $date . "', 0,'"  . $id . "','".$pw. "')";

echo $sql;

$conn=mysqli_connect("localhost","root","111111","useri");

$result = mysqli_query($conn, $sql);

    if($result){
        echo "qweqwe";
        header('Location: board.php');
    }
    else{
        echo "asdasd";
    }


?>